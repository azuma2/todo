<?php

namespace App\Models;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
        use HasFactory;

    protected $fillable = ['content'];

    public static $rules = array(
        'content' => 'required',
    );
    


    public function post(Request $request)
    {
        $content = $request->cont;
        $item = [
            'cont' => $content . 'と入力しましたね'
        ];
        return view('index', $item);
    }
}
