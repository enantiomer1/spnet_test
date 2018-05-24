<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	public function up()
	{
		Schema::create('comments', function(Blueprint $table) {
			$table->increments('id');
			$table->tinyInteger('post_id')->unsigned()->index();
			$table->enum('status', array('pending', 'publish', 'spam'));
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('comments');
	}
}