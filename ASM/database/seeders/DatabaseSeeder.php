<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $posts = Post::all();
        $tags = Tag::all();


        foreach ($posts as $post) {
            $randomTags = $tags->random(rand(1, 3))->pluck('id'); // Lấy 1-3 tag ngẫu nhiên
            foreach ($randomTags as $tagId) {
                DB::table('post_tag')->insert([
                    'post_id' => $post->id,
                    'tag_id' => $tagId,
                ]);
            }
        }
      
    }
}
