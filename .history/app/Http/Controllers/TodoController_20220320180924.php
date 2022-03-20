<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from todos');
     
        $items = Todo::all();
        return view('index', ['items' => $items]);
    }




}
