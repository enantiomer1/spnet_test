<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('blog_categories')->delete();

		// Test tag - 1
		Category::create(array(
				'name' => 'general',
				'description' => 'General',
			));

		// Test tag - 2
		Category::create(array(
				'name' => 'laravel',
				'description' => 'Laravel',
			));

		// Test tag - 3
		Category::create(array(
				'name' => 'php',
				'description' => 'PHP',
			));
	}
}