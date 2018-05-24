<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateposttagTable extends Migration {

	public function up()
	{
		Schema::create('post_tag', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('post_id')->unsigned()->index();
			$table->integer('tag_id')->unsigned()->index();
		});
	}

	public function down()
	{
		Schema::drop('post_tag');
	}
}