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
            "title" => $this->faker->sentence,
            "slug" => $this->faker->sentence,
            "content" => $this->faker->paragraph(8, true),
            "user_id" => 1,
            "categorie_id" => (int)$this->faker->randomElement([5, 6, 7, 8])
        ];
    }
}
