<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    public function run()
    {
        \DB::table('posts')->truncate();

        \App\Post::create([
            'title' => 'Pierwszy wpis',
            'post_content' => 'Treść pierwszego wpisu.',
        ]);

        \App\Post::create([
            'title' => 'Czy Laravel jest spoko?',
            'post_content' => 'Tak, jest spoko.',
        ]);
    }

}
