<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulesActivites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formules_activites', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('id_formule');
            $table->foreign('id_formule')
                ->references('id')
                ->on('formules');
            $table->integer('id_activite');
            $table->foreign('id_activite')
                ->references('id')
                ->on('activites');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formules_activites');
    }
}
