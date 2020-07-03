<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('book_categories')->delete();
        
        DB::table('book_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'book_id' => 1,
                'category_primary_id' => 1,
                'category_secondary_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'book_id' => 2,
                'category_primary_id' => 1,
                'category_secondary_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'book_id' => 3,
                'category_primary_id' => 1,
                'category_secondary_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'book_id' => 4,
                'category_primary_id' => 1,
                'category_secondary_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'book_id' => 5,
                'category_primary_id' => 1,
                'category_secondary_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'book_id' => 6,
                'category_primary_id' => 1,
                'category_secondary_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'book_id' => 7,
                'category_primary_id' => 1,
                'category_secondary_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'book_id' => 8,
                'category_primary_id' => 1,
                'category_secondary_id' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'book_id' => 9,
                'category_primary_id' => 1,
                'category_secondary_id' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'book_id' => 10,
                'category_primary_id' => 1,
                'category_secondary_id' => 3,
            ),
            10 => 
            array (
                'id' => 11,
                'book_id' => 11,
                'category_primary_id' => 1,
                'category_secondary_id' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'book_id' => 12,
                'category_primary_id' => 1,
                'category_secondary_id' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'book_id' => 13,
                'category_primary_id' => 1,
                'category_secondary_id' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'book_id' => 14,
                'category_primary_id' => 1,
                'category_secondary_id' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'book_id' => 15,
                'category_primary_id' => 1,
                'category_secondary_id' => 2,
            ),
            15 => 
            array (
                'id' => 16,
                'book_id' => 16,
                'category_primary_id' => 1,
                'category_secondary_id' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'book_id' => 17,
                'category_primary_id' => 1,
                'category_secondary_id' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'book_id' => 19,
                'category_primary_id' => 2,
                'category_secondary_id' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'book_id' => 20,
                'category_primary_id' => 2,
                'category_secondary_id' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'book_id' => 21,
                'category_primary_id' => 3,
                'category_secondary_id' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'book_id' => 22,
                'category_primary_id' => 4,
                'category_secondary_id' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'book_id' => 23,
                'category_primary_id' => 6,
                'category_secondary_id' => 1,
            ),
        ));
        
        
    }
}