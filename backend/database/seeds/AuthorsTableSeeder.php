<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('authors')->delete();
        
        DB::table('authors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '芥川 竜之介',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '太宰 治',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '新美 南吉',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '宮沢 賢治',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => '魯迅',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'ドイル アーサー・コナン',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => '金田 鬼一',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'ドストエフスキー',
            ),
        ));
        
        
    }
}