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
$param = [
                'name' => $request->name,
        ];
        DB::insert('insert into todos (content, age, nationality) values (:name, :age, :nationality)', $param);


        return redirect('/');
    }


     public function edit(Request $request)
    {
        $todo = Todo::find($request->id);
        return view('edit', ['form' => $todo]);
    }
    public function update(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $form = $request->all();
        unset($form['_token']);
        Todo::where('id', $request->id)->update($form);
        return redirect('/');
    }





}
