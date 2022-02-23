<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Post;
use Faker\Generator as Faker;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            
            $post = new Post();
            $post->title= $faker->words(7, true);
            $post->slug = Str::of($post->title)->slug("-"); 
            $post->content = $faker->text();
            $post->published= rand(0,1);
            $post->save();
        }
    }
}
