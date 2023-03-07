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
    public function definition()
    {
        $array_content = [
            "Mình đang tìm sân đá bóng ở khu vực quận Sơn Trà, ai biết chỉ giúp mình với!",
            "Cần tìm sân đá ở quận Hải Châu, ai có thông tin chia sẻ giúp mình với nhé!",
            "Mình muốn tìm sân đá bóng ở quận Liên Chiểu, có ai biết chỗ nào uy tín không?",
            "Tìm sân đá bóng ở quận Cẩm Lệ, giá cả hợp lý và chất lượng sân tốt, ai có kinh nghiệm chỉ giúp mình với!",
            "Cần tìm sân đá bóng ở quận Ngũ Hành Sơn, ai có thông tin về các sân đá ở khu vực này giới thiệu giúp mình với!",
            "Mình đang cần tìm sân đá bóng ở đường Mỹ Kh3 ai có kinh nghiệm tư vấn cho mình với nhé!",
            "Mình đang muốn tìm sân đá bóng ở quận Thanh Khê, có ai biết chỗ nào đáng tin cậy không?",
            "Cần tìm sân đá bóng ở quận 10, giá cả hợp lý và địa điểm thuận tiện, ai có thông tin chia sẻ giúp mình với!",
            "Mình đang muốn tìm sân đá bóng ở Hòa Vang , ai biết chỗ nào đáng tin cậy không nhỉ?",
            "Tìm sân đá bóng ở quận 5, có ai biết chỗ nào chất lượng không? Giới thiệu giúp mình với!"
        ];
        $array_image = [
            "storage//images/products/anh1.png",
            "storage//images/products/anh2.png",
            "storage//images/products/post.png",
            "storage//images/products/pos.png",
            "storage//images/products/anhcbd.jpg",
            "storage//images/products/anhphui.png",
            "storage//images/products/covu.png",
            "storage//images/products/ff.png",
            "storage//images/products/images.png",
            "storage//images/products/phuiphui.png",
        ];
        return [
            'user_id' =>rand(1000000,1000009),
            'content' => $array_content[rand(0,9)],
            'image' => $array_image[rand(0,9)]
        ];
    }
}
