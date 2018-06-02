<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->increments('id');
            $table->string('lastname');
            $table->integer('doc_type');
            $table->integer('doc_number');
            $table->string('address');
            $table->string('phone');
            $table->integer('type_people_id')->unsiqned();
            $table->foreign('type_people_id')
                ->references('id')
                ->on('type_people')
                ->onDelete('cascade');
            $table->integer('type_identificacions_id')->unsiqned();
            $table->foreign('type_identificacions_id')
                ->references('id')
                ->on('type_identificacions')
                ->onDelete('cascade');
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
        Schema::dropIfExists('people');
    }
}
