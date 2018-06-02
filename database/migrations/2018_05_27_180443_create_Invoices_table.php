<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Invoices', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index('invoices_user_id_foreign');
			$table->string('number_invoice');
			$table->integer('status_id')->unsigned()->index('invoices_status_id_foreign');
			$table->float('subtotal');
			$table->float('iva');
			$table->float('total');
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
		Schema::drop('Invoices');
	}

}
