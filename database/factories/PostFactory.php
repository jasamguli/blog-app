<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    public function definition() {
        $title = $this->faker->sentence();

        return [
            'title' => $title,
            'slug' => Str::slug($title, '-'),
            'short_description' => $this->faker->text(150),
            'description' => $this->faker->text(500),
            'picture' => '/storage/images/posts/' . rand(1, 17) . '.jpg',
            'published_at' => rand(1640991600, 1655573346),
            'user_id' => rand(1, 20)
        ];
    }
}
