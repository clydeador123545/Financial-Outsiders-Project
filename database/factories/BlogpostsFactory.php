<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blogposts>
 */
class BlogpostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence();

        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . Str::random(5),
            'content' => $this->faker->paragraphs(5, true),
            'author_id' => rand(1,3),
            'published_at' => $this->faker->dateTimeThisYear(),
            'image_path' =>  'https://source.unsplash.com/random/800x600?sig=' . $this->faker->unique()->randomNumber(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
