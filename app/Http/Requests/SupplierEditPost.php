<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierEditPost extends FormRequest
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
          'president' => 'required|string|max:50',
          'email' => 'required|string|max:255',
          'postal' => 'required|string|digits:7',
          'address' => 'required|string|max:255',
          'tel' => 'string|digits_between:8,11',
          'password' => 'nullable|min:6'
        ];
    }
}
