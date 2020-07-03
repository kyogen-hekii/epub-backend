<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryPrimariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_primaries')->insert([
            ['title' => '日本文学',     'order' => 1,],
            ['title' => '中国文学',     'order' => 2,],
            ['title' => '英米文学',     'order' => 3,],
            ['title' => 'ドイツ文学',     'order' => 4,],
            ['title' => 'フランス文学',     'order' => 5,],
            ['title' => 'ロシア文学',     'order' => 6,],
            ['title' => 'その他',     'order' => 7,],
        ]);
    }
}
