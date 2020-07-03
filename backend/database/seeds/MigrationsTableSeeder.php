<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('migrations')->delete();
        
        DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2020_06_22_111310_create_books_table',
                'batch' => 2,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2020_06_25_052138_create_authors_table',
                'batch' => 3,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2020_06_25_053945_create_publishers_table',
                'batch' => 4,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2020_06_25_054457_create_labels_table',
                'batch' => 5,
            ),
            6 => 
            array (
                'id' => 8,
                'migration' => '2020_06_25_063204_add_column_filename_books_table',
                'batch' => 6,
            ),
            7 => 
            array (
                'id' => 17,
                'migration' => '2020_06_28_085331_create_category_primaries_table',
                'batch' => 7,
            ),
            8 => 
            array (
                'id' => 18,
                'migration' => '2020_06_28_090156_create_category_secondaries_table',
                'batch' => 7,
            ),
            9 => 
            array (
                'id' => 19,
                'migration' => '2020_06_28_090717_create_category_links_table',
                'batch' => 7,
            ),
            10 => 
            array (
                'id' => 20,
                'migration' => '2020_06_28_091515_create_book_categories_table',
                'batch' => 7,
            ),
            11 => 
            array (
                'id' => 23,
                'migration' => '2020_06_28_143304_create_category_books_view',
                'batch' => 8,
            ),
        ));
        
        
    }
}