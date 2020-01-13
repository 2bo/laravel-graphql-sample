<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;
use App\Comment;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create()->each(function ($user) {
            //create 5 posts for each user
            factory(Post::class, 5)->create(['author_id' => $user->id])->each(function ($post) {
                //create 2 posts for each user
                factory(Comment::class, 2)->create(['post_id' => $post->id]);
            });
        });

    }
}
