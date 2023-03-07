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
        $array_name = [
            "Nguyễn Văn Bình",
            "Trần Thị Định",
            "Lê Văn Quân",
            "Phạm Thị Nga",
            "Đặng Văn Mạnh",
            "Hoàng Thị Cẩm Ly",
            "Ngô Văn Tự",
            "Vũ Thị Hồng",
            "Lương Văn Tiền",
            "Mai Thị Lộ"
        ];
        $array_phonenumber = [
            "0987654321",
            "0978123456",
            "0967123456",
            "0988123456",
            "0909123456",
            "0912123456",
            "0917123456",
            "0966123456",
            "0972123456",
            "0982123456"
        ];

        return [
            'email' => fake()->unique()->safeEmail(),
            'fullname' => $array_name[rand(0,9)],
            'password' =>Hash::make('12345'), // password
            'phonenumber' => $array_phonenumber[rand(0,9)],
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
