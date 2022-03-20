<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TodoController extends Controller
{
    public function index()
    {
        $item = [
            'content' => '自由に入力してください',
        ];

        
        $items = Todo::all();
        return view('index', ['items' => $items]);
    }
    public function find()
    {
        return view('find', ['input' => '']);
    }
    public function search(Request $request)
    {
        $item = Todo::where('name', 'LIKE',"%{$request->input}%")->first();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('find', $param);
    }
    public function bind(Todo $todo)
    {
        $data = [
            'item'=>$todo,
        ];
        return view('todo.binds', $data);
    }
    public function add()
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $form = $request->all();
        Todo::create($form);
        return redirect('/');
    }



    public function post(Request $request)
    {
        $content = $request->content;
        $item = [
            'content' => $content . 'と入力しましたね'
        ];
        return view('index', $item);
    }
}