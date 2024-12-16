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
            'tel1' => ['required', 'numeric', 'max:5'],
            'tel2' => ['required', 'numeric', 'max:5'],
            'tel3' => ['required', 'numeric', 'max:5'],
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
            'tel1.required' => '電話番号を入力してください',
            'tel1.numeric' => '電話番号は数字で入力してください',
            'tel1.max' => '電話番号は５桁までの数字で入力してください',
            'tel2.required' => '電話番号を入力してください',
            'tel2.numeric' => '電話番号は数字で入力してください',
            'tel2.max' => '電話番号は５桁までの数字で入力してください',
            'tel3.required' => '電話番号を入力してください',
            'tel3.numeric' => '電話番号は数字で入力してください',
            'tel3.max' => '電話番号は５桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'category.required' => 'お問い合わせの種類を選択してください',
            'content.required' => 'お問い合わせの内容を入力してください',
            'content.max:120' => 'お問い合わせの内容は120文字以内で入力してください',
        ];
    }
}
