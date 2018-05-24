<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	public function up()
	{
		Schema::create('posts', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('category_id')->unsigned()->index();
			$table->string('title');
            $table->string('slug');
            $table->text('text');
            $table->boolean('published')->default(false);
            $table->string('author')->default('Admin');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('posts');
	}
}