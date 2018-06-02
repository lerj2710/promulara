<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Events', function(Blueprint $table)
		{
			$table->foreign('categories_id')->references('id')->on('categories')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Events', function(Blueprint $table)
		{
			$table->dropForeign('events_categories_id_foreign');
		});
	}

}
