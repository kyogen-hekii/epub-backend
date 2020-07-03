<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LabelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('labels')->delete();
        
        DB::table('labels')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'New',
            ),
        ));
        
        
    }
}