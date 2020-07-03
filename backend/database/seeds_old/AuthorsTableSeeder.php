<?php

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
        DB::table('authors')->insert([
            ['name' => '芥川 竜之介',],
            ['name' => '太宰 治',],
            ['name' => '新美 南吉',],
            ['name' => '宮沢 賢治',],
        ]);
    }
}
