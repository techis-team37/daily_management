<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * マイページ画面
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request ,$id)
    {
        $category = $request->category;
        if($category == "null"){
            $category = null;
        }

        session(['category'  => $request->category]);
        $stocks = array();

        if (isset($category)) {
            $products = Product::where('account_id', $id)
                                ->where('category', $category)
                                ->orderBy('created_at', 'desc')
                                ->limit(4)
                                ->get();

            $products_graph = Product::where('account_id', $id)
                                    ->where('category', $category)
                                    ->orderBy('stock', 'asc')
                                    ->get();
        } else {
            $products = Product::where('account_id', $id)
                                ->orderBy('created_at', 'desc')
                                ->limit(4)
                                ->get();

            $products_graph = Product::where('account_id', $id)
                                ->orderBy('stock', 'asc')
                                ->get();
        }

        foreach($products_graph as $product_graph){
            $stocks[$product_graph -> product_name] = $product_graph -> stock;
        }

        if($category == null){
            $category = "すべて";
        }

        // dd($category);


        return view('mypage',[
            'products' => $products,
            'stocks' => $stocks,
            'category' => $category,
        ]);
    }

    /**
     * 商品一覧画面
     *
     * @return \Illuminate\Http\Response
     */
    public function index_product(Request $request ,$id)
    {
        $category = $request->category;

        if(isset($category)){
            $category = $request->category;
            if($category == "null"){
                $category = null;
            }
        }else {
            $category = session('category');
        }

        // dd($category);

        if (isset($category)) {
            $products = Product::where('account_id', $id)
                                ->where('category', $category)
                                ->orderBy('created_at', 'desc')
                                ->get();
        } else {
            $products = Product::where('account_id', $id)
                                ->orderBy('created_at', 'desc')
                                ->get();
        }

        if($category == null){
            $category = "すべて";
        }

        return view('product',[
            'category' => $category,
            'products' => $products,
        ]);

    }

    /**
     * 商品登録画面
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.product-add');
    }

    /**
     * 商品登録の保存
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        // オリジナルの名前を残す場合
        if($request -> image !== null){
            $filename = time(). '.' .$request->image->getClientOriginalName(); // 時間を付けて保存
            $image = $request->image->storeAs('',$filename,'public');
        }

        $product = new Product;

        $product->product_name = $request->product_name;
        if($request -> image !== null){
            $product->image = $image;
        }else{
            $product->image = null;
        }
        //オリジナルの名前を保存しない場合
        // $product->image = time(). '.' .$request->image->store('public'); // strage/app/publicに保存
        $product->tag = $request->tag;
        $product->category = $request->category;
        $product->stock = $request->stock;
        $product->best_by_date = $request->best_by_date;
        $product->use_by_date = $request->use_by_date;
        $product->account_id = session('id');
        $product->save();

        return redirect('/product/'.session('id'));
    }

    /**
     * 商品個別ページの表示
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product_id)
    {
        $product = Product::where('product_id', $product_id)->firstOrFail();

        return view('products.product-page',[
            'product' => $product,
        ]);
    }

    /**
     * 商品編集画面
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($product_id)
    {
        $product = Product::where('product_id', $product_id)->firstOrFail();

        return view('products.product-update',[
            'product' => $product,
        ]);
    }

    /**
     * 商品編集の保存
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $product_id)
    {
        // 変更があったときのみ
        if($request->image){
            $delete_image = Product::where('product_id', $product_id)->value('image');
            Storage::delete('public/'.$delete_image);
            $filename = time(). '.' .$request->image->getClientOriginalName(); // 時間を付けて保存
            $image = $request->image->storeAs('',$filename,'public');

            $savedata = [
                'product_name' => $request->product_name,
                'image' => $image,
                'tag' => $request->tag,
                'category' => $request->category,
                'stock' => $request->stock,
                'best_by_date' => $request->best_by_date,
                'use_by_date' => $request->use_by_date,
            ];
        }else{
            $savedata = [
                'product_name' => $request->product_name,
                'tag' => $request->tag,
                'category' => $request->category,
                'stock' => $request->stock,
                'best_by_date' => $request->best_by_date,
                'use_by_date' => $request->use_by_date,
            ];
        }


        $product = Product::find($product_id);
        $product->fill($savedata)->update();

        $account = Product::where('product_id', $product_id)
                            ->firstOrFail();

        return redirect('/product/'.$account->account_id);
    }

    /**
     * 登録商品の削除
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        $delete_image = Product::where('product_id', $product_id)->value('image');
        Storage::delete('public/'.$delete_image);

        $account = Product::where('product_id', $product_id)
                            ->firstOrFail();

        $product = Product::findOrFail($product_id);

        $product->delete();


        return redirect('/product/'.$account->account_id);
    }
}