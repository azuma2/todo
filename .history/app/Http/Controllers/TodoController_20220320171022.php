<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Todos;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from todo');
     
        $items = todos::all();
        return view('index', ['items' => $items]);
    }
     public function post(Request $request)
    {
        $validate_rule = [
            'name' => 'content',
        ];
        $this->validate($request, $validate_rule);
        return view('index', ['txt' => '正しい入力です']);
    }
        public function add()
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $param = [
            'content' => $request->content,
        ];
        DB::insert('insert into todo (content) values (:content)', $param);
        return redirect('/');
    }
    
    public function edit(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select * from todo where id = :id', $param);
        return view('edit', ['form' => $item[0]]);
    }
    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'content' => $request->content,
        ];
        DB::update('update todo set content =:content  where id =:id', $param);
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select * from todo where id = :id', $param);
        return view('delete', ['form' => $item[0]]);
    }
    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::delete('delete from todo where id =:id', $param);
        return redirect('/');
    }


}
