<?php

use Illuminate\Database\Seeder;

class RessourcesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ressources')->delete();
        
        \DB::table('ressources')->insert(array (
            0 => 
            array (
                'id' => 1,
                'description' => 'lobortis, nisi nibh lacinia orci, consectetuer euismod est arcu ac orci. Ut semper pretium neque. Morbi quis urna.',
                'nom_image' => 'psd-4',
                'poids_image' => NULL,
                'date_creation' => '2019-03-27',
                'slug' => 'in',
                'categorie_id' => 4,
                'utilisateur_id' => 1,
                'created_at' => '2019-04-30 11:32:29',
                'updated_at' => '2018-07-19 11:56:39',
            ),
            1 => 
            array (
                'id' => 2,
                'description' => 'interdum feugiat. Sed nec metus facilisis lorem tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus',
                'nom_image' => 'font-1',
                'poids_image' => NULL,
                'date_creation' => '2018-08-20',
                'slug' => 'donec',
                'categorie_id' => 6,
                'utilisateur_id' => 1,
                'created_at' => '2019-02-16 17:44:24',
                'updated_at' => '2018-07-25 06:56:20',
            ),
            2 => 
            array (
                'id' => 3,
                'description' => 'est mauris, rhoncus id, mollis nec, cursus a, enim. Suspendisse aliquet, sem ut cursus luctus, ipsum leo elementum',
                'nom_image' => 'psd-1',
                'poids_image' => NULL,
                'date_creation' => '2018-10-24',
                'slug' => 'laoreet',
                'categorie_id' => 6,
                'utilisateur_id' => 1,
                'created_at' => '2018-10-24 12:49:15',
                'updated_at' => '2018-10-21 08:16:25',
            ),
            3 => 
            array (
                'id' => 4,
                'description' => 'nec urna suscipit nonummy. Fusce fermentum fermentum arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus',
                'nom_image' => 'psd-2',
                'poids_image' => NULL,
                'date_creation' => '2018-08-31',
                'slug' => 'cursus',
                'categorie_id' => 3,
                'utilisateur_id' => 1,
                'created_at' => '2018-10-04 02:45:29',
                'updated_at' => '2018-11-11 02:43:10',
            ),
            4 => 
            array (
                'id' => 5,
                'description' => 'Nunc sollicitudin commodo ipsum. Suspendisse non leo. Vivamus nibh dolor, nonummy ac, feugiat non,',
                'nom_image' => 'ai-1',
                'poids_image' => NULL,
                'date_creation' => '2018-11-15',
                'slug' => 'pede',
                'categorie_id' => 4,
                'utilisateur_id' => 1,
                'created_at' => '2018-08-16 08:46:30',
                'updated_at' => '2019-04-21 22:41:13',
            ),
            5 => 
            array (
                'id' => 6,
                'description' => 'Aenean egestas hendrerit neque. In ornare sagittis felis. Donec tempor, est ac mattis semper, dui lectus',
                'nom_image' => 'theme-2',
                'poids_image' => NULL,
                'date_creation' => '2018-12-29',
                'slug' => 'luctus',
                'categorie_id' => 2,
                'utilisateur_id' => 1,
                'created_at' => '2019-05-08 07:18:37',
                'updated_at' => '2019-03-01 05:26:44',
            ),
            6 => 
            array (
                'id' => 7,
                'description' => 'fermentum metus. Aenean sed pede nec ante blandit viverra. Donec tempus, lorem fringilla ornare placerat, orci lacus vestibulum lorem,',
                'nom_image' => 'psd-3',
                'poids_image' => NULL,
                'date_creation' => '2018-11-22',
                'slug' => 'vel',
                'categorie_id' => 2,
                'utilisateur_id' => 1,
                'created_at' => '2019-04-23 13:38:20',
                'updated_at' => '2018-11-30 13:23:10',
            ),
            7 => 
            array (
                'id' => 8,
                'description' => 'felis. Donec tempor, est ac mattis semper, dui lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi',
                'nom_image' => 'font-2',
                'poids_image' => NULL,
                'date_creation' => '2019-02-07',
                'slug' => 'est',
                'categorie_id' => 4,
                'utilisateur_id' => 1,
                'created_at' => '2018-06-22 12:00:09',
                'updated_at' => '2018-05-29 08:00:26',
            ),
            8 => 
            array (
                'id' => 9,
                'description' => 'placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec, eleifend non, dapibus rutrum, justo. Praesent luctus. Curabitur',
                'nom_image' => 'font-3',
                'poids_image' => NULL,
                'date_creation' => '2019-03-04',
                'slug' => 'dui',
                'categorie_id' => 3,
                'utilisateur_id' => 1,
                'created_at' => '2019-03-05 10:42:28',
                'updated_at' => '2018-06-18 15:22:20',
            ),
            9 => 
            array (
                'id' => 10,
                'description' => 'placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet. Proin velit.',
                'nom_image' => 'ai-2',
                'poids_image' => NULL,
                'date_creation' => '2019-03-26',
                'slug' => 'laoreet',
                'categorie_id' => 1,
                'utilisateur_id' => 1,
                'created_at' => '2019-03-25 02:06:12',
                'updated_at' => '2019-03-14 22:39:56',
            ),
            10 => 
            array (
                'id' => 11,
                'description' => 'nostra, per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt tempus risus. Donec egestas.',
                'nom_image' => 'icons-1',
                'poids_image' => NULL,
                'date_creation' => '2018-05-25',
                'slug' => 'gravida',
                'categorie_id' => 5,
                'utilisateur_id' => 1,
                'created_at' => '2019-05-11 05:29:29',
                'updated_at' => '2018-09-29 12:47:31',
            ),
            11 => 
            array (
                'id' => 12,
                'description' => 'Curabitur egestas nunc sed libero. Proin sed turpis nec mauris blandit mattis. Cras eget nisi dictum augue malesuada malesuada. Integer',
                'nom_image' => 'ui-1',
                'poids_image' => NULL,
                'date_creation' => '2018-10-01',
                'slug' => 'duis',
                'categorie_id' => 5,
                'utilisateur_id' => 1,
                'created_at' => '2018-10-12 11:43:05',
                'updated_at' => '2019-01-11 14:27:59',
            ),
            12 => 
            array (
                'id' => 13,
                'description' => 'risus. Duis a mi fringilla mi lacinia mattis. Integer eu lacus. Quisque imperdiet, erat',
                'nom_image' => 'font-5',
                'poids_image' => NULL,
                'date_creation' => '2019-01-24',
                'slug' => 'libero',
                'categorie_id' => 1,
                'utilisateur_id' => 1,
                'created_at' => '2019-05-21 04:06:32',
                'updated_at' => '2019-05-20 05:24:34',
            ),
            13 => 
            array (
                'id' => 14,
                'description' => 'eu tellus eu augue porttitor interdum. Sed auctor odio a purus. Duis elementum, dui quis accumsan convallis, ante',
                'nom_image' => 'theme-2',
                'poids_image' => NULL,
                'date_creation' => '2019-02-24',
                'slug' => 'sem',
                'categorie_id' => 1,
                'utilisateur_id' => 1,
                'created_at' => '2019-05-07 17:13:58',
                'updated_at' => '2019-04-25 09:46:20',
            ),
            14 => 
            array (
                'id' => 15,
                'description' => 'elementum sem, vitae aliquam eros turpis non enim. Mauris quis turpis vitae purus gravida sagittis. Duis gravida. Praesent',
                'nom_image' => 'psd-5',
                'poids_image' => NULL,
                'date_creation' => '2018-06-07',
                'slug' => 'dictum',
                'categorie_id' => 3,
                'utilisateur_id' => 1,
                'created_at' => '2019-02-07 22:12:18',
                'updated_at' => '2018-12-26 00:59:05',
            ),
            15 => 
            array (
                'id' => 16,
                'description' => 'eget metus eu erat semper rutrum. Fusce dolor quam, elementum at, egestas a, scelerisque sed, sapien. Nunc',
                'nom_image' => 'icons-3',
                'poids_image' => NULL,
                'date_creation' => '2019-02-22',
                'slug' => 'donec',
                'categorie_id' => 5,
                'utilisateur_id' => 1,
                'created_at' => '2018-05-26 06:58:07',
                'updated_at' => '2018-07-21 18:34:35',
            ),
            16 => 
            array (
                'id' => 17,
                'description' => 'vel, venenatis vel, faucibus id, libero. Donec consectetuer mauris id sapien. Cras dolor dolor, tempus non, lacinia',
                'nom_image' => 'font-4',
                'poids_image' => NULL,
                'date_creation' => '2019-03-25',
                'slug' => 'lobortis',
                'categorie_id' => 5,
                'utilisateur_id' => 1,
                'created_at' => '2018-09-27 04:02:32',
                'updated_at' => '2018-10-22 23:11:09',
            ),
            17 => 
            array (
                'id' => 18,
                'description' => 'Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac, fermentum vel, mauris. Integer sem elit, pharetra ut,',
                'nom_image' => 'theme-3',
                'poids_image' => NULL,
                'date_creation' => '2018-09-01',
                'slug' => 'mi',
                'categorie_id' => 2,
                'utilisateur_id' => 1,
                'created_at' => '2018-11-11 15:29:35',
                'updated_at' => '2018-07-22 18:11:29',
            ),
            18 => 
            array (
                'id' => 19,
                'description' => 'dictum augue malesuada malesuada. Integer id magna et ipsum cursus vestibulum. Mauris magna. Duis dignissim tempor',
                'nom_image' => 'font-6',
                'poids_image' => NULL,
                'date_creation' => '2019-01-09',
                'slug' => 'curabitur',
                'categorie_id' => 2,
                'utilisateur_id' => 1,
                'created_at' => '2019-01-06 23:32:18',
                'updated_at' => '2018-06-13 00:06:59',
            ),
            19 => 
            array (
                'id' => 20,
                'description' => 'urna. Vivamus molestie dapibus ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat',
                'nom_image' => 'theme-4',
                'poids_image' => NULL,
                'date_creation' => '2018-09-03',
                'slug' => 'in',
                'categorie_id' => 5,
                'utilisateur_id' => 1,
                'created_at' => '2019-04-08 00:22:13',
                'updated_at' => '2019-03-19 14:12:23',
            ),
            20 => 
            array (
                'id' => 21,
                'description' => 'pretium aliquet, metus urna convallis erat, eget tincidunt dui augue eu tellus. Phasellus elit pede, malesuada vel, venenatis vel, faucibus id,',
                'nom_image' => 'font-4',
                'poids_image' => NULL,
                'date_creation' => '2018-07-15',
                'slug' => 'vitae',
                'categorie_id' => 3,
                'utilisateur_id' => 1,
                'created_at' => '2018-12-21 16:50:39',
                'updated_at' => '2018-11-16 08:50:47',
            ),
            21 => 
            array (
                'id' => 22,
                'description' => 'condimentum. Donec at arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec',
                'nom_image' => 'theme-4',
                'poids_image' => NULL,
                'date_creation' => '2018-07-17',
                'slug' => 'leo',
                'categorie_id' => 4,
                'utilisateur_id' => 1,
                'created_at' => '2018-09-07 07:44:13',
                'updated_at' => '2018-09-16 02:38:21',
            ),
            22 => 
            array (
                'id' => 23,
                'description' => 'condimentum. Donec at arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec',
                'nom_image' => 'theme-4',
                'poids_image' => NULL,
                'date_creation' => '2018-07-17',
                'slug' => 'leo',
                'categorie_id' => 4,
                'utilisateur_id' => 1,
                'created_at' => '2018-09-07 07:44:13',
                'updated_at' => '2018-09-16 02:38:21',
            ),
        ));
        
        
    }
}