<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $array_avatar = [
            "https://i.imgur.com/NfQbd4y.png",
            "https://i.imgur.com/f8jwkKz.png",
            "https://i.imgur.com/lCNy07I.png",
            "https://i.imgur.com/mQCDQF8.png",
            "https://i.imgur.com/jt0fEmR.png",
            "https://i.imgur.com/NfQbd4y.png",
        ];
        return [
            'email' => fake()->unique()->safeEmail(),
            'fullname' => fake()->name(),
            'password' =>Hash::make('12345'), // password
            'phonenumber' => fake()->phoneNumber(),
            'avatar' => $array_avatar[rand(0,5)]
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
