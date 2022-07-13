<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <style>
    body{
      background-color: Blue;
    }
    p{
      font-size: 20px;
      font-weight: bold;
    }
    div{
      background-color: white;
      border-radius: 10px;
      width: 60%;
      margin: 30% auto;
      padding: 3% 3% 7% 3%;
    }
    input.form{
      width: 80%;
      height: 30px;
    }
    input.btn{
      background-color: white;
      border-color: pink;
      color: pink;
      border-radius: 5px;
      height: 35px;
      width:15%
    }
    table{
      margin-top:10px;
      width: 100%;
    }
    input.btn_update{
      background-color: white;
      border-color: orange;
      color: orange;
      border-radius: 5px;
      height: 60px;
      width:50px;
    }
    input.btn_delate{
      background-color: white;
      border-color: green;
      color: green;
      border-radius: 5px;
      height: 60px;
      width:50px;
    }
    form{
      text-align:center;
    }
    td{
      text-align:center;
    }
  </style>      
</head>                                                   
<body>
  <div>
    <p>Todo List</p>
    <form action="/todo/create" method="post">
      <input type="text" name="todolist" class="form">
      <input type="submit" value="追加" class="btn">
    </form>
    <table>
      <tr>
        <th>作成日</th>
        <th>タスク名</th>
        <th>更新</th>
        <th>削除</th>
      </tr>
      @foreach ($items as $item)
      <tr>
        <td> {{$item->created_at}} </td>
        <td> {{$item->content}} </td>
        <td>
          <form action="/todo/update" method="post">
            <input type="submit" value='更新' class="btn_update">
          </form>
        </td>
        <td>
          <form action="/todo/delete" method="post">
            <input type="submit" value="削除" class="btn_delate">
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
</body>
</html>