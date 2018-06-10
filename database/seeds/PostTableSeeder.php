<?php

use Illuminate\Database\Seeder;
use App\Post;
use Carbon\Carbon;

class PostTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('blog_posts')->delete();

		// ileti test - 1
		Post::create(array(
				'user_id' => 1,
				'title' => 'This is the title of the first post',
				'summary' => 'İleti test - summary - 1',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur varius eros ut ornare tempus. Cras a ligula lectus. Pellentesque eget tempor arcu. Proin nisl mi, auctor sit amet ornare vitae, egestas sit amet ante. Phasellus sit amet lobortis risus. Nam consectetur nisi consectetur aliquet condimentum. Morbi eu lacus in neque bibendum ultricies vel in risus.',
				'status' => 'published',
				'cover_image' => 'placeholder.jpg'
			));

		// ileti test - 2
		Post::create(array(
				'user_id' => 1,
				'title' => 'This is the title of the second post but longer so we can test it',
				'summary' => 'İleti test - summary - 2',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur varius eros ut ornare tempus. Cras a ligula lectus. Pellentesque eget tempor arcu. Proin nisl mi, auctor sit amet ornare vitae, egestas sit amet ante. Phasellus sit amet lobortis risus. Nam consectetur nisi consectetur aliquet condimentum. Morbi eu lacus in neque bibendum ultricies vel in risus.',
				'status' => 'published',
				'cover_image' => 'placeholder.jpg'
			));

		// ileti test - 3
		Post::create(array(
				'user_id' => 1,
				'title' => 'İleti test - 3',
				'summary' => 'İleti test - summary - 3',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur varius eros ut ornare tempus. Cras a ligula lectus. Pellentesque eget tempor arcu. Proin nisl mi, auctor sit amet ornare vitae, egestas sit amet ante. Phasellus sit amet lobortis risus. Nam consectetur nisi consectetur aliquet condimentum. Morbi eu lacus in neque bibendum ultricies vel in risus.',
				'status' => 'published',
				'cover_image' => 'placeholder.jpg'
			));

	}
}