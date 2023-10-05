<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
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
        return [
            "title" => $this->faker->name(),
            "description" => $this->faker->text(),
            "full_text" => $this->faker->text(50),
            "images" => $this->faker->loremflickr("public/posts"),
            "category_id" => \App\Models\Category::inRandomOrder()->first()->id,
        ];
    }
}
