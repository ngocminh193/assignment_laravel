<?php

namespace App\Http\Requests\Posts;

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
            'title' => 'required|min:10',
            'content' => 'required|min:10',
        ];
    }

    public function messages(){
       return [
           'title.required' => 'Không được để trống tiêu đề',
           'title.min'=>'Tiêu đề quá ngắn',
           'content.required' => 'Không được để trống nội dung',
           'content.min'    => 'Bài viết quá ngắn',
           ] ;
    }
}

