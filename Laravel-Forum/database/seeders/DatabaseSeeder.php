<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();
        $posts = Post::factory(50)->recycle($users)->create();
        $comments = Comment::factory(20)->recycle($users)->recycle($posts)->create();

        User::factory()
            ->has(Post::factory(5))
            ->has(Comment::factory(5)->recycle($posts))
            ->create([
                'name' => 'TuanTQ',
                'email' => 'admin@gmail.com',
                'password' => hash('sha256', '12341234'),
            ]);
    }
}
