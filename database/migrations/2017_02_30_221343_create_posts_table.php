<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	public function up()
	{
		Schema::create('posts', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('title');
            $table->string('slug');
            $table->text('summary');
            $table->text('content');
            $table->enum('status', array('draft', 'published'))->index();
			$table->boolean('comments')->index()->default(0);
			$table->boolean('featured')->index()->default(0);
            $table->string('author')->default('Admin');
            $table->string('image')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('posts');
	}
}