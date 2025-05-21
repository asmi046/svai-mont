<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FondationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("fondation/home.svg", file_get_contents(public_path('tmp_data/fond/home.svg')), 'public');

        Storage::disk('public')->put("fondation/f_1.jpg", file_get_contents(public_path('tmp_data/fond/f_1.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_2.jpg", file_get_contents(public_path('tmp_data/fond/f_2.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_3.jpg", file_get_contents(public_path('tmp_data/fond/f_3.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_4.jpg", file_get_contents(public_path('tmp_data/fond/f_4.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_5.jpg", file_get_contents(public_path('tmp_data/fond/f_5.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_6.jpg", file_get_contents(public_path('tmp_data/fond/f_6.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_7.jpg", file_get_contents(public_path('tmp_data/fond/f_7.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_8.jpg", file_get_contents(public_path('tmp_data/fond/f_8.jpg')), 'public');

        $data = [
            [
                'order' => 1,
                'title' => "Свайный фундамент под ключ в Сургуте",
                'slug' => Str::slug("Свайный фундамент под ключ в Сургуте"),
                'short_title' => "Свайный фундамент под ключ",
                'img' => "fondation/f_1.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_1/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_1/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_1/price.html')),

            ],
            [
                'order' => 2,
                'title' => "Заказать свайное поле в Сургуте",
                'short_title' => "Заказать свайное поле",
                'slug' => Str::slug("Заказать свайное поле в Сургуте"),
                'img' => "fondation/f_2.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_2/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_2/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_2/price.html')),

            ],
            [
                'order' => 3,
                'title' => "Заказать забор из евроштакетника на сваях в Сургуте",
                'short_title' => "Заказать забор из евроштакетника на сваях",
                'slug' => Str::slug("Заказать забор из евроштакетника на сваях в Сургуте"),
                'img' => "fondation/f_3.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_3/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_3/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_3/price.html')),

            ],
            [
                'order' => 4,
                'title' => "Заказать пристройку на винтовых сваях в Сургуте",
                'short_title' => "Заказать пристройку на винтовых сваях",
                'slug' => Str::slug("Заказать пристройку на винтовых сваях в Сургуте"),
                'img' => "fondation/f_4.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_4/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_4/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_4/price.html')),

            ],
            [
                'order' => 5,
                'title' => "Заказать сваи для легких конструкций в Сургуте",
                'short_title' => "Заказать сваи для легких конструкций",
                'slug' => Str::slug("Заказать сваи для легких конструкций в Сургуте"),
                'img' => "fondation/f_5.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_5/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_5/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_5/price.html')),

            ],

            [
                'order' => 6,
                'title' => "Заказать сваи для лестницы крыльца в Сургуте",
                'short_title' => "Заказать сваи для лестницы крыльца",
                'slug' => Str::slug("Заказать сваи для лестницы крыльца в Сургуте"),
                'img' => "fondation/f_6.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_6/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_6/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_6/price.html')),

            ],

            [
                'order' => 7,
                'title' => "Заказать сваи для ограждения от производителя в Сургуте",
                'short_title' => "Заказать сваи для ограждения от производителя",
                'slug' => Str::slug("Заказать сваи для ограждения от производителя в Сургуте"),
                'img' => "fondation/f_7.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_7/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_7/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_7/price.html')),

            ],

            [
                'order' => 8,
                'title' => "Купить сваи для причала в Сургуте",
                'short_title' => "Купить сваи для причала",
                'slug' => Str::slug("Купить сваи для причала в Сургуте"),
                'img' => "fondation/f_8.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_8/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_8/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_8/price.html')),

            ],
        ];
        DB::table("fondations")->insert($data);

    }
}
