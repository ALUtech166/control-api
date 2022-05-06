<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visites', function (Blueprint $table) {
            $table->id();
            $table->String('v_objet');
            $table->String('nom_visiteur');
            $table->String('carte_visiteur')->nulable;
            $table->date('v_date');
            $table->time('v_heure_arrive');
            $table->time('v_heure_depart')->nulable;
            $table->boolean('statut')->nulable;
            $table->foreignId('id_personnes')
            ->references('id')->on('personnes');
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
        Schema::dropIfExists('visites');
    }
};
