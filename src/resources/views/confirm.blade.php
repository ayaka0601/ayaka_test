<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
    </div>
  </header>

<main>
@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">
  <div class="confirm__heading">
    <h1 class="contact-ttl">お問い合わせ内容確認</h1>
  </div>
  <form class="form" action="/contacts" method="post">
    @csrf
    <table class="contact-table">
        <tbody><tr>
          <th class="contact-item">名前</th>
          <td class="contact-body">
            <input type="text" name="name" value="{{ $contact['name'] }}" readonly />
          </td>
        </tr>
        <tr>
          <th class="contact-item">性別</th>
          <td class="contact-body">
            <label class="contact-sex">
              <input type="radio" name="sex">
              <span class="contact-sex-txt">男</span>
            </label>
            <label class="contact-sex">
              <input type="radio" name="sex">
              <span class="contact-sex-txt">女</span>
            </label>
            <label class="contact-sex">
              <input type="radio" name="sex">
              <span class="contact-sex-txt">その他</span>
            </label>
            <input type="sex" name="sex" value="{{ $contact['sex'] }}" readonly />
          </td>
        </tr>
        <tr>
          <th class="contact-item">メール</th>
          <td class="contact-body">
            <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
          </td>
        </tr>
        <tr>
          <th class="contact-item">電話</th>
          <td class="contact-body">
            <input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly />
          </td>
        </tr>
        <tr>
          <th class="contact-item">住所</th>
          <td class="contact-body">
            <input type="address" name="address" value="{{ $contact['address'] }}" readonly />
          </td>
        </tr>
        <tr>
          <th class="contact-item">建物名</th>
          <td class="contact-body">
            <input type="building_name" name="building_name" class="form-text">
          </td>
        </tr>
        <tr>
          <th class="contact-item">お問い合わせの種類</th>
          <td class="contact-body">
            <select name="choice" class="form-select">
              <option></option>
              <option>商品の交換について</option>
              <option>商品についての質問</option>
              <option>その他</option>
            </select>
            <input type="choice" name="choice" value="{{ $contact[''] }}" readonly />
          </td>
        </tr>
        <tr>
          <th class="contact-item">お問い合わせ内容</th>
            <td class="contact-body">
              <textarea name="問い合わせ" class="form-textarea"></textarea>
              <input type="content" name="choice" value="{{ $contact[''] }}" readonly />
            </td>
        </tr>
        </tbody></table>
        <button class="form__button-submit" type="submit">送信</button>
    </form>
  </div>
@endsection
  </main>
</body>

</html>
