<?php

namespace App\Models;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    public function getDetail()
    {
         $txt = 'ID:'.$this->id . ' ' . $this->content;
        return $txt;
    }
}
