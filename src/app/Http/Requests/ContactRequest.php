<?php

namespace App\Http\Requests;

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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'gender' => ['required'],
            'email' => ['required', 'email'],
            'tel' => ['required', 'numeric', 'digits_between:10,11'],
            'address' => ['required'],
            'content' => ['required', 'max:120']
        ];
    }

    public function messages()
    {
         return [
             'first_name.required' => '姓を入力してください',
             'last_name.required' => '名を入力してください',
             'gender.required' => '性別を選択してください',
             'email.required' => 'メールアドレスを入力してください',
             'email.email' => 'メールアドレスはメールアドレス形式で入力してください',
             'tel.required' => '電話番号を入力してください',
             'tel.numeric' => '電話番号を数字で入力してください',
             'tel.digits_between' => '電話番号を10桁から11桁の間で入力してください',
             'address.required' => '住所を入力してください',
             'content.required' => 'お問合せ内容を入力してください',
             'content.max' => 'お問い合わせ内容は120文字以下で入力してください'
         ];
     }
}
