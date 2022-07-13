@section('content')

@foreach ($items as $item)
  <tr>
    <td> {{$item->created_at}} </td>
    <td> {{$item->content}} </td>
    <td>
      <form action="/todo/update" method="post">
        @csrf
        <input type="submit" value='更新' class="btn_update">
      </form>
    </td>
    <td>
      <form action="/todo/delete" method="post">
        @csrf
        <input type="submit" value="削除" class="btn_delate">
      </form>
    </td>
  </tr>
@endforeach

@endsection