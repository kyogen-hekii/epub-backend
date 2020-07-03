<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySecondariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_secondaries')->insert([
            ['title' => '小説',     'order' => 1,],
            ['title' => '詩歌',     'order' => 2,],
            ['title' => 'エッセイ',     'order' => 3,],
            ['title' => '日記',     'order' => 4,],
            ['title' => '記録',     'order' => 5,],
        ]);
    }
}
