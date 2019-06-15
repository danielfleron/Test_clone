<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('commentaire');
            $table->date('date_creation');
            $table->integer('ressource_id')->unsigned();      // clé étrangère 'ressource_id'
            $table->foreign('ressource_id')->references('id')->on('ressources');    // 'ressource_id' en relation avec le champ 'id' de la table 'ressources'
            $table->integer('utilisateur_id')->unsigned();
            $table->foreign('utilisateur_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentaires');
    }
}
