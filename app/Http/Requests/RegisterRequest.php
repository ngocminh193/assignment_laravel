<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'cfpassword' => 'required_with:password|same:password',
            'dob' => 'required|date',
            'phone'=>'required|min:6|max:10|',
        ];
    }

    public function messages(){
        return [
            'email.required' => 'Không được để trống email',
            'email.email' => 'Email sai định dạng',
            'dob.required'=>'Không được để trống ngày sinh',
            'name.required'=>'Không được để trống Username',
            'password.required' => 'Không được để trống password',
            'password.min' => 'Password tối thiểu phải có 6 ký tự',
            'cfpassword.same' => 'Mật khẩu nhập không trùng khớp',
            'phone.required'=>'Không được để trống số điện thoại',
            'phone.min'=>'Số điện thoại không đúng',
            'phone.max'=>'Số điện thoại không đúng',
        ];
    }
}
