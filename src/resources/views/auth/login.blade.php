

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div>
  <form class="form" action="/login" method="post">
    @csrf
    <div>
    <label for="email">メールアドレス:</label>
    <input type="email" id="email" name="email" required>
  </div>
  <div>
    <label for="password">パスワード:</label>
    <input type="password" id="password" name="password" required>
  </div>
  <div>
    <button type="submit">ログイン</button>
  </div>
</form>
  <div class="register__link">
    <a class="register__button-submit" href="/register">会員登録の方はこちら</a>
  </div>
</div>
@endsection
