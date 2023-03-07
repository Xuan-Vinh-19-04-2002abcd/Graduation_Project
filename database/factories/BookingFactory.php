<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $array_description = [
            "Đội của tôi rất mạnh, chúng tôi luôn tập luyện chăm chỉ để cải thiện kỹ năng và sức mạnh.",
            "Chúng tôi có nhiều cầu thủ tài năng và sáng tạo trong mỗi trận đấu.",
            "Đội bóng của tôi rất đoàn kết và hỗ trợ lẫn nhau, điều này giúp chúng tôi thắng nhiều trận đấu.",
            "Chúng tôi có một huấn luyện viên rất tài năng và giàu kinh nghiệm, ông ấy giúp chúng tôi cải thiện kỹ năng và chiến thuật.",
            "Đội bóng của tôi rất đa dạng, chúng tôi có những cầu thủ có kinh nghiệm và những cầu thủ trẻ tuổi đầy nhiệt huyết.",
            "Chúng tôi luôn chơi với tinh thần thể thao và tôn trọng đối thủ.",
            "Đội bóng của tôi rất chủ động trong việc tấn công và có khả năng phòng ngự tốt.",
            "Chúng tôi có một hàng thủ vững chắc, không dễ bị đánh bại.",
            "Đội bóng của tôi rất nhanh nhẹn và có thể tạo ra những pha bóng nguy hiểm trong một nốt nhạc.",
            "Chúng tôi có một tinh thần chiến đấu vô cùng kiên định và sẵn sàng đánh bại bất kỳ đối thủ nào."
        ];
        return [
            'pitch_id'=> rand(1000000,1000009),
            'user_id'=> rand(1000000,1000009),
            'day'=> fake()->date(),
            'contact' => fake()->phoneNumber(),
            'description' => $array_description[rand(0,9)]

        ];
    }
}
