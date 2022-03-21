<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index()
    {
        $items = Todo::all();
        $items = DB::select('select * from todos');
        
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

$param = 

        $this->validate($request, Todo::$rules);
        $form = $request->all();
        Todo::create($form);

[
                'content' => $request->name,
        ];
        DB::insert('insert into todos (content) values (:content)', $param);


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
