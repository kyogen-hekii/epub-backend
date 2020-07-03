<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryLinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_links')->insert([
            ['primary_id' => 1,     'secondary_id' => 1,],
            ['primary_id' => 1,     'secondary_id' => 2,],
            ['primary_id' => 1,     'secondary_id' => 3,],
            ['primary_id' => 1,     'secondary_id' => 4,],
            ['primary_id' => 1,     'secondary_id' => 5,],
            ['primary_id' => 2,     'secondary_id' => 1,],
            ['primary_id' => 3,     'secondary_id' => 1,],
        ]);
    }
}
