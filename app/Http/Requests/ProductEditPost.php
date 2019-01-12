<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductEditPost extends FormRequest
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
          'product_name' => 'required|string|max:50',
          'category_name' => 'nullable|string|max:20',
          'author' => 'required|string|max:50',
          'company' => 'required|string|max:50',
          'isbn' => 'nullable|string|max:13',
          'price' => 'required',
          'sales_price' => 'required',
          'safety' => 'required'
        ];
    }
}
