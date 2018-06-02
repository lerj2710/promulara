<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('categories_id')->unsigned()->index('products_categories_id_foreign');
			$table->string('code');
			$table->string('image');
			$table->string('name_product');
			$table->string('stock');
			$table->integer('status_id')->unsigned()->index('products_status_id_foreign');
			$table->integer('detail');
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
		Schema::drop('products');
	}

}
