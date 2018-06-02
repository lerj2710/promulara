<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');



            $table->integer('categories_id')->unsigned();
            $table->foreign('categories_id')->references('id')->on('categories')->onUpdate('cascade');


            $table->string('codigo');

            $table->string('name_product');

            $table->string('stock');

            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('status')->onUpdate('cascade');


            $table->integer('detail');
            $table->integer('rental_price');
            $table->integer('sale_price');


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
        Schema::dropIfExists('products');
    }
}
