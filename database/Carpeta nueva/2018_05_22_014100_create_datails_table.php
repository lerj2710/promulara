<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datails', function (Blueprint $table) {
            $table->increments('id');


            $table->integer('products_id')->unsigned();
            $table->foreign('products_id')->references('id')->on('products')->onUpdate('cascade');

            $table->integer('invoice_id')->unsigned();
            $table->foreign('invoice_id')->references('id')->on('Invoices')->onUpdate('cascade');




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
        Schema::dropIfExists('datails');
    }
}
