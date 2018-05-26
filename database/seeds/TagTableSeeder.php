<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('blog_categories')->delete();

		// Test tag - 1
		Tag::create(array(
				'name' => 'css',
				'description' => 'CSS',
			));

		// Test tag - 2
		Tag::create(array(
				'name' => 'testing',
				'description' => 'Testing',
			));

		// Test tag - 3
		Tag::create(array(
				'name' => 'eloquent',
				'description' => 'Eloquent',
			));
	}
}