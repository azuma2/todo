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
                $param = ['id' => $request->id];
        $item = DB::select('select * from todos where id = :id', $param);
        return view('edit', ['form' => $todo]);
    }
    public function update(Request $request)
    {
         $param = [
            'id' => $request->id,
            'name' => $request->name,
            'age' => $request->age,
            'nationality' => $request->nationality,
        ];
        DB::update('update authors set name =:name, age =:age, nationality =:nationality where id =:id', $param);

        return redirect('/');
    }




    public function delete(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select * from todos where id = :id', $param);
        return view('delete', ['form' => $item[0]]);
    }
    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::delete('delete from todos where id =:id', $param);
        return redirect('/');
    }





}
