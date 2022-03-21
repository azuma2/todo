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
        $content = $request->content;
        $item = [
            'cont' => $content . 'と入力しましたね'
        ];
        return view('index', $item);
    }


    use SoftDeletes;

    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

}
