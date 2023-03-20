<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $array_review  = [
            "Sân bóng đẹp chất lượng tốt,phục vụ nước uống miễn phí cho anh em",
            "Sân tạm được thái độ của chủ sân niềm nở anh em đăt kèo nhớ lưu ý sân này",
            "Sân bóng mới làm lại nên cỏ rất tốt, sân mềm mại giá cả phải chăng",
            "Sân bóng nằm ở ngoài thành, anh em nhớ đặt tiền cọc trước khi đặt sân",
            "Sân nằm ở vị trí thuận tiện, giá cả hơi chát",
            "Tôi đã tìm được sân đá ở đường Mỹ Khê nhờ các bạn, sân rất tốt và giá cả phù hợp",
            "Các bạn đã giúp mình tìm được sân đá ở quận Ngũ Hành Sơn, sân tạm được nhưng giá cả hơi cao",
            "Mình đã tìm được sân đá ở quận Cẩm Lệ nhờ các bạn, giá cả phù hợp và sân rất tốt",
            "Sân bóng rất sạch sẽ và tiện nghi, tôi rất thích chất lượng đường bóng",
            "Giá cả hơi cao so với một số sân khác, nhưng sân bóng rất đẹp và đội ngũ nhân viên thân thiện"
        ];
        return [
            'user_id' =>rand(1000000,1000009),
            'pitch_id'=> rand(1000000,1000009),
            'title' => $array_review[rand(0,9)]
        ];
    }
}
