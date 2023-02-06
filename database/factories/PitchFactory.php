<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory
 */
class PitchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $array_price = ['200.000', '250.000', '300.000'];
        $array_address = ["Trung tâm Thể dục thể thao Quốc Phòng 3 – 98 Tiểu La, Đà Nẵng",
        "Số 22 đường 2/9 – Quận Hải Châu – TP Đà Nẵng",
        "số 07 đường Duy Tân, Quận Hải Châu, Tp.Đà Nẵng",
        "Số 243-Trường Chinh – Quận Thanh Khê, Đà Nẵng",
        "Số 560 – Trưng Nữ Vương – quận Hải Châu – TP. Đà Nẵng",
        "Số 86 – Duy Tân –  Đà Nẵng",
        "Số 18 – Ba Đình – quận Hải Châu – TP. Đà Nẵng",
        "số 498 – Nguyễn Hữu Thọ – Khuê Trung – Cẩm Lệ – Đà Nẵng",
        "số 02 Vũ Văn Dũng, An Hải Tây, Sơn Trà, Thành phố Đà Nẵng",
        "704 Hoa Vang – Quận Liên Chiểu,  TP Đà Nẵng"];
        $array_name = ["Chuyên Việt","Tuyên Sơn","Duy Tân","Võ Chí Công","Xuân 68","Hòa Xuân"," Trường Chinh","Trưng Nữ Vương","Trang Hoàng","Ba Đình"];
        $array_image = [
           "https://i.imgur.com/LuDj1vD.png",
           "https://i.imgur.com/PoLjzQJ.png",
           "https://i.imgur.com/DLVfvJz.png",
           "https://i.imgur.com/aK20ylT.png",
           "https://i.imgur.com/qK9HBXm.png",
           "https://i.imgur.com/hfIwpX5.png"
        ];

        return [
            'namepitch' => $array_name[rand(0,9)],
            'address' => $array_address[rand(0,8)],
            'phonenumber' =>fake()->phoneNumber(),
            'image' => $array_image[rand(0,5)],
            'price_hour' => $array_price[rand(0,2)]
        ];
    }
}
