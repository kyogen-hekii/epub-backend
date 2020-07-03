<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCategoryBooksView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('DROP VIEW IF EXISTS category_books');
        DB::statement("CREATE VIEW category_books AS 
            select
                books.*
                ,bc.category_primary_id
                ,cp.title as category_primary_title
                ,bc.category_secondary_id
                ,cs.title as category_secondaries
            from books
            left join book_categories bc
            on books.id = bc.book_id
            left join category_primaries cp
            on bc.category_primary_id = cp.id
            left join category_secondaries cs
            on bc.category_secondary_id = cs.id
            ;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement( 'DROP VIEW IF EXISTS category_books' );
    }
}
