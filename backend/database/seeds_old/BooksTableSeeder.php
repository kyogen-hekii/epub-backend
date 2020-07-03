<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => '蜘蛛の糸',
                'default_price' => 100,
                'series_id' => 0,
                'author_id' => 1,
                'publisher_id' => 1,
                'release_date' => '1990/1/1',
                'completed_flg' => 0,
            ],
            [
                'title' => '蜜柑',
                'default_price' => 100,
                'series_id' => 0,
                'author_id' => 1,
                'publisher_id' => 1,
                'release_date' => '1990/1/1',
                'completed_flg' => 0,
            ],
            [
                'title' => '藪の中',
                'default_price' => 100,
                'series_id' => 0,
                'author_id' => 1,
                'publisher_id' => 1,
                'release_date' => '1990/1/1',
                'completed_flg' => 0,
            ],
            [
                'title' => '羅生門',
                'default_price' => 100,
                'series_id' => 0,
                'author_id' => 1,
                'publisher_id' => 1,
                'release_date' => '1990/1/1',
                'completed_flg' => 0,
            ],
            [
                'title' => '地獄変',
                'default_price' => 100,
                'series_id' => 0,
                'author_id' => 1,
                'publisher_id' => 1,
                'release_date' => '1990/1/1',
                'completed_flg' => 0,
            ],
            [
                'title' => '貨幣',
                'default_price' => 100,
                'series_id' => 0,
                'author_id' => 2,
                'publisher_id' => 1,
                'release_date' => '1990/1/1',
                'completed_flg' => 0,
            ],
            [
                'title' => '満願',
                'default_price' => 100,
                'series_id' => 0,
                'author_id' => 2,
                'publisher_id' => 1,
                'release_date' => '1990/1/1',
                'completed_flg' => 0,
            ],
            [
                'title' => '黄金風景',
                'default_price' => 100,
                'series_id' => 0,
                'author_id' => 2,
                'publisher_id' => 1,
                'release_date' => '1990/1/1',
                'completed_flg' => 0,
            ],
            [
                'title' => 'チャンス',
                'default_price' => 100,
                'series_id' => 0,
                'author_id' => 2,
                'publisher_id' => 1,
                'release_date' => '1990/1/1',
                'completed_flg' => 0,
            ],
            [
                'title' => '鬱屈禍',
                'default_price' => 100,
                'series_id' => 0,
                'author_id' => 2,
                'publisher_id' => 1,
                'release_date' => '1990/1/1',
                'completed_flg' => 0,
            ],
            [
                'title' => '飴たま',
                'default_price' => 100,
                'series_id' => 0,
                'author_id' => 3,
                'publisher_id' => 1,
                'release_date' => '1990/1/1',
                'completed_flg' => 0,
            ],
            [
                'title' => 'あし',
                'default_price' => 100,
                'series_id' => 0,
                'author_id' => 3,
                'publisher_id' => 1,
                'release_date' => '1990/1/1',
                'completed_flg' => 0,
            ],
            [
                'title' => 'ごん狐',
                'default_price' => 100,
                'series_id' => 0,
                'author_id' => 3,
                'publisher_id' => 1,
                'release_date' => '1990/1/1',
                'completed_flg' => 0,
            ],
            [
                'title' => '巨男の話',
                'default_price' => 100,
                'series_id' => 0,
                'author_id' => 3,
                'publisher_id' => 1,
                'release_date' => '1990/1/1',
                'completed_flg' => 0,
            ],
            [
                'title' => '雨ニモマケズ',
                'default_price' => 100,
                'series_id' => 0,
                'author_id' => 4,
                'publisher_id' => 1,
                'release_date' => '1990/1/1',
                'completed_flg' => 0,
            ],
            [
                'title' => '黄いろのトマト',
                'default_price' => 100,
                'series_id' => 0,
                'author_id' => 4,
                'publisher_id' => 1,
                'release_date' => '1990/1/1',
                'completed_flg' => 0,
            ],
            [
                'title' => '注文の多い料理店',
                'default_price' => 100,
                'series_id' => 0,
                'author_id' => 4,
                'publisher_id' => 1,
                'release_date' => '1990/1/1',
                'completed_flg' => 0,
            ],

        ]);
    }
}
