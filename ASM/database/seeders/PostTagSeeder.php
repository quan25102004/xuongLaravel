<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     $tag_id = Tag::pluck('id')->all();
    //     $post_id = Post::pluck('id')->all();


    //     for ($i=0; $i < 30; $i++) { 
    //         PostTag::query()->create([
    //             'tag_id'=>fake()->randomElement($tag_id),
    //             'post_id'=>fake()->randomElement($post_id)

    //         ]);
    //     }
    // }
}
