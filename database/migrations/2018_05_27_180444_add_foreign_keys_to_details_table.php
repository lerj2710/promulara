<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('details', function(Blueprint $table)
		{
			$table->foreign('invoice_id')->references('id')->on('Invoices')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('products_id')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('details', function(Blueprint $table)
		{
			$table->dropForeign('details_invoice_id_foreign');
			$table->dropForeign('details_products_id_foreign');
		});
	}

}
