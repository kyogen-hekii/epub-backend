<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryLinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('category_links')->delete();
        
        
        
    }
}