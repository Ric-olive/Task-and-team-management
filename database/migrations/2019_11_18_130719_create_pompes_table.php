<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePompesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pompes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('client');
            $table->string('contact');
            $table->string('num_ot');
            $table->string('quantite');
            $table->string('type');
            $table->string('serie');
            $table->string('type2')->nullable();
            $table->string('serie2')->nullable();
            $table->string('type3')->nullable();
            $table->string('serie3')->nullable();
            $table->string('type4')->nullable();
            $table->string('serie4')->nullable();
            $table->string('type5')->nullable();
            $table->string('serie5')->nullable();
            $table->string('type6')->nullable();
            $table->string('serie6')->nullable();
            $table->string('type7')->nullable();
            $table->string('serie7')->nullable();
            $table->string('type8')->nullable();
            $table->string('serie8')->nullable();
            $table->string('type9')->nullable();
            $table->string('serie9')->nullable();
            $table->string('type10')->nullable();
            $table->string('serie10')->nullable();
            $table->date('date_entree');
            $table->string('reference')->nullable();
            $table->string('reference2')->nullable();
            $table->string('reference3')->nullable();
            $table->string('reference4')->nullable();
            $table->string('reference5')->nullable();
            $table->string('reference6')->nullable();
            $table->string('reference7')->nullable();
            $table->string('reference8')->nullable();
            $table->string('reference9')->nullable();
            $table->string('reference10')->nullable();
            $table->string('cassure')->nullable();
            $table->string('deja_repare')->nullable();
            $table->string('deja_plombe')->nullable();
            $table->string('deja_controle')->nullable();
            $table->longText('avis_client')->nullable();
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
        Schema::dropIfExists('pompes');
    }
}
