<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('catergorie');
            $table->integer('catergories_id')->unsiqned();
            $table->foreign('catergories_id')
                ->references('id')
                ->on('catergories')
                ->onDelete('cascade');
            $table->string('facture');
            $table->integer('facture_id')->unsiqned();
            $table->foreign('facture_id')
                ->references('id')
                ->on('facture')
                ->onDelete('cascade');

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
        Schema::dropIfExists('events');
    }
}
