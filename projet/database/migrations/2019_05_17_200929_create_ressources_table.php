<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRessourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ressources', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('description')->nullable();
            $table->string('nom_image', 100)->nullable();
            $table->integer('poids_image')->nullable();
            $table->string('telechargement', 100)->nullable();
//            $table->     ('fichier_image')->nullable();
            $table->date('date_creation');
            $table->string('slug', 100);
            $table->integer('categorie_id')->unsigned();                            // clé étrangère 'categorie_id'
            $table->foreign('categorie_id')->references('id')->on('categories');    // 'categorie_id' en relation avec le champ 'id' de la table 'categories'
            $table->integer('utilisateur_id')->unsigned();
            $table->foreign('utilisateur_id')->references('id')->on('users');
            $table->timestamps();                                                   // Crée 2 champs:   created_at   et   updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ressources');
    }
}
