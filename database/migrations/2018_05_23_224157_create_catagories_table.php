<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCatagoriesTable extends Migration {

	public function up()
	{
		Schema::create('catagories', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->string('description', 255)->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('catagories');
	}
}