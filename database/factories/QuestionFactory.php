<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = rtrim(fake()->sentence(rand(5, 10)), '.');
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => fake()->paragraphs(rand(3, 7), true),
            'views' => rand(0, 10),
            'answers' => rand(0, 10),
            'votes' => rand(-3, 10)
        ];
    }
}
