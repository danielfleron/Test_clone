<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'daniel',
                'firstname' => 'votreprenom',
                'nom_icone' => 'vide.jpg',
                'email' => 'hillewaert.daniel@outlook.com',
                'avatar' => 'users\\June2019\\GE7C1dUnWfNQ69sZBjJ5.JPG',
                'email_verified_at' => NULL,
                'login' => 'login',
                'password' => '$2y$10$ZsmuxIcAJv4WTGMHCvhS/.tIwrlbkjUgGtEa03WUcvAfkBqfpnay2',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2019-06-12 18:38:20',
                'updated_at' => '2019-06-12 23:47:11',
            ),
        ));
        
        
    }
}