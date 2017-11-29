<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateRequest extends FormRequest
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
            'category_name' => 'required|unique:categories_product,categories_name'
        ];
    }
    public function messages() {
        return [
            'category_name.required' => 'Vui Lòng Nhập Tên Category',
            'category_name.unique' => 'Tên Category Đã Tồn Tại',

        ];
    }
}
