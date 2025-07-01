<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Support\Carbon;
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

        Storage::disk('public')->put("fondation/f_1.webp", file_get_contents(public_path('tmp_data/fond/f_1.webp')), 'public');
        Storage::disk('public')->put("fondation/f_2.webp", file_get_contents(public_path('tmp_data/fond/f_2.webp')), 'public');
        Storage::disk('public')->put("fondation/f_3.webp", file_get_contents(public_path('tmp_data/fond/f_3.webp')), 'public');
        Storage::disk('public')->put("fondation/f_4.webp", file_get_contents(public_path('tmp_data/fond/f_4.webp')), 'public');
        Storage::disk('public')->put("fondation/f_5.webp", file_get_contents(public_path('tmp_data/fond/f_5.webp')), 'public');
        Storage::disk('public')->put("fondation/f_6.webp", file_get_contents(public_path('tmp_data/fond/f_6.webp')), 'public');
        Storage::disk('public')->put("fondation/f_7.webp", file_get_contents(public_path('tmp_data/fond/f_7.webp')), 'public');
        Storage::disk('public')->put("fondation/f_8.webp", file_get_contents(public_path('tmp_data/fond/f_8.webp')), 'public');
        Storage::disk('public')->put("fondation/f_9.webp", file_get_contents(public_path('tmp_data/fond/f_9.webp')), 'public');
        Storage::disk('public')->put("fondation/f_10.webp", file_get_contents(public_path('tmp_data/fond/f_10.webp')), 'public');
        Storage::disk('public')->put("fondation/f_11.webp", file_get_contents(public_path('tmp_data/fond/f_11.webp')), 'public');
        Storage::disk('public')->put("fondation/f_12.webp", file_get_contents(public_path('tmp_data/fond/f_12.webp')), 'public');
        Storage::disk('public')->put("fondation/f_13.webp", file_get_contents(public_path('tmp_data/fond/f_13.webp')), 'public');
        Storage::disk('public')->put("fondation/f_14.webp", file_get_contents(public_path('tmp_data/fond/f_14.webp')), 'public');
        Storage::disk('public')->put("fondation/f_15.webp", file_get_contents(public_path('tmp_data/fond/f_15.webp')), 'public');
        Storage::disk('public')->put("fondation/f_16.webp", file_get_contents(public_path('tmp_data/fond/f_16.webp')), 'public');
        Storage::disk('public')->put("fondation/f_17.webp", file_get_contents(public_path('tmp_data/fond/f_17.webp')), 'public');
        Storage::disk('public')->put("fondation/f_18.webp", file_get_contents(public_path('tmp_data/fond/f_18.webp')), 'public');
        Storage::disk('public')->put("fondation/f_19.webp", file_get_contents(public_path('tmp_data/fond/f_19.webp')), 'public');
        Storage::disk('public')->put("fondation/f_20.webp", file_get_contents(public_path('tmp_data/fond/f_20.webp')), 'public');
        Storage::disk('public')->put("fondation/f_21.webp", file_get_contents(public_path('tmp_data/fond/f_21.webp')), 'public');
        Storage::disk('public')->put("fondation/f_22.webp", file_get_contents(public_path('tmp_data/fond/f_22.webp')), 'public');
        Storage::disk('public')->put("fondation/f_23.webp", file_get_contents(public_path('tmp_data/fond/f_23.webp')), 'public');
        Storage::disk('public')->put("fondation/f_24.webp", file_get_contents(public_path('tmp_data/fond/f_24.webp')), 'public');
        Storage::disk('public')->put("fondation/f_25.webp", file_get_contents(public_path('tmp_data/fond/f_25.webp')), 'public');
        Storage::disk('public')->put("fondation/f_26.webp", file_get_contents(public_path('tmp_data/fond/f_26.webp')), 'public');
        Storage::disk('public')->put("fondation/f_27.webp", file_get_contents(public_path('tmp_data/fond/f_27.webp')), 'public');
        Storage::disk('public')->put("fondation/f_28.webp", file_get_contents(public_path('tmp_data/fond/f_28.webp')), 'public');
        Storage::disk('public')->put("fondation/f_29.webp", file_get_contents(public_path('tmp_data/fond/f_29.webp')), 'public');
        Storage::disk('public')->put("fondation/f_30.webp", file_get_contents(public_path('tmp_data/fond/f_30.webp')), 'public');
        Storage::disk('public')->put("fondation/f_31.webp", file_get_contents(public_path('tmp_data/fond/f_31.webp')), 'public');
        Storage::disk('public')->put("fondation/f_32.webp", file_get_contents(public_path('tmp_data/fond/f_32.webp')), 'public');
        Storage::disk('public')->put("fondation/f_33.webp", file_get_contents(public_path('tmp_data/fond/f_33.webp')), 'public');
        Storage::disk('public')->put("fondation/f_34.webp", file_get_contents(public_path('tmp_data/fond/f_34.webp')), 'public');
        Storage::disk('public')->put("fondation/f_35.webp", file_get_contents(public_path('tmp_data/fond/f_35.webp')), 'public');
        Storage::disk('public')->put("fondation/f_36.webp", file_get_contents(public_path('tmp_data/fond/f_36.webp')), 'public');
        Storage::disk('public')->put("fondation/f_37.webp", file_get_contents(public_path('tmp_data/fond/f_37.webp')), 'public');
        Storage::disk('public')->put("fondation/f_38.webp", file_get_contents(public_path('tmp_data/fond/f_38.webp')), 'public');
        Storage::disk('public')->put("fondation/f_39.webp", file_get_contents(public_path('tmp_data/fond/f_39.webp')), 'public');
        Storage::disk('public')->put("fondation/f_40.webp", file_get_contents(public_path('tmp_data/fond/f_40.webp')), 'public');
        Storage::disk('public')->put("fondation/f_41.webp", file_get_contents(public_path('tmp_data/fond/f_41.webp')), 'public');
        Storage::disk('public')->put("fondation/f_42.webp", file_get_contents(public_path('tmp_data/fond/f_42.webp')), 'public');
        Storage::disk('public')->put("fondation/f_43.webp", file_get_contents(public_path('tmp_data/fond/f_43.webp')), 'public');
        // Storage::disk('public')->put("fondation/f_44.webp", file_get_contents(public_path('tmp_data/fond/f_44.webp')), 'public');
        // Storage::disk('public')->put("fondation/f_45.webp", file_get_contents(public_path('tmp_data/fond/f_45.webp')), 'public');
        Storage::disk('public')->put("fondation/f_46.webp", file_get_contents(public_path('tmp_data/fond/f_46.webp')), 'public');
        Storage::disk('public')->put("fondation/f_47.webp", file_get_contents(public_path('tmp_data/fond/f_47.webp')), 'public');
        Storage::disk('public')->put("fondation/f_48.webp", file_get_contents(public_path('tmp_data/fond/f_48.webp')), 'public');


        $data = [
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 10,
                'title' => "Свайный фундамент под ключ",
                'slug' => Str::slug("Свайный фундамент под ключ в [city|pp]"),
                'short_title' => "Свайный фундамент под ключ",
                'img' => "fondation/f_1.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_1/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_1/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_1/price.html')),

            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 20,
                'title' => "Свайное поле",
                'short_title' => "Свайное поле под ключ",
                'slug' => Str::slug("Заказать свайное поле в [city|pp]"),
                'img' => "fondation/f_2.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_2/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_2/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_2/price.html')),

            ],

            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 21,
                'title' => "Свайный фундамент под баню",
                'short_title' => "Свайный фундамент под баню",
                'slug' => Str::slug("Купить сваи под баню в [city|pp]"),
                'img' => "fondation/f_24.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_24/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_24/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_24/price.html')),

            ],


            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 40,
                'title' => "Свайный фундамент под пристройку",
                'short_title' => "Свайный фундамент под пристройку",
                'slug' => Str::slug("Заказать пристройку на винтовых сваях в [city|pp]"),
                'img' => "fondation/f_4.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_4/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_4/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_4/price.html')),

            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 50,
                'title' => "Свайный фундамент для легких конструкций",
                'short_title' => "Свайный фундамент для легких конструкций",
                'slug' => Str::slug("Заказать сваи для легких конструкций в [city|pp]"),
                'img' => "fondation/f_5.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_5/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_5/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_5/price.html')),

            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 60,
                'title' => "Свайный фундамент для лестницы",
                'short_title' => "Заказать сваи для лестницы крыльца",
                'slug' => Str::slug("Заказать сваи для лестницы крыльца в [city|pp]"),
                'img' => "fondation/f_6.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_6/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_6/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_6/price.html')),

            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 61,
                'title' => "Свайный фундамент для каркасного дома",
                'short_title' => "Свайный фундамент для каркасного дома",
                'slug' => Str::slug("Купить винтовые сваи для фундамента каркасного дома в [city|pp]"),
                'img' => "fondation/f_27.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_27/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_27/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_27/price.html')),

            ],

            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 62,
                'title' => "Свайный фундамент для настила на улице",
                'short_title' => "Свайный фундамент для настила на улице",
                'slug' => Str::slug("Купить сваи для настила на улице в [city|pp]"),
                'img' => "fondation/f_16.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_16/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_16/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_16/price.html')),

            ],

            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 80,
                'title' => "Свайный фундамент для причала",
                'short_title' => "Купить сваи для причала",
                'slug' => Str::slug("Купить сваи для причала в [city|pp]"),
                'img' => "fondation/f_8.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_8/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_8/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_8/price.html')),

            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 90,
                'title' => "Свайный фундамент для афрейма",
                'short_title' => "Купить сваи для фундамента афрейма",
                'slug' => Str::slug("Купить сваи для фундамента афрейма в [city|pp]"),
                'img' => "fondation/f_9.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_9/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_9/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_9/price.html')),

            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 100,
                'title' => "Защита фундамента от промерзания",
                'short_title' => "Защита фундамента от промерзания",
                'slug' => Str::slug("Защита фундамента от промерзания в [city|pp]"),
                'img' => "fondation/f_10.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_10/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_10/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_10/price.html')),

            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 110,
                'title' => "Свайный фундамент на плавуне",
                'short_title' => "Купить услугу фундамент на плывуне",
                'slug' => Str::slug("Купить услугу фундамент на плывуне в [city|pp]"),
                'img' => "fondation/f_11.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_11/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_11/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_11/price.html')),

            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 120,
                'title' => "Свайный фундамент для веранды",
                'short_title' => "Купить сваи для веранды",
                'slug' => Str::slug("Купить сваи для веранды в [city|pp]"),
                'img' => "fondation/f_12.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_12/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_12/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_12/price.html')),

            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 130,
                'title' => "Свайный фундамент для щитового дома",
                'short_title' => "Купить сваи для щитового дома",
                'slug' => Str::slug("Купить сваи для щитового дома в [city|pp]"),
                'img' => "fondation/f_13.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_13/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_13/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_13/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 140,
                'title' => "Свайный фундамент для штакетника",
                'short_title' => "Купить сваи для штакетника",
                'slug' => Str::slug("Купить сваи для штакетника в [city|pp]"),
                'img' => "fondation/f_14.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_14/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_14/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_14/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 150,
                'title' => "Cваи для гамака",
                'short_title' => "Купить сваи для гамака",
                'slug' => Str::slug("Купить сваи для гамака в [city|pp]"),
                'img' => "fondation/f_15.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_15/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_15/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_15/price.html')),

            ],
            // [
            //     'order' => 160,
            //     'title' => "Купить сваи для настила на улице в [city|pp]",
            //     'short_title' => "Купить сваи для настила на улице",
            //     'slug' => Str::slug("Купить сваи для настила на улице в [city|pp]"),
            //     'img' => "fondation/f_16.webp",
            //     'icon' => "fondation/home.svg",
            //     'top_description' => file_get_contents(public_path('tmp_data/fond/f_16/top.html')),
            //     'description' => file_get_contents(public_path('tmp_data/fond/f_16/main.html')),
            //     'price' => file_get_contents(public_path('tmp_data/fond/f_16/price.html')),

            // ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 170,
                'title' => "Cваи для качелей",
                'short_title' => "Купить сваи для качелей",
                'slug' => Str::slug("Купить сваи для качелей в [city|pp]"),
                'img' => "fondation/f_17.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_17/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_17/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_17/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 180,
                'title' => "Свайный фундамент для крыльца",
                'short_title' => "Купить сваи для крыльца",
                'slug' => Str::slug("Купить сваи для крыльца в [city|pp]"),
                'img' => "fondation/f_18.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_18/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_18/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_18/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 190,
                'title' => "Фундамент на сваях 150x150",
                'short_title' => "Купить сваи 150x150",
                'slug' => Str::slug("Купить сваи 150x150 в [city|pp]"),
                'img' => "fondation/f_19.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_19/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_19/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_19/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 200,
                'title' => "Редуктор для закручивания свай",
                'short_title' => "Купить редуктор для закручивания",
                'slug' => Str::slug("Купить редуктор для закручивания в [city|pp]"),
                'img' => "fondation/f_20.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_20/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_20/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_20/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 210,
                'title' => "Заказать сваекрут",
                'short_title' => "Купить услугу сваекрут",
                'slug' => Str::slug("Купить услугу сваекрут в [city|pp]"),
                'img' => "fondation/f_21.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_21/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_21/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_21/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 220,
                'title' => "Висячие сваи и стойки",
                'short_title' => "Купить висячие сваи и стойки",
                'slug' => Str::slug("Купить висячие сваи и стойки в [city|pp]"),
                'img' => "fondation/f_22.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_22/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_22/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_22/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 230,
                'title' => "Збивные столбы для забора",
                'short_title' => "Купить забивные столбы",
                'slug' => Str::slug("Купить забивные столбы в [city|pp]"),
                'img' => "fondation/f_23.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_23/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_23/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_23/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 231,
                'title' => "Свайный фундамент для евроштакетника",
                'short_title' => "Заказать забор из евроштакетника на сваях",
                'slug' => Str::slug("Заказать забор из евроштакетника на сваях в [city|pp]"),
                'img' => "fondation/f_3.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_3/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_3/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_3/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 250,
                'title' => "Свайный фундамент для дорожек",
                'short_title' => "Купить опоры для дорожек",
                'slug' => Str::slug("Купить опоры для дорожек в [city|pp]"),
                'img' => "fondation/f_25.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_25/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_25/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_25/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 260,
                'title' => "Фундамент на винтовых сваях",
                'short_title' => "Купить свайный фундамент",
                'slug' => Str::slug("Купить свайный фундамент в [city|pp]"),
                'img' => "fondation/f_26.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_26/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_26/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_26/price.html')),

            ],

            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 270,
                'title' => "Свайный фундамент для ограждения",
                'short_title' => "Заказать сваи для ограждения от производителя",
                'slug' => Str::slug("Заказать сваи для ограждения от производителя в [city|pp]"),
                'img' => "fondation/f_7.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_7/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_7/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_7/price.html')),

            ],

            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 280,
                'title' => "Пол на винтовых сваях",
                'short_title' => "Купить пол на винтовых сваях",
                'slug' => Str::slug("Купить пол на винтовых сваях в [city|pp]"),
                'img' => "fondation/f_28.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_28/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_28/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_28/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 290,
                'title' => "Cваи для ворот",
                'short_title' => "Купить сваи для ворот",
                'slug' => Str::slug("Купить сваи для ворот в [city|pp]"),
                'img' => "fondation/f_29.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_29/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_29/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_29/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 300,
                'title' => "Cваи для забора",
                'short_title' => "Купить винтовые сваи для забора",
                'slug' => Str::slug("Купить винтовые сваи для забора в [city|pp]"),
                'img' => "fondation/f_30.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_30/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_30/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_30/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 310,
                'title' => "Пирс на винтовых сваях",
                'short_title' => "Купить пирс на винтовых сваях",
                'slug' => Str::slug("Купить пирс на винтовых сваях в [city|pp]"),
                'img' => "fondation/f_31.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_31/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_31/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_31/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 320,
                'title' => "Ангар, склад на винтовых сваях",
                'short_title' => "Купить ангар или склад на сваях",
                'slug' => Str::slug("Купить ангар или склад на сваях в [city|pp]"),
                'img' => "fondation/f_32.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_32/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_32/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_32/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 330,
                'title' => "Мост на винтовых сваях",
                'short_title' => "Купить мост на винтовых сваях",
                'slug' => Str::slug("Купить мост на винтовых сваях в [city|pp]"),
                'img' => "fondation/f_33.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_33/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_33/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_33/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 340,
                'title' => "Свайный фундамент для теплицы",
                'short_title' => "Купить винтовые сваи для теплицы",
                'slug' => Str::slug("Купить винтовые сваи для теплицы в [city|pp]"),
                'img' => "fondation/f_34.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_34/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_34/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_34/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 350,
                'title' => "Cваи для перголы",
                'short_title' => "Купить винтовые сваи для перголы",
                'slug' => Str::slug("Купить винтовые сваи для перголы в [city|pp]"),
                'img' => "fondation/f_35.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_35/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_35/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_35/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 360,
                'title' => "Cваи под лестницу",
                'short_title' => "Купить винтовые сваи под лестницу",
                'slug' => Str::slug("Купить винтовые сваи под лестницу в [city|pp]"),
                'img' => "fondation/f_36.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_36/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_36/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_36/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 370,
                'title' => "Свайный фундамент для автонавеса",
                'short_title' => "Купить винтовые сваи для автонавеса",
                'slug' => Str::slug("Купить винтовые сваи для автонавеса в [city|pp]"),
                'img' => "fondation/f_37.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_37/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_37/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_37/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 380,
                'title' => "Свайный фундамент для настила бассейна",
                'short_title' => "Купить винтовые сваи для настила бассейна",
                'slug' => Str::slug("Купить винтовые сваи для настила бассейна в [city|pp]"),
                'img' => "fondation/f_38.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_38/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_38/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_38/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 390,
                'title' => "Сваи для фонарей",
                'short_title' => "Купить винтовые сваи для фонарей",
                'slug' => Str::slug("Купить винтовые сваи для фонарей в [city|pp]"),
                'img' => "fondation/f_39.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_39/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_39/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_39/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 400,
                'title' => "Сваи для дорожных знаков",
                'short_title' => "Купить винтовые сваи для дорожных знаков",
                'slug' => Str::slug("Купить винтовые сваи для дорожных знаков в [city|pp]"),
                'img' => "fondation/f_40.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_40/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_40/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_40/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 410,
                'title' => "Терраса / веранда на винтовых сваях",
                'short_title' => "Купить терраса / веранда на винтовых сваях",
                'slug' => Str::slug("Купить терраса / веранда на винтовых сваях в [city|pp]"),
                'img' => "fondation/f_41.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_41/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_41/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_41/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 420,
                'title' => "Свайный фундамент для гаража",
                'short_title' => "Купить винтовые сваи под гараж",
                'slug' => Str::slug("Купить винтовые сваи под гараж в [city|pp]"),
                'img' => "fondation/f_42.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_42/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_42/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_42/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 430,
                'title' => "Свайный фундамент под откатные ворота",
                'short_title' => "Купить сваи под откатные ворота",
                'slug' => Str::slug("Купить сваи под откатные ворота в [city|pp]"),
                'img' => "fondation/f_43.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_43/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_43/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_43/price.html')),

            ],
            // [
            //     'order' => 440,
            //     'title' => "Свайный фундамент для эстакады",
            //     'short_title' => "Купить эстакаду на сваях",
            //     'slug' => Str::slug("Купить эстакаду на сваях в [city|pp]"),
            //     'img' => "fondation/f_44.webp",
            //     'icon' => "fondation/home.svg",
            //     'top_description' => file_get_contents(public_path('tmp_data/fond/f_44/top.html')),
            //     'description' => file_get_contents(public_path('tmp_data/fond/f_44/main.html')),
            //     'price' => file_get_contents(public_path('tmp_data/fond/f_44/price.html')),

            // ],
            // [
            //     'order' => 450,
            //     'title' => "Свайный фундамент под дом",
            //     'short_title' => "Купить винтовые сваи под дом",
            //     'slug' => Str::slug("Купить винтовые сваи под дом в [city|pp]"),
            //     'img' => "fondation/f_45.webp",
            //     'icon' => "fondation/home.svg",
            //     'top_description' => file_get_contents(public_path('tmp_data/fond/f_45/top.html')),
            //     'description' => file_get_contents(public_path('tmp_data/fond/f_45/main.html')),
            //     'price' => file_get_contents(public_path('tmp_data/fond/f_45/price.html')),

            // ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 460,
                'title' => "Свайный фундамент под печь",
                'short_title' => "Купить винтовые сваи под печь",
                'slug' => Str::slug("Купить винтовые сваи под печь в [city|pp]"),
                'img' => "fondation/f_46.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_46/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_46/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_46/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 470,
                'title' => "Свайный фундамент для сарая",
                'short_title' => "Купить сарай на винтовых сваях или хозблок",
                'slug' => Str::slug("Купить сарай на винтовых сваях или хозблок в [city|pp]"),
                'img' => "fondation/f_47.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_47/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_47/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_47/price.html')),

            ],
            [
                            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 480,
                'title' => "Цоколь на винтовых сваях",
                'short_title' => "Купить цоколь на винтовых сваях",
                'slug' => Str::slug("Купить цоколь на винтовых сваях в [city|pp]"),
                'img' => "fondation/f_48.webp",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_48/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_48/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_48/price.html')),

            ],
        ];

        $seo_data = [
            [
                'seo_title' => 'Свайный фундамент под ключ — надежное основание для вашего дома',
                'seo_description' => 'Узнайте о преимуществах свайного фундамента под ключ. Быстрое строительство, долговечность и экономия бюджета. Закажите свайный фундамент для любых объектов.'
            ],
            [
                'seo_title' => 'Свайное поле — оптимальное решение для сложных грунтов',
                'seo_description' => 'Свайное поле обеспечивает устойчивость и надежность строения. Подходит для любых типов зданий и сооружений. Профессиональный монтаж свайного поля.'
            ],
            [
                'seo_title' => 'Свайный фундамент под баню — быстро и качественно',
                'seo_description' => 'Идеальный фундамент для бани на винтовых сваях. Быстрый монтаж, минимальные затраты и высокая прочность конструкции.'
            ],
            [
                'seo_title' => 'Свайный фундамент под пристройку — расширьте пространство легко',
                'seo_description' => 'Надежный фундамент для пристроек любого типа. Гарантия качества и долговечности. Экономьте время и средства на строительстве.'
            ],
            [
                'seo_title' => 'Свайный фундамент для легких конструкций — быстрое решение',
                'seo_description' => 'Установка свайного фундамента для легких построек: беседок, навесов, сараев. Прочность и устойчивость по доступной цене.'
            ],
            [
                'seo_title' => 'Свайный фундамент для лестницы — надежная опора',
                'seo_description' => 'Фундамент на сваях для лестниц и крылец. Быстрый монтаж, долговечность и устойчивость конструкции.'
            ],
            [
                'seo_title' => 'Свайный фундамент для каркасного дома — современный подход',
                'seo_description' => 'Винтовые сваи для фундамента каркасного дома. Экономия времени и средств, высокая надежность.'
            ],
            [
                'seo_title' => 'Свайный фундамент для настила на улице — практичное решение',
                'seo_description' => 'Фундамент на сваях для уличных настилов и террас. Быстрый монтаж и долговечность конструкции.'
            ],
            [
                'seo_title' => 'Свайный фундамент для причала — прочность и надежность',
                'seo_description' => 'Винтовые сваи для строительства причалов и пирсов. Устойчивость к влаге и долговечность.'
            ],
            [
                'seo_title' => 'Свайный фундамент для афрейма — идеальное основание',
                'seo_description' => 'Фундамент на сваях для домов типа афрейм. Быстрый монтаж и надежность конструкции.'
            ],
            [
                'seo_title' => 'Защита фундамента от промерзания — сохраните тепло',
                'seo_description' => 'Эффективные решения для защиты свайного фундамента от промерзания. Продлите срок службы основания.'
            ],
            [
                'seo_title' => 'Свайный фундамент на плавуне — решение для сложных грунтов',
                'seo_description' => 'Монтаж свайного фундамента на плывунах и сложных почвах. Гарантия устойчивости и безопасности.'
            ],
            [
                'seo_title' => 'Свайный фундамент для веранды — уют и надежность',
                'seo_description' => 'Винтовые сваи для фундамента веранды. Быстрый монтаж и долговечность конструкции.'
            ],
            [
                'seo_title' => 'Свайный фундамент для щитового дома — прочное основание',
                'seo_description' => 'Фундамент на сваях для щитовых домов. Экономия времени и высокая надежность.'
            ],
            [
                'seo_title' => 'Свайный фундамент для штакетника — долговечный забор',
                'seo_description' => 'Винтовые сваи для установки штакетника. Быстрый монтаж и устойчивость конструкции.'
            ],
            [
                'seo_title' => 'Сваи для гамака — комфорт и безопасность',
                'seo_description' => 'Надежные сваи для установки гамака на участке. Быстрый монтаж и долговечность.'
            ],
            [
                'seo_title' => 'Сваи для качелей — прочная опора для отдыха',
                'seo_description' => 'Винтовые сваи для установки качелей. Безопасность и устойчивость конструкции.'
            ],
            [
                'seo_title' => 'Свайный фундамент для крыльца — надежное основание',
                'seo_description' => 'Фундамент на сваях для крыльца. Быстрый монтаж и долговечность.'
            ],
            [
                'seo_title' => 'Фундамент на сваях 150x150 — для тяжелых конструкций',
                'seo_description' => 'Сваи 150x150 для массивных построек. Прочность и надежность основания.'
            ],
            [
                'seo_title' => 'Редуктор для закручивания свай — профессиональный инструмент',
                'seo_description' => 'Качественный редуктор для монтажа винтовых свай. Удобство и надежность в работе.'
            ],
            [
                'seo_title' => 'Сваекрут — аренда и продажа оборудования',
                'seo_description' => 'Профессиональный сваекрут для монтажа свай. Быстрое и эффективное закручивание.'
            ],
            [
                'seo_title' => 'Висячие сваи и стойки — универсальное решение',
                'seo_description' => 'Висячие сваи и стойки для различных конструкций. Прочность и долговечность.'
            ],
            [
                'seo_title' => 'Забивные столбы для забора — быстро и надежно',
                'seo_description' => 'Забивные столбы для установки забора. Экономия времени и высокая устойчивость.'
            ],
            [
                'seo_title' => 'Свайный фундамент для евроштакетника — современный забор',
                'seo_description' => 'Винтовые сваи для забора из евроштакетника. Быстрый монтаж и долговечность.'
            ],
            [
                'seo_title' => 'Свайный фундамент для дорожек — удобство и надежность',
                'seo_description' => 'Опоры на сваях для садовых и парковых дорожек. Прочность и простота монтажа.'
            ],
            [
                'seo_title' => 'Фундамент на винтовых сваях — универсальное решение',
                'seo_description' => 'Свайный фундамент для любых построек. Быстрый монтаж и долговечность.'
            ],
            [
                'seo_title' => 'Свайный фундамент для ограждения — надежная защита участка',
                'seo_description' => 'Винтовые сваи для ограждений. Прочность и устойчивость конструкции.'
            ],
            [
                'seo_title' => 'Пол на винтовых сваях — быстро и удобно',
                'seo_description' => 'Монтаж пола на винтовых сваях. Экономия времени и высокая надежность.'
            ],
            [
                'seo_title' => 'Сваи для ворот — прочная опора',
                'seo_description' => 'Винтовые сваи для установки ворот. Быстрый монтаж и долговечность.'
            ],
            [
                'seo_title' => 'Сваи для забора — надежное основание',
                'seo_description' => 'Винтовые сваи для забора. Прочность, устойчивость и долговечность.'
            ],
            [
                'seo_title' => 'Пирс на винтовых сваях — долговечная конструкция',
                'seo_description' => 'Строительство пирса на винтовых сваях. Устойчивость к воде и надежность.'
            ],
            [
                'seo_title' => 'Ангар, склад на винтовых сваях — быстрое строительство',
                'seo_description' => 'Фундамент на сваях для ангаров и складов. Прочность и экономия времени.'
            ],
            [
                'seo_title' => 'Мост на винтовых сваях — надежное решение',
                'seo_description' => 'Строительство мостов на винтовых сваях. Прочность и долговечность конструкции.'
            ],
            [
                'seo_title' => 'Свайный фундамент для теплицы — идеальное основание',
                'seo_description' => 'Винтовые сваи для теплиц. Быстрый монтаж и устойчивость.'
            ],
            [
                'seo_title' => 'Сваи для перголы — прочная опора для сада',
                'seo_description' => 'Винтовые сваи для установки перголы. Надежность и долговечность.'
            ],
            [
                'seo_title' => 'Сваи под лестницу — безопасное основание',
                'seo_description' => 'Винтовые сваи для лестниц. Быстрый монтаж и прочность.'
            ],
            [
                'seo_title' => 'Свайный фундамент для автонавеса — защита автомобиля',
                'seo_description' => 'Винтовые сваи для фундамента автонавеса. Прочность и долговечность.'
            ],
            [
                'seo_title' => 'Свайный фундамент для настила бассейна — надежная опора',
                'seo_description' => 'Винтовые сваи для настила бассейна. Быстрый монтаж и устойчивость.'
            ],
            [
                'seo_title' => 'Сваи для фонарей — безопасное освещение',
                'seo_description' => 'Винтовые сваи для установки фонарей. Прочность и долговечность.'
            ],
            [
                'seo_title' => 'Сваи для дорожных знаков — надежная фиксация',
                'seo_description' => 'Винтовые сваи для дорожных знаков. Быстрый монтаж и устойчивость.'
            ],
            [
                'seo_title' => 'Терраса / веранда на винтовых сваях — уют на участке',
                'seo_description' => 'Фундамент на сваях для террас и веранд. Быстрый монтаж и долговечность.'
            ],
            [
                'seo_title' => 'Свайный фундамент для гаража — прочное основание',
                'seo_description' => 'Винтовые сваи для фундамента гаража. Надежность и долговечность.'
            ],
            [
                'seo_title' => 'Свайный фундамент под откатные ворота — удобство и надежность',
                'seo_description' => 'Винтовые сваи для откатных ворот. Быстрый монтаж и прочность.'
            ],
            [
                'seo_title' => 'Свайный фундамент под печь — безопасное основание',
                'seo_description' => 'Винтовые сваи для установки печи. Прочность и долговечность.'
            ],
            [
                'seo_title' => 'Свайный фундамент для сарая — быстро и надежно',
                'seo_description' => 'Винтовые сваи для сарая и хозблока. Быстрый монтаж и устойчивость.'
            ],
            [
                'seo_title' => 'Цоколь на винтовых сваях — долговечное решение',
                'seo_description' => 'Винтовые сваи для цоколя. Прочность и надежность основания.'
            ],
        ];

        DB::table("fondations")->insert($data);

        $i = 0;
        foreach ($data as $item) {
            DB::table("seo_data")->insert(
                [
                    'url' => 'fondations/'.$item['slug'],
                    'seo_title' => $seo_data[$i]['seo_title'],
                    'seo_description' => $seo_data[$i]['seo_description'],
                ]
            );
            $i++;
        }

    }
}
