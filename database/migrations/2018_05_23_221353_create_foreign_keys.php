<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('post_tag', function(Blueprint $table) {
			$table->foreign('post_id')->references('id')->on('posts')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('post_tag', function(Blueprint $table) {
			$table->foreign('tag_id')->references('id')->on('tags')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('post_tag', function(Blueprint $table) {
			$table->dropForeign('post_tag_post_id_foreign');
		});
		Schema::table('post_tag', function(Blueprint $table) {
			$table->dropForeign('post_tag_tag_id_foreign');
		});
	}
}