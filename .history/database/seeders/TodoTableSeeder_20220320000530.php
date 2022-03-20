<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'tony',
        ];
        DB::table('todo')->insert($param);
        $param = [
            'name' => 'jack',
        ];
        DB::table('authors')->insert($param);
    }
}