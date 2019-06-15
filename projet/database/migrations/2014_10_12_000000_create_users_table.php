<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');                              /* org: bigIncrements */
            $table->string('name');
            $table->string('firstname', 100)->default('votreprenom');                      /* ajout */
            $table->string('nom_icone', 45)->default('vide.jpg');                       /* ajout */
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('login', 45)->default('login');                           /* ajout */
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
