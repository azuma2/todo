<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index()
    {
        $items = DB::select('select * from todo');
        return view('index', ['items' => $items]);
    }
        public function add()
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
        ];
        DB::insert('insert into todo (name, age, nationality) values (:name, :age, :nationality)', $param);
        return redirect('/');
    }
}
