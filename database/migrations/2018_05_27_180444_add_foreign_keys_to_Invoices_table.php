<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Invoices', function(Blueprint $table)
		{
			$table->foreign('status_id')->references('id')->on('status')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id')->references('id')->on('Users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Invoices', function(Blueprint $table)
		{
			$table->dropForeign('invoices_status_id_foreign');
			$table->dropForeign('invoices_user_id_foreign');
		});
	}

}
