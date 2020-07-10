<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('client');
            $table->string('contact');
            $table->string('num_ot');
            $table->date('date_reception');
            $table->time('heure_reception');
            $table->string('marque');
            $table->string('chassis');
            $table->string('imm');
            $table->integer('kilometrage');
            $table->string('manivelle')->nullable();
            $table->string('crick')->nullable();
            $table->string('cle_a_roue')->nullable();
            $table->string('roue_de_secours')->nullable();
            $table->string('clignotant_daile')->nullable();
            $table->string('clignotant_par_choc')->nullable();
            $table->string('calendre')->nullable();
            $table->string('parbrise_avant')->nullable();
            $table->string('parbrise_arriere')->nullable();
            $table->string('antenne')->nullable();
            $table->string('dossiers')->nullable();
            $table->string('retroviseur_ext_gauche')->nullable();
            $table->string('retroviseur_ext_droit')->nullable();
            $table->string('retroviseur_exterieur')->nullable();
            $table->string('retroviseur_interieur')->nullable();
            $table->string('phare_avant')->nullable();
            $table->string('deux_feux_arriere')->nullable();
            $table->string('appareil_musical')->nullable();
            $table->string('cassette')->nullable();
            $table->string('cd')->nullable();
            $table->string('triangle_de_detresse')->nullable();
            $table->string('deja_repare_a_desg')->nullable();
            $table->string('deja_repare_ailleurs')->nullable();
            $table->string('nom_de_garage')->nullable();
            $table->longText('avis_client');
            $table->longText('avis_technicien')->nullable();
            $table->datetime('debut_tache')->nullable();
            $table->datetime('fin_tache')->nullable();
            $table->string('taskstatut')->default('libre');
            
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
        Schema::dropIfExists('vehicules');
    }
}
