<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    public function run()
    {
        \App\Comment::create([
            'post_id' => 1,
            'comment_content' => 'Meh. Mogłem oglądać śmieszne koty zamiast czytać ten wpis...',
        ]);

        \App\Comment::create([
            'post_id' => 2,
            'comment_content' => 'Najlepszy. Wpis. Ever.',
        ]);

        \App\Comment::create([
            'post_id' => 2,
            'comment_content' => 'Wygrałeś internety!',
        ]);
    }

}
