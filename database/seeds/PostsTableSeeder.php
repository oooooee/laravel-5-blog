<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PostsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 * 
	 * @return void
	 */
	public function run()
	{
        // Uncomment the below to wipe the table clean before populating
        DB::table('posts')->delete();

        $Posts = array(
            ['id' => 1, 'title' => 'Posts Title 1', 'category_id' => 1, 'content' => 'My first task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'title' => 'Posts Title 2', 'category_id' => 1, 'content' => 'My first task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'title' => 'Posts Title 3', 'category_id' => 1, 'content' => 'My first task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'title' => 'Posts Title 4', 'category_id' => 1, 'content' => 'My second task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'title' => 'Posts Title 5', 'category_id' => 1, 'content' => 'My third task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'title' => 'Posts Title 6', 'category_id' => 2, 'content' => 'My fourth task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'title' => 'Posts Title 7', 'category_id' => 2, 'content' => 'My fifth task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        //// Uncomment the below to run the seeder
        DB::table('posts')->insert($Posts);
	}

}
