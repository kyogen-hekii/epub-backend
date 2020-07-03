<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryPrimariesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('category_primaries')->delete();
        
        DB::table('category_primaries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => '日本文学',
                'order' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => '中国文学',
                'order' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => '英米文学',
                'order' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'ドイツ文学',
                'order' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'フランス文学',
                'order' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'ロシア文学',
                'order' => 6,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'その他',
                'order' => 7,
            ),
        ));
        
        
    }
}