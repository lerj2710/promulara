<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('User');
			$table->string('email');
			$table->string('password');
            $table->rememberToken();
			$table->integer('role_id')->unsigned()->index('users_role_id_foreign');
			$table->integer('status_id')->unsigned()->index('users_status_id_foreign');
			$table->integer('people_id')->unsigned()->index('users_people_id_foreign');
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
		Schema::drop('Users');
	}

}
