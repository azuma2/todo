<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    public function getDetail()
    {
        $txt = 'ID:'.$this->id . ' ' . $this->content . ' ;
        return $txt;
    }
}
