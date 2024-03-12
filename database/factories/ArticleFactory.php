<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = ucwords($this->faker->word);

        return [
            'title_ua' => $title,
            'title_pl' => ucwords($this->faker->word),
            'title_en' => ucwords($this->faker->word),
            'subtitle_ua' => ucwords($this->faker->word),
            'subtitle_pl' => ucwords($this->faker->word),
            'subtitle_en' => ucwords($this->faker->word),
            'description_ua' => $this->faker->text,
            'description_pl' => $this->faker->text,
            'description_en' => $this->faker->text,
            'slug' => Str::slug($title),
            'image' => 'https://placehold.co/1280x636',
            'is_published' => true,
            'publication_date' => now(),
        ];
    }
}
