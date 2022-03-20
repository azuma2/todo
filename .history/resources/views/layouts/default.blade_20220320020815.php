<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('\resources\views\layouts\reset.css') }}" >
    <title>@yield('title')</title>
    <style>
    body {
      font-size:16px;
      margin: 5px;
      background-color: #2d197c;
    }

    .

    .card {
    background-color: #fff;
    width: 50vw;
    padding: 30px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: 10px;
}
    h1 {
      font-size:60px;
      color:white;
      text-shadow:1px 0 5px #289ADC;
      letter-spacing:-4px;
      margin-left: 10px
    }
    .content {
      margin:10px; 
    }
    </style>
  </head>
  <body>
  <div class="container">
    <div class="card">
      <p class="title">Todo List</p>
            <div class="todo">
        <form action="/todo/create" method="post" class="flex between mb-30">
          <input type="hidden" name="_token" value="yPGHmdfvXMVMWtmtJqGVIjK97kTAmYJNKCWK19b7">          <input type="text" class="input-add" name="content" />
          <input class="button-add" type="submit" value="追加" />
        </form>
        <table>
          <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
                    <tr>
            <td>
              2022-03-19 07:32:46
            </td>
            <form action="https://intense-reef-81125.herokuapp.com/todo/update?id=1794" method="post">
              <input type="hidden" name="_token" value="yPGHmdfvXMVMWtmtJqGVIjK97kTAmYJNKCWK19b7">              <td>
                <input type="text" class="input-update" value="aaa1" name="content" />
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>
            <td>
              <form action="https://intense-reef-81125.herokuapp.com/todo/delete?id=1794" method="post">
                <input type="hidden" name="_token" value="yPGHmdfvXMVMWtmtJqGVIjK97kTAmYJNKCWK19b7">                <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
                  </table>
      </div>
    </div>
  </div>
  </div>
</body>

</html>