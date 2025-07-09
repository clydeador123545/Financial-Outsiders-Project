<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Blogposts;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comments>
 */
class CommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->sentence(10),
            'user_id' => User::inRandomOrder()->first()->user_id ?? 1,
            'blogpost_id' => Blogposts::inRandomOrder()->first()->blogpost_id ?? 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
