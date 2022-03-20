<?php

namespace App\Models;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
        use HasFactory;

    protected $fillable = ['name'];

    public static $rules = array(
        'content' => 'required',
    );
    public function getDetail()
    {
         $txt = 'ID:'.$this->id  . $this->content;
        return $txt;
    }
}
