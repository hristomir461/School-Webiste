<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'description' => fake()->paragraph(5),
            'active' => true,
            'slug' => fake()->title(),
            'image' => 'post-images/' . fake()->image('public/storage/post-images',640,480, null, false),
            'published_at' => fake()->date(),
            'user_id' => 1,
        ];
    }
}
