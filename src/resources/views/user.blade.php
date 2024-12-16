@section('title', 'user.blade.php')

@section('content')
<table>
  <tr>
    <th>Data</th>
  </tr>
  @foreach ($auths as $auth)
    <tr>
      <td>{{$auth->getDetail()}}</td>
    </tr>
  @endforeach
</table>
@endsection