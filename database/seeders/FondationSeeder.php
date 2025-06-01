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
        Storage::disk('public')->put("fondation/f_9.jpg", file_get_contents(public_path('tmp_data/fond/f_9.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_10.jpg", file_get_contents(public_path('tmp_data/fond/f_10.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_11.jpg", file_get_contents(public_path('tmp_data/fond/f_11.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_12.jpg", file_get_contents(public_path('tmp_data/fond/f_12.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_13.jpg", file_get_contents(public_path('tmp_data/fond/f_13.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_14.jpg", file_get_contents(public_path('tmp_data/fond/f_14.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_15.jpg", file_get_contents(public_path('tmp_data/fond/f_15.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_16.jpg", file_get_contents(public_path('tmp_data/fond/f_16.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_17.jpg", file_get_contents(public_path('tmp_data/fond/f_17.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_18.jpg", file_get_contents(public_path('tmp_data/fond/f_18.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_19.jpg", file_get_contents(public_path('tmp_data/fond/f_19.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_20.jpg", file_get_contents(public_path('tmp_data/fond/f_20.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_21.jpg", file_get_contents(public_path('tmp_data/fond/f_21.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_22.jpg", file_get_contents(public_path('tmp_data/fond/f_22.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_23.jpg", file_get_contents(public_path('tmp_data/fond/f_23.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_24.jpg", file_get_contents(public_path('tmp_data/fond/f_24.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_25.jpg", file_get_contents(public_path('tmp_data/fond/f_25.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_26.jpg", file_get_contents(public_path('tmp_data/fond/f_26.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_27.jpg", file_get_contents(public_path('tmp_data/fond/f_27.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_28.jpg", file_get_contents(public_path('tmp_data/fond/f_28.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_29.jpg", file_get_contents(public_path('tmp_data/fond/f_29.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_30.jpg", file_get_contents(public_path('tmp_data/fond/f_30.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_31.jpg", file_get_contents(public_path('tmp_data/fond/f_31.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_32.jpg", file_get_contents(public_path('tmp_data/fond/f_32.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_33.jpg", file_get_contents(public_path('tmp_data/fond/f_33.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_34.jpg", file_get_contents(public_path('tmp_data/fond/f_34.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_35.jpg", file_get_contents(public_path('tmp_data/fond/f_35.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_36.jpg", file_get_contents(public_path('tmp_data/fond/f_36.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_37.jpg", file_get_contents(public_path('tmp_data/fond/f_37.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_38.jpg", file_get_contents(public_path('tmp_data/fond/f_38.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_39.jpg", file_get_contents(public_path('tmp_data/fond/f_39.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_40.jpg", file_get_contents(public_path('tmp_data/fond/f_40.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_41.jpg", file_get_contents(public_path('tmp_data/fond/f_41.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_42.jpg", file_get_contents(public_path('tmp_data/fond/f_42.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_43.jpg", file_get_contents(public_path('tmp_data/fond/f_43.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_44.jpg", file_get_contents(public_path('tmp_data/fond/f_44.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_45.jpg", file_get_contents(public_path('tmp_data/fond/f_45.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_46.jpg", file_get_contents(public_path('tmp_data/fond/f_46.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_47.jpg", file_get_contents(public_path('tmp_data/fond/f_47.jpg')), 'public');
        Storage::disk('public')->put("fondation/f_48.jpg", file_get_contents(public_path('tmp_data/fond/f_48.jpg')), 'public');


        $data = [
            [
                'order' => 1,
                'title' => "Свайный фундамент под ключ в [city|pp]",
                'slug' => Str::slug("Свайный фундамент под ключ в [city|pp]"),
                'short_title' => "Свайный фундамент под ключ",
                'img' => "fondation/f_1.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_1/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_1/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_1/price.html')),

            ],
            [
                'order' => 2,
                'title' => "Заказать свайное поле в [city|pp]",
                'short_title' => "Заказать свайное поле",
                'slug' => Str::slug("Заказать свайное поле в [city|pp]"),
                'img' => "fondation/f_2.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_2/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_2/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_2/price.html')),

            ],
            [
                'order' => 3,
                'title' => "Заказать забор из евроштакетника на сваях в [city|pp]",
                'short_title' => "Заказать забор из евроштакетника на сваях",
                'slug' => Str::slug("Заказать забор из евроштакетника на сваях в [city|pp]"),
                'img' => "fondation/f_3.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_3/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_3/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_3/price.html')),

            ],
            [
                'order' => 4,
                'title' => "Заказать пристройку на винтовых сваях в [city|pp]",
                'short_title' => "Заказать пристройку на винтовых сваях",
                'slug' => Str::slug("Заказать пристройку на винтовых сваях в [city|pp]"),
                'img' => "fondation/f_4.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_4/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_4/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_4/price.html')),

            ],
            [
                'order' => 5,
                'title' => "Заказать сваи для легких конструкций в [city|pp]",
                'short_title' => "Заказать сваи для легких конструкций",
                'slug' => Str::slug("Заказать сваи для легких конструкций в [city|pp]"),
                'img' => "fondation/f_5.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_5/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_5/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_5/price.html')),

            ],
            [
                'order' => 6,
                'title' => "Заказать сваи для лестницы крыльца в [city|pp]",
                'short_title' => "Заказать сваи для лестницы крыльца",
                'slug' => Str::slug("Заказать сваи для лестницы крыльца в [city|pp]"),
                'img' => "fondation/f_6.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_6/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_6/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_6/price.html')),

            ],
            [
                'order' => 7,
                'title' => "Заказать сваи для ограждения от производителя в [city|pp]",
                'short_title' => "Заказать сваи для ограждения от производителя",
                'slug' => Str::slug("Заказать сваи для ограждения от производителя в [city|pp]"),
                'img' => "fondation/f_7.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_7/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_7/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_7/price.html')),

            ],
            [
                'order' => 8,
                'title' => "Купить сваи для причала в [city|pp]",
                'short_title' => "Купить сваи для причала",
                'slug' => Str::slug("Купить сваи для причала в [city|pp]"),
                'img' => "fondation/f_8.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_8/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_8/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_8/price.html')),

            ],
            [
                'order' => 9,
                'title' => "Купить сваи для фундамента афрейма в [city|pp]",
                'short_title' => "Купить сваи для фундамента афрейма",
                'slug' => Str::slug("Купить сваи для фундамента афрейма в [city|pp]"),
                'img' => "fondation/f_9.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_9/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_9/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_9/price.html')),

            ],
            [
                'order' => 10,
                'title' => "Защита фундамента от промерзания в [city|pp]",
                'short_title' => "Защита фундамента от промерзания",
                'slug' => Str::slug("Защита фундамента от промерзания в [city|pp]"),
                'img' => "fondation/f_10.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_10/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_10/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_10/price.html')),

            ],
            [
                'order' => 11,
                'title' => "Купить услугу фундамент на плывуне в [city|pp]",
                'short_title' => "Купить услугу фундамент на плывуне",
                'slug' => Str::slug("Купить услугу фундамент на плывуне в [city|pp]"),
                'img' => "fondation/f_11.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_11/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_11/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_11/price.html')),

            ],
            [
                'order' => 12,
                'title' => "Купить сваи для веранды в [city|pp]",
                'short_title' => "Купить сваи для веранды",
                'slug' => Str::slug("Купить сваи для веранды в [city|pp]"),
                'img' => "fondation/f_12.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_12/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_12/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_12/price.html')),

            ],
            [
                'order' => 13,
                'title' => "Купить сваи для щитового дома в [city|pp]",
                'short_title' => "Купить сваи для щитового дома",
                'slug' => Str::slug("Купить сваи для щитового дома в [city|pp]"),
                'img' => "fondation/f_13.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_13/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_13/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_13/price.html')),

            ],
            [
                'order' => 14,
                'title' => "Купить сваи для штакетника в [city|pp]",
                'short_title' => "Купить сваи для штакетника",
                'slug' => Str::slug("Купить сваи для штакетника в [city|pp]"),
                'img' => "fondation/f_14.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_14/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_14/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_14/price.html')),

            ],
            [
                'order' => 15,
                'title' => "Купить сваи для гамака в [city|pp]",
                'short_title' => "Купить сваи для гамака",
                'slug' => Str::slug("Купить сваи для гамака в [city|pp]"),
                'img' => "fondation/f_15.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_15/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_15/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_15/price.html')),

            ],
            [
                'order' => 16,
                'title' => "Купить сваи для настила на улице в [city|pp]",
                'short_title' => "Купить сваи для настила на улице",
                'slug' => Str::slug("Купить сваи для настила на улице в [city|pp]"),
                'img' => "fondation/f_16.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_16/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_16/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_16/price.html')),

            ],
            [
                'order' => 17,
                'title' => "Купить сваи для качелей в [city|pp]",
                'short_title' => "Купить сваи для качелей",
                'slug' => Str::slug("Купить сваи для качелей в [city|pp]"),
                'img' => "fondation/f_17.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_17/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_17/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_17/price.html')),

            ],
            [
                'order' => 18,
                'title' => "Купить сваи для крыльца в [city|pp]",
                'short_title' => "Купить сваи для крыльца",
                'slug' => Str::slug("Купить сваи для крыльца в [city|pp]"),
                'img' => "fondation/f_18.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_18/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_18/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_18/price.html')),

            ],
            [
                'order' => 19,
                'title' => "Купить сваи 150x150 в [city|pp]",
                'short_title' => "Купить сваи 150x150",
                'slug' => Str::slug("Купить сваи 150x150 в [city|pp]"),
                'img' => "fondation/f_19.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_19/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_19/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_19/price.html')),

            ],
            [
                'order' => 20,
                'title' => "Купить редуктор для закручивания в [city|pp]",
                'short_title' => "Купить редуктор для закручивания",
                'slug' => Str::slug("Купить редуктор для закручивания в [city|pp]"),
                'img' => "fondation/f_20.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_20/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_20/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_20/price.html')),

            ],
            [
                'order' => 21,
                'title' => "Купить услугу сваекрут в [city|pp]",
                'short_title' => "Купить услугу сваекрут",
                'slug' => Str::slug("Купить услугу сваекрут в [city|pp]"),
                'img' => "fondation/f_21.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_21/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_21/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_21/price.html')),

            ],
            [
                'order' => 22,
                'title' => "Купить висячие сваи и стойки в [city|pp]",
                'short_title' => "Купить висячие сваи и стойки",
                'slug' => Str::slug("Купить висячие сваи и стойки в [city|pp]"),
                'img' => "fondation/f_22.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_22/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_22/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_22/price.html')),

            ],
            [
                'order' => 23,
                'title' => "Купить забивные столбы в [city|pp]",
                'short_title' => "Купить забивные столбы",
                'slug' => Str::slug("Купить забивные столбы в [city|pp]"),
                'img' => "fondation/f_23.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_23/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_23/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_23/price.html')),

            ],
            [
                'order' => 24,
                'title' => "Купить сваи под баню в [city|pp]",
                'short_title' => "Купить сваи под баню",
                'slug' => Str::slug("Купить сваи под баню в [city|pp]"),
                'img' => "fondation/f_24.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_24/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_24/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_24/price.html')),

            ],
            [
                'order' => 25,
                'title' => "Купить опоры для дорожек в [city|pp]",
                'short_title' => "Купить опоры для дорожек",
                'slug' => Str::slug("Купить опоры для дорожек в [city|pp]"),
                'img' => "fondation/f_25.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_25/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_25/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_25/price.html')),

            ],
            [
                'order' => 26,
                'title' => "Купить свайный фундамент в [city|pp]",
                'short_title' => "Купить свайный фундамент",
                'slug' => Str::slug("Купить свайный фундамент в [city|pp]"),
                'img' => "fondation/f_26.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_26/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_26/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_26/price.html')),

            ],
            [
                'order' => 27,
                'title' => "Купить винтовые сваи для фундамента каркасного дома в [city|pp]",
                'short_title' => "Купить винтовые сваи для фундамента каркасного дома",
                'slug' => Str::slug("Купить винтовые сваи для фундамента каркасного дома в [city|pp]"),
                'img' => "fondation/f_27.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_27/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_27/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_27/price.html')),

            ],
            [
                'order' => 28,
                'title' => "Купить пол на винтовых сваях в [city|pp]",
                'short_title' => "Купить пол на винтовых сваях",
                'slug' => Str::slug("Купить пол на винтовых сваях в [city|pp]"),
                'img' => "fondation/f_28.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_28/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_28/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_28/price.html')),

            ],
            [
                'order' => 29,
                'title' => "Купить сваи для ворот в [city|pp]",
                'short_title' => "Купить сваи для ворот",
                'slug' => Str::slug("Купить сваи для ворот в [city|pp]"),
                'img' => "fondation/f_29.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_29/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_29/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_29/price.html')),

            ],
            [
                'order' => 30,
                'title' => "Купить винтовые сваи для забора в [city|pp]",
                'short_title' => "Купить винтовые сваи для забора",
                'slug' => Str::slug("Купить винтовые сваи для забора в [city|pp]"),
                'img' => "fondation/f_30.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_30/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_30/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_30/price.html')),

            ],
            [
                'order' => 31,
                'title' => "Купить пирс на винтовых сваях в [city|pp]",
                'short_title' => "Купить пирс на винтовых сваях",
                'slug' => Str::slug("Купить пирс на винтовых сваях в [city|pp]"),
                'img' => "fondation/f_31.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_31/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_31/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_31/price.html')),

            ],
            [
                'order' => 32,
                'title' => "Купить ангар или склад на сваях в [city|pp]",
                'short_title' => "Купить ангар или склад на сваях",
                'slug' => Str::slug("Купить ангар или склад на сваях в [city|pp]"),
                'img' => "fondation/f_32.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_32/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_32/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_32/price.html')),

            ],
            [
                'order' => 33,
                'title' => "Купить мост на винтовых сваях в [city|pp]",
                'short_title' => "Купить мост на винтовых сваях",
                'slug' => Str::slug("Купить мост на винтовых сваях в [city|pp]"),
                'img' => "fondation/f_33.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_33/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_33/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_33/price.html')),

            ],
            [
                'order' => 34,
                'title' => "Купить винтовые сваи для теплицы в [city|pp]",
                'short_title' => "Купить винтовые сваи для теплицы",
                'slug' => Str::slug("Купить винтовые сваи для теплицы в [city|pp]"),
                'img' => "fondation/f_34.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_34/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_34/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_34/price.html')),

            ],
            [
                'order' => 35,
                'title' => "Купить винтовые сваи для перголы в [city|pp]",
                'short_title' => "Купить винтовые сваи для перголы",
                'slug' => Str::slug("Купить винтовые сваи для перголы в [city|pp]"),
                'img' => "fondation/f_35.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_35/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_35/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_35/price.html')),

            ],
            [
                'order' => 36,
                'title' => "Купить винтовые сваи под лестницу в [city|pp]",
                'short_title' => "Купить винтовые сваи под лестницу",
                'slug' => Str::slug("Купить винтовые сваи под лестницу в [city|pp]"),
                'img' => "fondation/f_36.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_36/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_36/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_36/price.html')),

            ],
            [
                'order' => 37,
                'title' => "Купить винтовые сваи для автонавеса в [city|pp]",
                'short_title' => "Купить винтовые сваи для автонавеса",
                'slug' => Str::slug("Купить винтовые сваи для автонавеса в [city|pp]"),
                'img' => "fondation/f_37.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_37/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_37/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_37/price.html')),

            ],
            [
                'order' => 38,
                'title' => "Купить винтовые сваи для настила бассейна в [city|pp]",
                'short_title' => "Купить винтовые сваи для настила бассейна",
                'slug' => Str::slug("Купить винтовые сваи для настила бассейна в [city|pp]"),
                'img' => "fondation/f_38.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_38/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_38/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_38/price.html')),

            ],
            [
                'order' => 39,
                'title' => "Купить винтовые сваи для фонарей в [city|pp]",
                'short_title' => "Купить винтовые сваи для фонарей",
                'slug' => Str::slug("Купить винтовые сваи для фонарей в [city|pp]"),
                'img' => "fondation/f_39.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_39/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_39/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_39/price.html')),

            ],
            [
                'order' => 40,
                'title' => "Купить винтовые сваи для дорожных знаков в [city|pp]",
                'short_title' => "Купить винтовые сваи для дорожных знаков",
                'slug' => Str::slug("Купить винтовые сваи для дорожных знаков в [city|pp]"),
                'img' => "fondation/f_40.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_40/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_40/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_40/price.html')),

            ],
            [
                'order' => 41,
                'title' => "Купить терраса / веранда на винтовых сваях в [city|pp]",
                'short_title' => "Купить терраса / веранда на винтовых сваях",
                'slug' => Str::slug("Купить терраса / веранда на винтовых сваях в [city|pp]"),
                'img' => "fondation/f_41.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_41/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_41/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_41/price.html')),

            ],
            [
                'order' => 42,
                'title' => "Купить винтовые сваи под гараж в [city|pp]",
                'short_title' => "Купить винтовые сваи под гараж",
                'slug' => Str::slug("Купить винтовые сваи под гараж в [city|pp]"),
                'img' => "fondation/f_42.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_42/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_42/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_42/price.html')),

            ],
            [
                'order' => 43,
                'title' => "Купить сваи под откатные ворота в [city|pp]",
                'short_title' => "Купить сваи под откатные ворота",
                'slug' => Str::slug("Купить сваи под откатные ворота в [city|pp]"),
                'img' => "fondation/f_43.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_43/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_43/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_43/price.html')),

            ],
            [
                'order' => 44,
                'title' => "Купить эстакаду на сваях в [city|pp]",
                'short_title' => "Купить эстакаду на сваях",
                'slug' => Str::slug("Купить эстакаду на сваях в [city|pp]"),
                'img' => "fondation/f_44.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_44/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_44/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_44/price.html')),

            ],
            [
                'order' => 45,
                'title' => "Купить винтовые сваи под дом в [city|pp]",
                'short_title' => "Купить винтовые сваи под дом",
                'slug' => Str::slug("Купить винтовые сваи под дом в [city|pp]"),
                'img' => "fondation/f_45.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_45/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_45/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_45/price.html')),

            ],
            [
                'order' => 46,
                'title' => "Купить винтовые сваи под печь в [city|pp]",
                'short_title' => "Купить винтовые сваи под печь",
                'slug' => Str::slug("Купить винтовые сваи под печь в [city|pp]"),
                'img' => "fondation/f_46.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_46/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_46/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_46/price.html')),

            ],
            [
                'order' => 47,
                'title' => "Купить сарай на винтовых сваях или хозблок в [city|pp]",
                'short_title' => "Купить сарай на винтовых сваях или хозблок",
                'slug' => Str::slug("Купить сарай на винтовых сваях или хозблок в [city|pp]"),
                'img' => "fondation/f_47.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_47/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_47/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_47/price.html')),

            ],
            [
                'order' => 47,
                'title' => "Купить цоколь на винтовых сваях в [city|pp]",
                'short_title' => "Купить цоколь на винтовых сваях",
                'slug' => Str::slug("Купить цоколь на винтовых сваях в [city|pp]"),
                'img' => "fondation/f_48.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_48/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_48/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_48/price.html')),

            ],
        ];
        DB::table("fondations")->insert($data);

    }
}
