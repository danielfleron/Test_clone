<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nom' => 'Accueil',
                'description' => 'bienvenue sur la page d\'accueil',
                'slug' => 'accueil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}