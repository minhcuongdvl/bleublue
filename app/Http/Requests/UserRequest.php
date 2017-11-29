<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username' => 'required|unique:users,user_name'
        ];
    }
    public function messages() {
        return [
            'username.required' => 'Vui Lòng Nhập Tên Sản Phẩm',
            'username.unique' => 'Tên Đăng Nhập Đã Tồn Tại ! Vui Lòng Đăng Ký Lại',

        ];
    }
}
