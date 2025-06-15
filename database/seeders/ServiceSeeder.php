<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("services/s_1.webp", file_get_contents(public_path('tmp_data/serv/s_1.webp')), 'public');
        Storage::disk('public')->put("services/s_2.webp", file_get_contents(public_path('tmp_data/serv/s_2.webp')), 'public');
        Storage::disk('public')->put("services/s_3.webp", file_get_contents(public_path('tmp_data/serv/s_3.webp')), 'public');
        Storage::disk('public')->put("services/s_4.webp", file_get_contents(public_path('tmp_data/serv/s_4.webp')), 'public');
        Storage::disk('public')->put("services/s_5.webp", file_get_contents(public_path('tmp_data/serv/s_5.webp')), 'public');
        Storage::disk('public')->put("services/s_6.webp", file_get_contents(public_path('tmp_data/serv/s_6.webp')), 'public');
        Storage::disk('public')->put("services/s_7.webp", file_get_contents(public_path('tmp_data/serv/s_7.webp')), 'public');
        Storage::disk('public')->put("services/s_8.webp", file_get_contents(public_path('tmp_data/serv/s_8.webp')), 'public');
        Storage::disk('public')->put("services/s_9.webp", file_get_contents(public_path('tmp_data/serv/s_9.webp')), 'public');
        Storage::disk('public')->put("services/s_10.webp", file_get_contents(public_path('tmp_data/serv/s_10.webp')), 'public');
        Storage::disk('public')->put("services/s_11.webp", file_get_contents(public_path('tmp_data/serv/s_11.webp')), 'public');
        Storage::disk('public')->put("services/s_12.webp", file_get_contents(public_path('tmp_data/serv/s_12.webp')), 'public');
        Storage::disk('public')->put("services/s_13.webp", file_get_contents(public_path('tmp_data/serv/s_13.webp')), 'public');
        Storage::disk('public')->put("services/s_14.webp", file_get_contents(public_path('tmp_data/serv/s_14.webp')), 'public');
        Storage::disk('public')->put("services/s_15.webp", file_get_contents(public_path('tmp_data/serv/s_15.webp')), 'public');
        Storage::disk('public')->put("services/s_16.webp", file_get_contents(public_path('tmp_data/serv/s_16.webp')), 'public');

        $data = [
            [
                'order' => 1,
                'title' => "Бурение под фундамент",
                'slug' => Str::slug("Бурение свай в [city|pp]"),
                'sub_title' => "Бурение свай в [city|pp]",
                'img' => "services/s_1.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_1/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_1/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_1/price.html')),

            ],
            [
                'order' => 2,
                'title' => "Утепление основания фундамента",
                'slug' => Str::slug("Заказать утепление подполья дома в [city|pp]"),
                'sub_title' => "Утепление подполья дома в [city|pp]",
                'img' => "services/s_2.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_2/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_2/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_2/price.html')),
            ],
            [
                'order' => 3,
                'title' => "Заказать закручивание винтовых свай",
                'slug' => Str::slug("Заказать закручивание винтовых свай в [city|pp]"),
                'sub_title' => "Закручивание винтовых свай в [city|pp]",
                'img' => "services/s_3.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_3/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_3/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_3/price.html')),
            ],
            [
                'order' => 4,
                'title' => "Замена свайного фундамента",
                'slug' => Str::slug("Заказать замену фундамента на сваи в [city|pp]"),
                'sub_title' => "Замена фундамента на сваи в [city|pp]",
                'img' => "services/s_4.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_4/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_4/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_4/price.html')),
            ],

            [
                'order' => 5,
                'title' => "Монтаж финтовых свай",
                'slug' => Str::slug("Заказать монтаж винтовых свай в [city|pp]"),
                'sub_title' => "Монтаж винтовых свай в [city|pp]",
                'img' => "services/s_5.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_5/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_5/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_5/price.html')),
            ],
            // [
            //     'order' => 6,
            //     'title' => "Заказать расшивку металлических опор под вагон в [city|pp]",
            //     'slug' => Str::slug("Заказать расшивку металлических опор под вагон в [city|pp]"),
            //     'sub_title' => "Расшивка металлических опор под вагон в [city|pp]",
            //     'img' => "services/s_6.webp",
            //     'top_description' => file_get_contents(public_path('tmp_data/serv/s_6/top.html')),
            //     'description' => file_get_contents(public_path('tmp_data/serv/s_6/main.html')),
            //     'price' => file_get_contents(public_path('tmp_data/serv/s_6/price.html')),
            // ],
            [
                'order' => 7,
                'title' => "Обвязка винтовых свай",
                'slug' => Str::slug("Заказать обвязку винтовых свай в [city|pp]"),
                'sub_title' => "Обвязка винтовых свай в [city|pp]",
                'img' => "services/s_6.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_7/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_7/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_7/price.html')),
            ],
            [
                'order' => 8,
                'title' => "Поднятие дома на сваях",
                'slug' => Str::slug("Заказать поднятие дома на сваях в [city|pp]"),
                'sub_title' => "Поднятие дома на сваях в [city|pp]",
                'img' => "services/s_7.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_7/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_7/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_8/price.html')),
            ],
            [
                'order' => 9,
                'title' => "Усиление фундамента винтовыми",
                'slug' => Str::slug("Заказать усиление фундамента винтовыми сваями в [city|pp]"),
                'sub_title' => "Усиление фундамента винтовыми сваями в [city|pp]",
                'img' => "services/s_9.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_9/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_9/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_9/price.html')),
            ],
            [
                'order' => 10,
                'title' => "Заказать установка винтовых свай",
                'slug' => Str::slug("Заказать установка винтовых свай в [city|pp]"),
                'sub_title' => "Установка винтовых свай в [city|pp]",
                'img' => "services/s_10.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_10/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_10/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_10/price.html')),
            ],
            [
                'order' => 11,
                'title' => "Cварные работы",
                'slug' => Str::slug("Заказать сварные работы в [city|pp]"),
                'sub_title' => "Сварные работы в [city|pp]",
                'img' => "services/s_11.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_11/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_11/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_11/price.html')),
            ],
            [
                'order' => 12,
                'title' => "Механизированный монтаж свай",
                'slug' => Str::slug("Заказать механизированный монтаж в [city|pp]"),
                'sub_title' => "Механизированный монтаж в [city|pp]",
                'img' => "services/s_12.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_12/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_12/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_12/price.html')),
            ],
            [
                'order' => 13,
                'title' => "Ремонт фундамента",
                'slug' => Str::slug("Заказать ремонт фундамента в [city|pp]"),
                'sub_title' => "Ремонт фундамента в [city|pp]",
                'img' => "services/s_13.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_13/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_13/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_13/price.html')),
            ],
            [
                'order' => 14,
                'title' => "Строительство пристройки под ключ",
                'slug' => Str::slug("Заказать строительство пристроек в [city|pp] под ключ"),
                'sub_title' => "Строительство пристроек в [city|pp] под ключ",
                'img' => "services/s_14.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_14/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_14/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_14/price.html')),
            ],
            [
                'order' => 15,
                'title' => "Пробное бурение под сваи",
                'slug' => Str::slug("Заказать пробное бурение под сваи в [city|pp]"),
                'sub_title' => "Пробное бурение под сваи в [city|pp]",
                'img' => "services/s_15.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_15/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_15/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_15/price.html')),
            ],
            [
                'order' => 16,
                'title' => "Удлинители для свай",
                'slug' => Str::slug("Заказать удлинители для свай в [city|pp]"),
                'sub_title' => "Удлинители для свай в [city|pp]",
                'img' => "services/s_16.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_16/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_16/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_16/price.html')),
            ],
        ];
        DB::table("services")->insert($data);
    }
}
