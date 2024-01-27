<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'parent_id' => rand(0, 4),
            'user_id'   => rand(1, 10),
            'url'       => fake()->url(),
            'content'   => fake()->sentence(rand(5, 10), true),
        ];
    }
}
