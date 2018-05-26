<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('blog_posts')->delete();

		// ileti test - 1
		Comment::create(array(
				'user_id' => 1,
				'post_id' => 1,
				'text' => 'This is the comment for the first post'
			));

		// ileti test - 2
		Comment::create(array(
				'user_id' => 2,
				'post_id' => 2,
				'text' => 'This is the comment for the second post'
			));

		// ileti test - 3
		Comment::create(array(
				'user_id' => 1,
				'post_id' => 3,
				'text' => 'This is the comment for the third post'
			));

	}
}