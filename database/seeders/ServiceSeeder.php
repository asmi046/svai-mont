<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Illuminate\Support\Facades\Storage;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("services/s_1.jpg", file_get_contents(public_path('tmp_data/serv/s_1.jpg')), 'public');
        Storage::disk('public')->put("services/s_2.jpg", file_get_contents(public_path('tmp_data/serv/s_2.jpg')), 'public');
        Storage::disk('public')->put("services/s_3.jpg", file_get_contents(public_path('tmp_data/serv/s_3.jpg')), 'public');
        Storage::disk('public')->put("services/s_4.jpg", file_get_contents(public_path('tmp_data/serv/s_4.jpg')), 'public');
        Storage::disk('public')->put("services/s_5.jpg", file_get_contents(public_path('tmp_data/serv/s_5.jpg')), 'public');
        Storage::disk('public')->put("services/s_6.jpg", file_get_contents(public_path('tmp_data/serv/s_6.jpg')), 'public');
        Storage::disk('public')->put("services/s_7.jpg", file_get_contents(public_path('tmp_data/serv/s_7.jpg')), 'public');
        Storage::disk('public')->put("services/s_8.jpg", file_get_contents(public_path('tmp_data/serv/s_8.jpg')), 'public');

        $data = [
            [
                'order' => 1,
                'title' => "Свайный фундамент под ключ в Сургуте",
                'sub_title' => "Купить винтовые сваи D60 мм в Сургуте по выгодной цене от 1992 руб. от производителя только в мае.",
                'img' => "services/s_1.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_1/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_1/main.html')),

            ],
            [
                'order' => 2,
                'title' => "Заказать свайное поле в Сургуте",
                'sub_title' => "Защита фундамента от промерзания в Сургуте от 9191 руб. Бесплатный выезд специалиста в Сургуте",
                'img' => "services/s_2.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_2/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_2/main.html')),
            ],
            [
                'order' => 3,
                'title' => "Заказать забор из евроштакетника на сваях в Сургуте",
                'sub_title' => "Свайный фундамент под ключ купить с установкой под ключ в Сургут. ",
                'img' => "services/s_3.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_3/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_3/main.html')),
            ],
            [
                'order' => 4,
                'title' => "Заказать пристройку на винтовых сваях в Сургуте",
                'sub_title' => "Заказать услугу свайного поля в Сургуте за 8681 руб за метр квадратный. Быстрая установка фундамента под ключ, цена от производителя.",
                'img' => "services/s_4.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_4/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_4/main.html')),
            ],

            [
                'order' => 5,
                'title' => "Заказать сваи для лестницы крыльца в Сургуте",
                'sub_title' => "Мы предлагаем качественные изделия от производителя с доставкой и установкой под ключ.",
                'img' => "services/s_5.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_5/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_5/main.html')),
            ],
            [
                'order' => 6,
                'title' => "Заказать сваи для ограждения от производителя в Сургуте",
                'sub_title' => "У нас вы найдете высококачественные конструкции для фундамента под ключ. ",
                'img' => "services/s_6.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_6/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_6/main.html')),
            ],
            [
                'order' => 7,
                'title' => "Заказать сваи для ограждения от производителя в Сургуте",
                'sub_title' => "Мы предлагаем услуги установки и монтажа свай под ключ, а также быструю доставку по вашему адресу.",
                'img' => "services/s_6.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_6/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_6/main.html')),
            ],
            [
                'order' => 8,
                'title' => "Купить сваи для причала в Сургуте",
                'sub_title' => "У нас вы найдете оптимальные решения по доступной цене с гарантированной установкой и монтажом.",
                'img' => "services/s_7.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_7/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_7/main.html')),
            ],
        ];
        DB::table("services")->insert($data);
    }
}
