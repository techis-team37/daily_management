<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_name' => 'required|max:50',
            'image' => 'image|max:500',
            'tag' => 'max:20',
            'category' => 'required|max:20',
            'stock' => 'required|max:3',
            'best_by_date' => 'date|nullable',
            'use_by_date' => 'date|nullable',
        ];
    }

    /**
     * エラーメッセージを日本語化
     *
     */
    public function messages()
    {
        return [
            'product_name.required' => '商品名を入力してください',
            'product_name.max' => '商品名は50文字以内で入力してください',
            'image.image' => '写真はimageファイルを選択してください',
            'tag.max' => 'タグは20文字以内で入力してください',
            'category.required' => 'カテゴリーを入力してください',
            'category.max' => 'カテゴリーは20文字以内で入力してください',
            'stock.required' => '残数を入力してください',
            'stock.max' => '残数は999以下で入力して下さい',
            'best_by_date.date' => '日付を入力してください',
            'use_by_date.date' => '日付を入力してください',
        ];
    }
}
