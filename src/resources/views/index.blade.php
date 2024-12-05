<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
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
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@section('css')

@endsection

@section('content')

<div class="Fashionably-Late__content">
  <div class="Fashionably-Late__heading">
  <h1 class="contact-ttl">Contact</h1>
  </div>
    <form class="form" action="/contacts/confirm" method="post">
      @csrf
    <table class="contact-table">
        <tbody><tr>
          <th class="contact-item">名前</th>
          <td class="contact-body">
            <input type="text" name="名前" class="form-text">
            <span class="form__label--required">必須</span>
          </td>
          <div class="form__error">
            @error('name')
            {{ $message }}
            @enderror
          </div>
        </tr>
        <tr>
          <th class="contact-item">性別</th>
          <td class="contact-body">
            <label class="contact-sex">
              <input type="radio" name="性別" checked>
              <span class="contact-sex-txt">男</span>
            </label>
            <label class="contact-sex">
              <input type="radio" name="性別">
              <span class="contact-sex-txt">女</span>
            </label>
            <label class="contact-sex">
              <input type="radio" name="性別">
              <span class="contact-sex-txt">その他</span>
            </label>
            <span class="form__label--required">必須</span>
          </td>
        </tr>
        <tr>
          <th class="contact-item">メール</th>
          <td class="contact-body">
            <input type="email" name="メール" class="form-text">
            <span class="form__label--required">必須</span>
          </td>
          <div class="form__error">
            @error('email')
            {{ $message }}
            @enderror
          </div>
        </tr>
        <tr>
          <th class="contact-item">電話</th>
          <td class="contact-body">
            <input type="tel" name="電話" class="form-text">
            <span class="form__label--required">必須</span>
          </td>
          <div class="form__error">
            @error('tel')
            {{ $message }}
            @enderror
          </div>
        </tr>
        <tr>
          <th class="contact-item">住所</th>
          <td class="contact-body">
            <input type="address" name="住所" class="form-text">
            <span class="form__label--required">必須</span>
          </td>
          <div class="form__error">
            @error('address')
            {{ $message }}
            @enderror
          </div>
        </tr>
        <tr>
          <th class="contact-item">建物名</th>
          <td class="contact-body">
            <input type="buildingname" name="建物名" class="form-text">
          </td>
        </tr>
        <tr>
          <th class="contact-item">お問い合わせの種類</th>
          <td class="contact-body">
            <select name="choice" class="form-select">
              <option>選択</option>
              <option>商品の交換について</option>
              <option>商品についての質問</option>
              <option>その他</option>
            </select>
            <span class="form__label--required">必須</span>
          </td>
          <div class="form__error">
            @error('choice')
            {{ $message }}
            @enderror
          </div>
        </tr>
        <tr>
          <th class="contact-item">お問い合わせ内容</th>
            <td class="contact-body">
              <textarea name="content" class="form-textarea"></textarea>
              <span class="form__label--required">必須</span>
            </td>
            <div class="form__error">
              @error('content')
            {{ $message }}
            @enderror
          </div>
        </div>
        </tr>
        </tbody></table>
        <input class="contact-submit" type="submit" value="送信">
        </div>
    </form>
  </div>
@endsection
</main>
</body>

</html>