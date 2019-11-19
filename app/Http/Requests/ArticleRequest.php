<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // 可以在這裡對身份做驗證，避免編輯到別人的資料
        // 暫時先回傳 true
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // 新增驗證規則
        return [
            'title' => 'required|min:3',
            'body'  => 'required',
        ];
    }
}
