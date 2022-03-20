<?php

namespace App\Models;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
        use HasFactory;

    protected $fillable = [content];

    public static $rules = array(
        'name' => 'required',
        'age' => 'integer|min:0|max:150',
        'nationality' => 'required'
    );
    public function getDetail()
    {
         $txt = 'ID:'.$this->id  . $this->content;
        return $txt;
    }
}
