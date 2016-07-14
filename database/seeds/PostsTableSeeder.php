<?php

use App\Post;
use App\User;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::lists('id');

        foreach ($users as $user) {
            factory(Post::class, 1)->create([
                'user_id' => $user,
            ]);
        }
    }
}
