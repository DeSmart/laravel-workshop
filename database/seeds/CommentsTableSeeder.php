<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    public function run()
    {
        \DB::table('comments')->truncate();

        \App\Comment::create([
            'id_post' => 1,
            'comment_content' => 'Meh. Mogłem oglądać śmieszne koty zamiast czytać ten wpis...',
        ]);

        \App\Comment::create([
            'id_post' => 2,
            'comment_content' => 'Najlepszy. Wpis. Ever.',
        ]);

        \App\Comment::create([
            'id_post' => 2,
            'comment_content' => 'Wygrałeś internety!',
        ]);
    }

}
