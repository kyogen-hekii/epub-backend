<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddSamplesAuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            ['name' => '魯迅',],
            ['name' => 'ドイル アーサー・コナン',],
            ['name' => '金田 鬼一',],
            ['name' => 'ドストエフスキー',],
        ]);
    }
}
