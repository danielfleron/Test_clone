<?php

use Illuminate\Database\Seeder;

class CommentairesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('commentaires')->delete();
        
        \DB::table('commentaires')->insert(array (
            0 => 
            array (
                'id' => 1,
                'commentaire' => 'un joli commentaire',
                'date_creation' => '2019-06-12',
                'ressource_id' => 1,
                'utilisateur_id' => 1,
                'created_at' => '2019-06-12 23:43:39',
                'updated_at' => '2019-06-12 23:43:39',
            ),
        ));
        
        
    }
}