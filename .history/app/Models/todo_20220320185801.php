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
    public function getDetail()
    {
         $txt = 'ID:'.$this->id  . $this->content;
        return $txt;
    }

             public function post(Request $request)
    {
        $validate_rule = [
            'content' => 'required',
        ];
        $this->validate($request, $validate_rule);
        return view('index', ['txt' => '正しい入力です']);
    }
}
