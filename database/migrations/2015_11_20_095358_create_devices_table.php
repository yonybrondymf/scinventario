<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('devices', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('code');
            $table->integer('category_id')->unsigned();
            $table->string('description');
            $table->string('brand');
            $table->string('model');
            $table->string('serial')->unique();
            $table->string('dimension');
            $table->string('color');
            $table->string('cost');
            $table->string('entry');
            $table->string('document');
            $table->string('state');
            $table->integer('location_id')->unsigned();
            $table->string('made');
            $table->string('owner');
            $table->string('condition');
            $table->string('observation');
            $table->integer('user_id')->unsigned();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('location_id')
                ->references('id')
                ->on('locations')
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
		Schema::drop('devices');
	}

}
