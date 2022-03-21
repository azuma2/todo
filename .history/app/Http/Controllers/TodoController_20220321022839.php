<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $items = Todo::all();
        
        return view('index', ['items' => $items]);
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

    }






}
