<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormuleTicketTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formule_ticket_types', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('quantite');
            $table->integer('id_formule');
            $table->foreign('id_formule')
                ->references('id')
                ->on('formules');
            $table->integer('id_ticket_type');
            $table->foreign('id_ticket_type')
            ->references('id')
            ->on('ticket_types');
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formule_ticket_types');
    }
}
