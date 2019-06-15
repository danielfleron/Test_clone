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
        // données de test
		    $this->call(UsersTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(NewslettersTableSeeder::class);
        $this->call(RessourcesTableSeeder::class);
        $this->call(CommentairesTableSeeder::class);

    }
}
