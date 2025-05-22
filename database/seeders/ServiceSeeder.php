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
        Storage::disk('public')->put("services/s_1.jpg", file_get_contents(public_path('tmp_data/serv/s_1.jpg')), 'public');
        Storage::disk('public')->put("services/s_2.jpg", file_get_contents(public_path('tmp_data/serv/s_2.jpg')), 'public');
        Storage::disk('public')->put("services/s_3.jpg", file_get_contents(public_path('tmp_data/serv/s_3.jpg')), 'public');
        Storage::disk('public')->put("services/s_4.jpg", file_get_contents(public_path('tmp_data/serv/s_4.jpg')), 'public');
        Storage::disk('public')->put("services/s_5.jpg", file_get_contents(public_path('tmp_data/serv/s_5.jpg')), 'public');
        Storage::disk('public')->put("services/s_6.jpg", file_get_contents(public_path('tmp_data/serv/s_6.jpg')), 'public');
        Storage::disk('public')->put("services/s_7.jpg", file_get_contents(public_path('tmp_data/serv/s_7.jpg')), 'public');
        Storage::disk('public')->put("services/s_8.jpg", file_get_contents(public_path('tmp_data/serv/s_8.jpg')), 'public');
        Storage::disk('public')->put("services/s_9.jpg", file_get_contents(public_path('tmp_data/serv/s_9.jpg')), 'public');
        Storage::disk('public')->put("services/s_10.jpg", file_get_contents(public_path('tmp_data/serv/s_10.jpg')), 'public');
        Storage::disk('public')->put("services/s_11.jpg", file_get_contents(public_path('tmp_data/serv/s_11.jpg')), 'public');
        Storage::disk('public')->put("services/s_12.jpg", file_get_contents(public_path('tmp_data/serv/s_12.jpg')), 'public');
        Storage::disk('public')->put("services/s_13.jpg", file_get_contents(public_path('tmp_data/serv/s_13.jpg')), 'public');
        Storage::disk('public')->put("services/s_14.jpg", file_get_contents(public_path('tmp_data/serv/s_14.jpg')), 'public');
        Storage::disk('public')->put("services/s_15.jpg", file_get_contents(public_path('tmp_data/serv/s_15.jpg')), 'public');
        Storage::disk('public')->put("services/s_16.jpg", file_get_contents(public_path('tmp_data/serv/s_16.jpg')), 'public');

        $data = [
            [
                'order' => 1,
                'title' => "Бурение свай в в ЯНАО",
                'slug' => Str::slug("Бурение свай в в ЯНАО"),
                'sub_title' => "Бурение свай в в ЯНАО",
                'img' => "services/s_1.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_1/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_1/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_1/price.html')),

            ],
            [
                'order' => 2,
                'title' => "Заказать утепление подполья дома в ЯНАО",
                'slug' => Str::slug("Заказать утепление подполья дома в ЯНАО"),
                'sub_title' => "Утепление подполья дома в ЯНАО",
                'img' => "services/s_2.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_2/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_2/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_2/price.html')),
            ],
            [
                'order' => 3,
                'title' => "Заказать закручивание винтовых свай в ЯНАО",
                'slug' => Str::slug("Заказать закручивание винтовых свай в ЯНАО"),
                'sub_title' => "Закручивание винтовых свай в ЯНАО",
                'img' => "services/s_3.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_3/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_3/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_3/price.html')),
            ],
            [
                'order' => 4,
                'title' => "Заказать замену фундамента на сваи в ЯНАО",
                'slug' => Str::slug("Заказать замену фундамента на сваи в ЯНАО"),
                'sub_title' => "Замена фундамента на сваи в ЯНАО",
                'img' => "services/s_4.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_4/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_4/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_4/price.html')),
            ],

            [
                'order' => 5,
                'title' => "Заказать монтаж винтовых свай в ЯНАО",
                'slug' => Str::slug("Заказать монтаж винтовых свай в ЯНАО"),
                'sub_title' => "Монтаж винтовых свай в ЯНАО",
                'img' => "services/s_5.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_5/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_5/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_5/price.html')),
            ],
            [
                'order' => 6,
                'title' => "Заказать расшивку металлических опор под вагон в ЯНАО",
                'slug' => Str::slug("Заказать расшивку металлических опор под вагон в ЯНАО"),
                'sub_title' => "Расшивка металлических опор под вагон в ЯНАО",
                'img' => "services/s_6.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_6/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_6/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_6/price.html')),
            ],
            [
                'order' => 7,
                'title' => "Заказать обвязку винтовых свай в ЯНАО",
                'slug' => Str::slug("Заказать обвязку винтовых свай в ЯНАО"),
                'sub_title' => "Обвязка винтовых свай в ЯНАО",
                'img' => "services/s_6.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_7/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_7/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_7/price.html')),
            ],
            [
                'order' => 8,
                'title' => "Заказать поднятие дома на сваях в ЯНАО",
                'slug' => Str::slug("Заказать поднятие дома на сваях в ЯНАО"),
                'sub_title' => "Поднятие дома на сваях в ЯНАО",
                'img' => "services/s_7.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_7/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_7/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_8/price.html')),
            ],
            [
                'order' => 9,
                'title' => "Заказать усиление фундамента винтовыми сваями в ЯНАО",
                'slug' => Str::slug("Заказать усиление фундамента винтовыми сваями в ЯНАО"),
                'sub_title' => "Усиление фундамента винтовыми сваями в ЯНАО",
                'img' => "services/s_9.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_9/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_9/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_9/price.html')),
            ],
            [
                'order' => 10,
                'title' => "Заказать установка винтовых свай в ЯНАО",
                'slug' => Str::slug("Заказать установка винтовых свай в ЯНАО"),
                'sub_title' => "Установка винтовых свай в ЯНАО",
                'img' => "services/s_10.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_10/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_10/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_10/price.html')),
            ],
            [
                'order' => 11,
                'title' => "Заказать сварные работы в ЯНАО",
                'slug' => Str::slug("Заказать сварные работы в ЯНАО"),
                'sub_title' => "Сварные работы в ЯНАО",
                'img' => "services/s_11.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_11/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_11/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_11/price.html')),
            ],
            [
                'order' => 12,
                'title' => "Заказать механизированный монтаж в ЯНАО",
                'slug' => Str::slug("Заказать механизированный монтаж в ЯНАО"),
                'sub_title' => "Механизированный монтаж в ЯНАО",
                'img' => "services/s_12.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_12/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_12/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_12/price.html')),
            ],
            [
                'order' => 13,
                'title' => "Заказать ремонт фундамента в ЯНАО",
                'slug' => Str::slug("Заказать ремонт фундамента в ЯНАО"),
                'sub_title' => "Ремонт фундамента в ЯНАО",
                'img' => "services/s_13.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_13/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_13/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_13/price.html')),
            ],
            [
                'order' => 14,
                'title' => "Заказать строительство пристроек в ЯНАО под ключ",
                'slug' => Str::slug("Заказать строительство пристроек в ЯНАО под ключ"),
                'sub_title' => "Строительство пристроек в ЯНАО под ключ",
                'img' => "services/s_14.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_14/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_14/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_14/price.html')),
            ],
            [
                'order' => 15,
                'title' => "Заказать пробное бурение под сваи в ЯНАО",
                'slug' => Str::slug("Заказать пробное бурение под сваи в ЯНАО"),
                'sub_title' => "Пробное бурение под сваи в ЯНАО",
                'img' => "services/s_15.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_15/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_15/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_15/price.html')),
            ],
            [
                'order' => 16,
                'title' => "Заказать удлинители для свай в ЯНАО",
                'slug' => Str::slug("Заказать удлинители для свай в ЯНАО"),
                'sub_title' => "Удлинители для свай в ЯНАО",
                'img' => "services/s_16.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_16/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_16/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_16/price.html')),
            ],
        ];
        DB::table("services")->insert($data);
    }
}
