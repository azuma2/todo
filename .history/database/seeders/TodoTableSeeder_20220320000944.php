<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableSeeder extends Seeder
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
        DB::table('todo')->insert($param);
        $param = [
            'content' => 'jack',
        ];
        DB::table('todo')->insert($param);
    }
}