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

    .title{

    }
        td {
      padding: 5px 10px;
      text-align: center;
    }

    .button {
    text-align: left;
    border: 2px solid #dc70fa;
    font-size: 12px;
    color: #dc70fa;
    background-color: #fff;
    font-weight: bold;
    padding: 8px 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.4s;
    outline: none;
}

.input-add {
    width: 80%;
    padding: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
    appearance: none;
    font-size: 14px;
    outline: none;
}

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
      font-size:32px;
      color:white;
      text-shadow:1px 0 5px #289ADC;
      margin-left: 1px
    }
    .content {
      margin:10px; 
    }
    </style>
  </head>
  <body>
  <div class="container">
    <div class="card">
      <h1 class="title">Todo List</h1>
            <div class="todo">
        <form action="/todo/create" method="post">
          
          <input type="text" class="input-add" name="content" />
          <input class="button" type="submit" value="追加" />
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
            <form action="/todo/update?id=1" method="post">
              <td>
                <input type="text" class="input-update" value="aaa1" name="content" />
              </td>
              <td>
                <button class="button">更新</button>
              </td>
            </form>
            <td>
              <form action="/todo/delete?id=1" method="post">
                <button class="button">削除</button>
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