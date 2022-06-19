<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'admin' => rand(0, 1),
            'email_verified_at' => now(),
            'password' => '$2y$10$WWh5t3JIoRgg7.9VewLsO.ouLvf187.Z.BRfb0SEngILvhK0rG/wO', // password
            'remember_token' => Str::random(10),
            'about' => $this->faker->text(),
            'picture' => '/storage/images/users/' . rand(1, 19).'.jpg'
        ];
    }

    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
