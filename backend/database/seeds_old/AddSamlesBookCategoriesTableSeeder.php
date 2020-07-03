<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddSamlesBookCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_categories')->insert([
            ['book_id' => 18,     'category_primary_id' => 2,     'category_secondary_id' => 1,],
            ['book_id' => 19,     'category_primary_id' => 2,     'category_secondary_id' => 1,],
            ['book_id' => 20,     'category_primary_id' => 3,     'category_secondary_id' => 1,],
            ['book_id' => 21,     'category_primary_id' => 4,     'category_secondary_id' => 1,],
            ['book_id' => 22,     'category_primary_id' => 6,     'category_secondary_id' => 1,],
        ]);
    }
}
