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
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
      </div>
      <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form-item-label-required">お名前</span>※
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <label for="first-name">姓:</label>
              <input type="text" id="first-name" name="first-name" placeholder="例:山田" value="{{ old('name') }}" />
              <label for="last-name">名:</label>
              <input type="text" id="last-name" name="last-name" placeholder="例:太郎" value="{{ old('name') }}" />
            </div>
            <div class="form__error">
              @error('name')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form-item-label-required">性別</span>※
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
            <input type="radio" name="gender" value="男" checked="checked" />男
            <input type="radio" name="gender" value="女" /> 女
            <input type="radio" name="gender" value="その他" /> その他
            </div>
          </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form-item-label-required">メールアドレス</span>※
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
            </div>
            <div class="form__error">
              @error('email')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form-item-label-required">電話番号</span>※
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="tel" placeholder="例:090" value="{{ old('tel') }}" /> -
              <input type="tel" name="tel" placeholder="例:1234" value="{{ old('tel') }}" /> -
              <input type="tel" name="tel" placeholder="例:5678" value="{{ old('tel') }}" />
            </div>
            <div class="form__error">
              @error('tel')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form-item-label-required">住所</span>※
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="address" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
            </div>
            <div class="form__error">
              @error('address')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form-item-label-required">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="building" name="building" placeholder="例:千駄ヶ谷マンション102" value="{{ old('building') }}" />
            </div>
          </div>
        </div>
        <form class="form">
        <div class="form__group">
          <div class="form__group-title">
            <span class="form-item-label-required">お問い合わせの種類</span>※
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <select name="category">
                <option value="1">商品のお届けについて</option>
                <option value="2">商品の交換について</option>
                <option value="3">商品トラブル</option>
                <option value="4">ショップへのお問い合わせ</option>
                <option value="5">その他</option>
              </select>
            </div>
            <div class="form__error">
              @error('category')
              {{ $message }}
              @enderror
            </div>
          </div>
          <div class="form__group">
            <div class="form__group-title">
              <span class="form__label--item">お問い合わせ内容</span>※
            </div>
            <div class="form__group-content">
              <div class="form__input--textarea">
                <textarea name="content" placeholder="お問い合わせ内容をご記載ください" value="{{ old('content') }}"></textarea>
              </div>
              <div class="form__error">
              @error('content')
              {{ $message }}
              @enderror
            </div>
            </div>
          </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
