<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            //
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'dob' => 'required|date',

        ];
    }

    public function messages(){
        return [
            'name.required' => 'Không được để trống name',
            'email.required' => 'Không được để trống email',
            'email.email' => 'Email sai định dạng',
            'password.required' => 'Không được để trống password',
            'password.min' => 'Password tối thiểu phải có 6 ký tự',
            'dob.required' =>'Không được để trống ngày sinh'
        ];
    }
}
