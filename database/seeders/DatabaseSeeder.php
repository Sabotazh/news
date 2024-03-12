<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            ArticleSeeder::class
        ]);

        $categories = Category::factory(4)->create();

        Article::factory(rand(4,9))->create([
            'category_id' => $categories->random(1)->first()->id,
        ]);
    }
}
