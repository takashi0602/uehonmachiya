<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreatePost extends FormRequest
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
          'name' => 'required|string|max:50',
          'category_name' => 'nullable|string|max:20',
          'author' => 'required|string|max:50',
          'company' => 'required|string|max:50',
          'isbn' => 'nullable|string|max:13',
          'description' => 'required|string|max:500',
          'price' => 'required',
          'sales_price' => 'required',
          'safety' => 'required',
          'img' => 'required|image'
        ];
    }
}
