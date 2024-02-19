<?php

use App\Http\Requests\ContactRequest;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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

   public function messages()
     {
         return [
             'email.email' => 'メールアドレスはメール形式で入力してください',
             'tel.numeric' => '電話番号は5桁までの数字で入力してください',
             'tel.digits_between' => '電話番号を10桁から11桁の間で入力してください',
             'content.content' =>'お問い合わせ内容は120文字以内で入力してください'
         ];
     }
}


