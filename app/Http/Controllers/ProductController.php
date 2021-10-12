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
     * 商品一覧画面
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // $id = Auth::id();
        // $id = 1;

        $products = Product::where('account_id', $id)->get();

        return view('mypage',[
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
    public function store(ProductRequest $request, $id)
    {
        // オリジナルの名前を残す場合
        $filename = time(). '.' .$request->image->getClientOriginalName(); // 時間を付けて保存
        $image = $request->image->storeAs('',$filename,'public');

        $product = new Product;

        $product->product_name = $request->product_name;
        $product->image = $image;
        //オリジナルの名前を保存しない場合
        // $product->image = time(). '.' .$request->image->store('public'); // strage/app/publicに保存
        $product->image = $image;
        $product->tag = $request->tag;
        $product->category = $request->category;
        $product->stock = $request->stock;
        $product->best_by_date = $request->best_by_date;
        $product->use_by_date = $request->use_by_date;
        $product->account_id = $id;
        $product->save();


        return redirect('/product/'.$id);
    }

    /**
     * 商品個別ページの表示
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product_id)
    {
        // $id = Auth::id();
        $product_id = 1;

        $product = Product::findOrFail($product_id);

        return view('product_page',[
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
        $product = Product::findOrFail($product_id);

        return view('edit_page',[
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
    public function update(ProductRequest $request, $id)
    {
        // 変更があったときのみ
        if($request->image){
            Storage::disk('public')->delete('image');
            $filename = time(). '.' .$request->image->getClientOriginalName(); // 時間を付けて保存
            $image = $request->image->storeAs('',$filename,'public');
        }

        $savedata = [
            'product_name' => $request->product_name,
            'image' => $image,
            'tag' => $request->tag,
            'category' => $request->category,
            'stock' => $request->stock,
            'best_by_date' => $request->best_by_date,
            'use_by_date' => $request->use_by_date,
        ];

        $product = new Product;
        $product->fill($savedata)->save();

        return redirect('/product');
    }

    /**
     * 登録商品の削除
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        $product = Product::findOrFail($product_id);

        $product->delete();

        return redirect('/product');
    }
}