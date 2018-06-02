<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Users', function(Blueprint $table)
		{
			$table->foreign('people_id')->references('id')->on('people')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('role_id')->references('id')->on('roles')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('status_id')->references('id')->on('status')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Users', function(Blueprint $table)
		{
			$table->dropForeign('users_people_id_foreign');
			$table->dropForeign('users_role_id_foreign');
			$table->dropForeign('users_status_id_foreign');
		});
	}

}
