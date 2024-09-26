<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Functions\Helper;


class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0 ; $i <= 100 ; $i++) {
            $new_post = new Post();
            $new_post->title = $faker->sentence;
            $new_post->slug = Helper::generateSlug($new_post, Post::class);
            $new_post->text = $faker->text(100);
            $new_post->reading_time = $faker->numberBetween(1,10);
            $new_post->category_id = Category::inRandomOrder()->first()->id;
            $new_post->save();
        }
    }
}
