<?php

namespace App\Models;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
        use HasFactory;

    protected $fillable = [cons];

    public static $rules = array(
        'cons' => 'required',
    );
    public function getDetail()
    {
         $txt = 'ID:'.$this->id  . $this->cons;
        return $txt;
    }
}
