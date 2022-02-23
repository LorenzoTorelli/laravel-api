<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ["Antipasti", "Primi", "Secondi", "Contorni", "Dolci", "Bevande"];

        foreach($categories as $category) {
            $newCategory = new Category();
            $newCategory->title = $category;
            $newCategory->slug = Str::of($newCategory->title)->slug("-");
            $newCategory->save();
        }
    }
}
