<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('books')->delete();
        
        DB::table('books')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => '蜘蛛の糸',
                'filename' => 'kumonoito-akutagawa',
                'default_price' => 100,
                'series_id' => 1,
                'author_id' => 1,
                'publisher_id' => 1,
                'release_date' => '1990-01-01 00:00:00',
                'completed_flg' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => '蜜柑',
                'filename' => 'mikan-akutagawa',
                'default_price' => 100,
                'series_id' => 2,
                'author_id' => 1,
                'publisher_id' => 1,
                'release_date' => '1990-01-01 00:00:00',
                'completed_flg' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => '藪の中',
                'filename' => 'yabunonaka-akutagawa',
                'default_price' => 100,
                'series_id' => 3,
                'author_id' => 1,
                'publisher_id' => 1,
                'release_date' => '1990-01-01 00:00:00',
                'completed_flg' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => '羅生門',
                'filename' => 'rashoumon-akutagawa',
                'default_price' => 100,
                'series_id' => 4,
                'author_id' => 1,
                'publisher_id' => 1,
                'release_date' => '1990-01-01 00:00:00',
                'completed_flg' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => '地獄変',
                'filename' => 'jigokuhen-akutagawa',
                'default_price' => 100,
                'series_id' => 5,
                'author_id' => 1,
                'publisher_id' => 1,
                'release_date' => '1990-01-01 00:00:00',
                'completed_flg' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => '貨幣',
                'filename' => 'kahei-dazai',
                'default_price' => 100,
                'series_id' => 6,
                'author_id' => 2,
                'publisher_id' => 1,
                'release_date' => '1990-01-01 00:00:00',
                'completed_flg' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => '満願',
                'filename' => 'mangan-dazai',
                'default_price' => 100,
                'series_id' => 7,
                'author_id' => 2,
                'publisher_id' => 1,
                'release_date' => '1990-01-01 00:00:00',
                'completed_flg' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'title' => '黄金風景',
                'filename' => 'ougonfuukei-dazai',
                'default_price' => 100,
                'series_id' => 8,
                'author_id' => 2,
                'publisher_id' => 1,
                'release_date' => '1990-01-01 00:00:00',
                'completed_flg' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'チャンス',
                'filename' => 'chance-dazai',
                'default_price' => 100,
                'series_id' => 9,
                'author_id' => 2,
                'publisher_id' => 1,
                'release_date' => '1990-01-01 00:00:00',
                'completed_flg' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'title' => '鬱屈禍',
                'filename' => 'ukkutsuka-dazai',
                'default_price' => 100,
                'series_id' => 10,
                'author_id' => 2,
                'publisher_id' => 1,
                'release_date' => '1990-01-01 00:00:00',
                'completed_flg' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'title' => '飴たま',
                'filename' => 'amedama-niimi',
                'default_price' => 100,
                'series_id' => 11,
                'author_id' => 3,
                'publisher_id' => 1,
                'release_date' => '1990-01-01 00:00:00',
                'completed_flg' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'あし',
                'filename' => 'ashi-niimi',
                'default_price' => 100,
                'series_id' => 12,
                'author_id' => 3,
                'publisher_id' => 1,
                'release_date' => '1990-01-01 00:00:00',
                'completed_flg' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'ごん狐',
                'filename' => 'gongitune-niimi',
                'default_price' => 100,
                'series_id' => 13,
                'author_id' => 3,
                'publisher_id' => 1,
                'release_date' => '1990-01-01 00:00:00',
                'completed_flg' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'title' => '巨男の話',
                'filename' => 'oootoko-niimi',
                'default_price' => 100,
                'series_id' => 14,
                'author_id' => 3,
                'publisher_id' => 1,
                'release_date' => '1990-01-01 00:00:00',
                'completed_flg' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'title' => '雨ニモマケズ',
                'filename' => 'amenimomakezu-miyazawa',
                'default_price' => 100,
                'series_id' => 15,
                'author_id' => 4,
                'publisher_id' => 1,
                'release_date' => '1990-01-01 00:00:00',
                'completed_flg' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'title' => '黄いろのトマト',
                'filename' => 'kiironotomato-miyazawa',
                'default_price' => 100,
                'series_id' => 16,
                'author_id' => 4,
                'publisher_id' => 1,
                'release_date' => '1990-01-01 00:00:00',
                'completed_flg' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'title' => '注文の多い料理店',
                'filename' => 'chumonnoooiryouriten-miyazawa',
                'default_price' => 100,
                'series_id' => 17,
                'author_id' => 4,
                'publisher_id' => 1,
                'release_date' => '1990-01-01 00:00:00',
                'completed_flg' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 19,
                'title' => '明日',
                'filename' => 'asu-rojin',
                'default_price' => 100,
                'series_id' => 19,
                'author_id' => 5,
                'publisher_id' => 1,
                'release_date' => '1990-01-01 00:00:00',
                'completed_flg' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 20,
                'title' => '兎と猫',
                'filename' => 'usagitoneko-rojin',
                'default_price' => 100,
                'series_id' => 20,
                'author_id' => 5,
                'publisher_id' => 1,
                'release_date' => '1990-01-01 00:00:00',
                'completed_flg' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 21,
                'title' => '赤毛連盟',
                'filename' => 'akagerenmei-konan',
                'default_price' => 100,
                'series_id' => 21,
                'author_id' => 6,
                'publisher_id' => 1,
                'release_date' => '1990-01-01 00:00:00',
                'completed_flg' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 22,
                'title' => 'グリム童話集',
                'filename' => 'gurimudouwa-kaneda',
                'default_price' => 100,
                'series_id' => 22,
                'author_id' => 7,
                'publisher_id' => 1,
                'release_date' => '1990-01-01 00:00:00',
                'completed_flg' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 23,
                'title' => 'カラマーゾフの兄弟',
                'filename' => 'karamazofu-dostoevskii',
                'default_price' => 100,
                'series_id' => 23,
                'author_id' => 8,
                'publisher_id' => 1,
                'release_date' => '1990-01-01 00:00:00',
                'completed_flg' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}