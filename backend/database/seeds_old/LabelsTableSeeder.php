<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LabelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('labels')->insert([
            ['name' => 'New',],
        ]);
    }
}
