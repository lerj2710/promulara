<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Invoices', function (Blueprint $table) {
            $table->increments('id');



            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('user')->onUpdate('cascade');

            $table->string('number_Invoice');


            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('status')->onUpdate('cascade');

            $table->integer('subtotal');

            $table->integer('total');


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
        Schema::dropIfExists('Invoices');
    }
}