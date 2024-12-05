<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>top-page</title>
</head>

<body>

@section('css')
<link rel="stylesheet" href="{{ asset('css/top.css') }}">
@endsection

@section('content')
<div class="attendance__alert">
  // メッセージ機能
</div>

<div class="attendance__content">
  <div class="attendance__panel">
    <form class="attendance__button">
      <button class="attendance__button-submit" type="submit">ログイン</button>
    </form>
    <form class="attendance__button">
      <button class="attendance__button-submit" type="submit">会員登録の方はこちら</button>
    </form>
  </div>
  <div class="attendance-table">
    <table class="attendance-table__inner">
      <tr class="attendance-table__row">
        <th class="attendance-table__header">名前</th>
        <th class="attendance-table__header">メールアドレス</th>
        <th class="attendance-table__header">パスワード</th>
      </tr>
      <tr class="attendance-table__row">
        <td class="attendance-table__item">テスト</td>
        <td class="attendance-table__item">テスト</td>
        <td class="attendance-table__item">テスト</td>
      </tr>
    </table>
  </div>
</div>
@endsection

</body>
</html>
