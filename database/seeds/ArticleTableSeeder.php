<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class articleTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        // Uncomment the below to wipe the table clean before populating
        DB::table('article')->delete();

        $article = array(
            ['id' => 1, 'content' => 'Task 1', 'tag' => 'task-1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'content' => 'Task 2', 'tag' => 'task-2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'content' => 'Task 3', 'tag' => 'task-3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'content' => 'Task 4', 'tag' => 'task-4', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'content' => 'Task 5', 'tag' => 'task-5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'content' => 'Task 6', 'tag' => 'task-6', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'content' => 'Task 7', 'tag' => 'task-7', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        //// Uncomment the below to run the seeder
        DB::table('article')->insert($article);
	}

}
