<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySecondariesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('category_secondaries')->delete();
        
        DB::table('category_secondaries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => '小説',
                'order' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => '詩歌',
                'order' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'エッセイ',
                'order' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => '日記',
                'order' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => '記録',
                'order' => 5,
            ),
        ));
        
        
    }
}