<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddSamlesBooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            ['title' => '明日',     'filename' => 'asu-rojin',     'default_price' => '100',     'series_id' => '0',     'author_id' => '5',     'publisher_id' => '1',     'release_date' => '1990/1/1',     'completed_flg' => '0',],
            ['title' => '兎と猫',     'filename' => 'usagitoneko-rojin',     'default_price' => '100',     'series_id' => '0',     'author_id' => '5',     'publisher_id' => '1',     'release_date' => '1990/1/1',     'completed_flg' => '0',],
            ['title' => '赤毛連盟',     'filename' => 'akagerenmei-konan',     'default_price' => '100',     'series_id' => '0',     'author_id' => '6',     'publisher_id' => '1',     'release_date' => '1990/1/1',     'completed_flg' => '0',],
            ['title' => 'グリム童話集',     'filename' => 'gurimudouwa-kaneda',     'default_price' => '100',     'series_id' => '0',     'author_id' => '7',     'publisher_id' => '1',     'release_date' => '1990/1/1',     'completed_flg' => '0',],
            ['title' => 'カラマーゾフの兄弟',     'filename' => 'karamazofu-dostoevskii',     'default_price' => '100',     'series_id' => '0',     'author_id' => '8',     'publisher_id' => '1',     'release_date' => '1990/1/1',     'completed_flg' => '0',],
        ]);
    }
}
