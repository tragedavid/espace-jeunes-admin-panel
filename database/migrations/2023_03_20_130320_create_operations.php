<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('operation');
            $table->integer('id_jeune');
            $table->foreign('id_jeune')
                ->references('id')
                ->on('jeunes');
            $table->integer('id_activite');
            $table->foreign('id_activite')
                ->references('id')
                ->on('activites');
            $table->integer('id_ticket');
            $table->foreign('id_ticket')
                ->references('id')
                ->on('tickets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operations');
    }
}
