<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(AuthorsTableSeeder::class);
        $this->call(BookCategoriesTableSeeder::class);
        $this->call(CategoryLinksTableSeeder::class);
        $this->call(CategoryPrimariesTableSeeder::class);
        $this->call(CategorySecondariesTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(LabelsTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(BooksTableSeeder::class);
    }
}
