<?php

use Illuminate\Database\Seeder;
use App\Tape;
use Carbon\Carbon;

class TapeTableSeeder extends Seeder {

	public function run()
	{
		
		Tape::create(array(
				'speaker' => 'Speaker 1',
				'title' => 'This is the title of the first tape',
				'description' => 'Description 1',
				'file_name' => 'placeholder.mp3'
			));

		
		Tape::create(array(
				'speaker' => 'Speaker 2',
				'title' => 'This is the title of the second tape',
				'description' => 'Description 2',
				'file_name' => 'placeholder.mp3'
			));

		
		Tape::create(array(
				'speaker' => 'Speaker 3',
				'title' => 'This is the title of the third tape',
				'description' => 'Description 3',
				'file_name' => 'placeholder.mp3'
			));
	}
}