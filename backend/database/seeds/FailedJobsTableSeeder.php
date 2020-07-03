<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FailedJobsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('failed_jobs')->delete();
        
        
        
    }
}