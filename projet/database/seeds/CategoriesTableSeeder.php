<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nom' => 'Premium',
                'nom_icone' => 'icon-premium.svg',
                'slug' => 'bouton-premium',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nom' => 'Photo',
                'nom_icone' => 'icon-photo.svg',
                'slug' => 'bouton-photo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nom' => 'Font',
                'nom_icone' => 'icon-font.svg',
                'slug' => 'bouton-font',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nom' => 'Theme',
                'nom_icone' => 'icon-themes.svg',
                'slug' => 'bouton-theme',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'nom' => 'Photoshop',
                'nom_icone' => 'icon-psd.svg',
                'slug' => 'bouton-psd',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'nom' => 'Illustrator',
                'nom_icone' => 'icon-ai.svg',
                'slug' => 'bouton-ai',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}