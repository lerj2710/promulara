<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymets', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('invoice_id')->unsigned();
            $table->foreign('invoice_id')->references('id')->on('Invoices')->onUpdate('cascade');

            $table->string('number_referencie');

            $table->integer('bank_id')->unsigned();
            $table->foreign('bank_id')->references('id')->on('bank')->onUpdate('cascade');

            $table->integer('rode');

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
        Schema::dropIfExists('paymets');
    }
}
