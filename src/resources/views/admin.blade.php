@section('title', 'admin.blade.php')

@section('content')
<form action="admin" method="POST">
@csrf
  <input type="text" name="input" value="{{$input}}">
  <input type="submit" value="見つける">
</form>
@if (@isset($item))
<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>age</th>
    <th>nationality</th>
  </tr>
  <tr>
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->age}}</td>
    <td>{{$item->nationality}}</td>
  </tr>
</table>
@endif
@endsection