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
            $table->integer('catergories_id')->unsiqned();
            $table->foreign('catergories_id')
                ->references('id')
                ->on('catergories')
                ->onDelete('cascade');
            $table->string('codigo');
            $table->string('name_product');
            $table->string('stock');
            $table->integer('status_id')->unsiqned();
            $table->foreign('status_id')
                ->references('id')
                ->on('status')
                ->onDelete('cascade');
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
