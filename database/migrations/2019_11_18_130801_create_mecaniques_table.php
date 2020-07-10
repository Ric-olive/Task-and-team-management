<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMecaniquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mecaniques', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('client');
            $table->string('contact');
            $table->string('num_ot');
            $table->string('marque');
            $table->string('immatriculation');
            $table->integer('annee');
            $table->integer('km');
            $table->string('num_chassis');
            $table->string('motorisation');
            $table->date('date_entree');        
            $table->string('reference_piece_demande');
            $table->longText('avis_client');
            $table->longText('avis_technicien')->nullable();
            $table->datetime('debut_tache')->nullable();
            $table->datetime('fin_tache')->nullable();
            $table->string('taskstatut')->default('libre');

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('mecaniques');
    }
}
