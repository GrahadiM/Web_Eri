<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        $post = [
            [
                'image' => '4_Vlog.png',
                'link' => 'https://www.youtube.com/watch?v=6FVIaOCT634&t=1s	',
            ],
            [
                'image' => '5_Profile.png',
                'link' => 'https://www.youtube.com/watch?v=gDEKgBZnx3g',
            ],
            [
                'image' => '6_Motion.png',
                'link' => 'https://www.youtube.com/watch?v=xP8SI6WDJtU',
            ],
            [
                'image' => '10_movie.png',
                'link' => 'https://www.youtube.com/watch?v=TozR3Gk9BJ8',
            ],
            [
                'image' => '11_openers.png',
                'link' => 'https://www.youtube.com/watch?v=2WL3scr8cWI',
            ],
            [
                'image' => '12_promotion.png',
                'link' => 'https://www.youtube.com/watch?v=gfr0TAZ0-ks',
            ],
        ];
        
        foreach ($post as $key => $value) {
            Post::create($value);
        }
    }
}
