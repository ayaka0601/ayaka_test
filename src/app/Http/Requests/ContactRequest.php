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
            'first-name' => ['required', 'string', 'max:225'],
            'last-name' => ['required', 'string', 'max:225'],
            'gender' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tel' => ['required', 'numeric', 'digit_between:5'],
            'address' => ['required'],
            'category' => ['required'],
            'content' => ['required', 'max:120'],
        ];
    }
    public function messages()
    {
        return [
            'first-name.required' => '姓を入力してください',
            'first-name.string' => '名前を文字列で入力してください',
            'first-name.max' => '名前を255文字以下で入力してください',
            'last-name.required' => '名を入力してください',
            'last-name.string' => '名前を文字列で入力してください',
            'last-name.max' => '名前を255文字以下で入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'tel.required' => '電話番号を入力してください',
            'tel.numeric' => '電話番号は数字で入力してください',
            'tel.digit_between' => '電話番号は５桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'category.required' => 'お問い合わせの種類を選択してください',
            'content.required' => 'お問い合わせの内容を入力してください',
            'content.max:120' => 'お問い合わせの内容は120文字以内で入力してください',
        ];
    }
}
