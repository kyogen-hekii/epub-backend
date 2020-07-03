<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_categories')->insert([
            ['book_id' => 1,     'category_primary_id' => 1,     'category_secondary_id' => 1,],
            ['book_id' => 2,     'category_primary_id' => 1,     'category_secondary_id' => 1,],
            ['book_id' => 3,     'category_primary_id' => 1,     'category_secondary_id' => 1,],
            ['book_id' => 4,     'category_primary_id' => 1,     'category_secondary_id' => 1,],
            ['book_id' => 5,     'category_primary_id' => 1,     'category_secondary_id' => 1,],
            ['book_id' => 6,     'category_primary_id' => 1,     'category_secondary_id' => 1,],
            ['book_id' => 7,     'category_primary_id' => 1,     'category_secondary_id' => 1,],
            ['book_id' => 8,     'category_primary_id' => 1,     'category_secondary_id' => 1,],
            ['book_id' => 9,     'category_primary_id' => 1,     'category_secondary_id' => 1,],
            ['book_id' => 10,     'category_primary_id' => 1,     'category_secondary_id' => 3,],
            ['book_id' => 11,     'category_primary_id' => 1,     'category_secondary_id' => 1,],
            ['book_id' => 12,     'category_primary_id' => 1,     'category_secondary_id' => 1,],
            ['book_id' => 13,     'category_primary_id' => 1,     'category_secondary_id' => 1,],
            ['book_id' => 14,     'category_primary_id' => 1,     'category_secondary_id' => 1,],
            ['book_id' => 15,     'category_primary_id' => 1,     'category_secondary_id' => 2,],
            ['book_id' => 16,     'category_primary_id' => 1,     'category_secondary_id' => 1,],
            ['book_id' => 17,     'category_primary_id' => 1,     'category_secondary_id' => 1,],

        ]);
    }
}
