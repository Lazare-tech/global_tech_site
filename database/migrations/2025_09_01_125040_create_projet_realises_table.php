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
        Schema::create('projet_realises', function (Blueprint $table) {
            $table->id();
            $table->integer('nombre_projet_realise');
            $table->integer('annee_experience');
            $table->integer('nombre_client_satisfait');
            $table->integer('nombre_zone_intervention');
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
        Schema::dropIfExists('projet_realises');
    }
};
