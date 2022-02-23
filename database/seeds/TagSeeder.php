<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ["carne", "pesce", "vegano", "senza glutine", "senza lattosio"]; 

        foreach($array as $tag) {
            $newTag = new Tag();
            $newTag->title = $tag;
            $newTag->slug = Str::of($newTag->title)->slug("-"); 
            $newTag->save();
        }
    }
}
