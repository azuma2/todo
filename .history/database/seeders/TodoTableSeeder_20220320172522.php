<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => 'tony',
        ];
        DB::table('todos')->insert($param);
        $param = [
            'content' => 'jack',
        ];
        DB::table('todo')->insert($param);
    }
}