<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("products/57 мм.png", file_get_contents(public_path('tmp_data/prod/57 мм.png')), 'public');
        Storage::disk('public')->put("products/60 мм.png", file_get_contents(public_path('tmp_data/prod/60 мм.png')), 'public');
        Storage::disk('public')->put("products/73 мм.png", file_get_contents(public_path('tmp_data/prod/73 мм.png')), 'public');
        Storage::disk('public')->put("products/76 мм.png", file_get_contents(public_path('tmp_data/prod/76 мм.png')), 'public');
        Storage::disk('public')->put("products/89 мм.png", file_get_contents(public_path('tmp_data/prod/89 мм.png')), 'public');
        Storage::disk('public')->put("products/102 мм.png", file_get_contents(public_path('tmp_data/prod/102 мм.png')), 'public');
        Storage::disk('public')->put("products/108 мм.png", file_get_contents(public_path('tmp_data/prod/108 мм.png')), 'public');
        Storage::disk('public')->put("products/133 мм.png", file_get_contents(public_path('tmp_data/prod/133 мм.png')), 'public');
        Storage::disk('public')->put("products/159 мм.png", file_get_contents(public_path('tmp_data/prod/159 мм.png')), 'public');
        Storage::disk('public')->put("products/219 мм.png", file_get_contents(public_path('tmp_data/prod/219 мм.png')), 'public');
        Storage::disk('public')->put("products/325 мм.png", file_get_contents(public_path('tmp_data/prod/325 мм.png')), 'public');
        Storage::disk('public')->put("products/product_12.jpg", file_get_contents(public_path('tmp_data/prod/product_12.jpg')), 'public');
        Storage::disk('public')->put("products/product_13.jpg", file_get_contents(public_path('tmp_data/prod/product_13.jpg')), 'public');
        Storage::disk('public')->put("products/product_14.jpg", file_get_contents(public_path('tmp_data/prod/product_14.jpg')), 'public');
        Storage::disk('public')->put("products/kvadrat.png", file_get_contents(public_path('tmp_data/prod/kvadrat.png')), 'public');
        Storage::disk('public')->put("products/kombinirovanie.png", file_get_contents(public_path('tmp_data/prod/kombinirovanie.png')), 'public');
        Storage::disk('public')->put("products/product_17.jpg", file_get_contents(public_path('tmp_data/prod/product_17.jpg')), 'public');
        Storage::disk('public')->put("products/zelezobetonie.png", file_get_contents(public_path('tmp_data/prod/zelezobetonie.png')), 'public');
        Storage::disk('public')->put("products/mnogolopostnie.png", file_get_contents(public_path('tmp_data/prod/mnogolopostnie.png')), 'public');
        Storage::disk('public')->put("products/product_20.jpg", file_get_contents(public_path('tmp_data/prod/product_20.jpg')), 'public');
        Storage::disk('public')->put("products/shurupnie.png", file_get_contents(public_path('tmp_data/prod/shurupnie.png')), 'public');
        Storage::disk('public')->put("products/product_22.jpg", file_get_contents(public_path('tmp_data/prod/product_22.jpg')), 'public');
        Storage::disk('public')->put("products/derevynie.png", file_get_contents(public_path('tmp_data/prod/derevynie.png')), 'public');
        Storage::disk('public')->put("products/centrofugirovanie.png", file_get_contents(public_path('tmp_data/prod/centrofugirovanie.png')), 'public');
        Storage::disk('public')->put("products/celnie.png", file_get_contents(public_path('tmp_data/prod/celnie.png')), 'public');
        Storage::disk('public')->put("products/besedka.png", file_get_contents(public_path('tmp_data/prod/besedka.png')), 'public');
        Storage::disk('public')->put("products/yakornaya.png", file_get_contents(public_path('tmp_data/prod/yakornaya.png')), 'public');
        Storage::disk('public')->put("products/minisvaya.png", file_get_contents(public_path('tmp_data/prod/minisvaya.png')), 'public');
        Storage::disk('public')->put("products/pomost.png", file_get_contents(public_path('tmp_data/prod/pomost.png')), 'public');
        Storage::disk('public')->put("products/teplica.png", file_get_contents(public_path('tmp_data/prod/teplica.png')), 'public');
        $data = [
            [
                'title' => "Винтовые сваи 57 мм купить в [city|pp]",
                'short_title' => "Винтовые сваи 57 мм",
                'slug' => Str::slug("Винтовые сваи 57 мм купить в [city|pp]"),
                'img' => "products/57 мм.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_1/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_1/main.html')),
                'price' =>  file_get_contents(public_path('tmp_data/prod/pr_1/price.html')),
            ],
            [
                'title' => "Винтовые сваи 60 мм в [city|pp]",
                'short_title' => "Винтовые сваи 60 мм",
                'slug' => Str::slug("Винтовые сваи 60 мм в [city|pp]"),
                'img' => "products/60 мм.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_2/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_2/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_2/price.html')),
            ],
            [
                'title' => "Винтовые сваи 73 мм в [city|pp]",
                'short_title' => "Винтовые сваи 73 мм",
                'slug' => Str::slug("Винтовые сваи 73 мм в [city|pp]"),
                'img' => "products/73 мм.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_3/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_3/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_3/price.html')),
            ],
            [
                'title' => "Винтовые сваи 76 мм в [city|pp]",
                'short_title' => "Винтовые сваи 76 мм",
                'slug' => Str::slug("Винтовые сваи 76 мм в [city|pp]"),
                'img' => "products/76 мм.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_4/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_4/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_4/price.html')),
            ],
            [
                'title' => "Винтовые сваи 89 мм в [city|pp]",
                'short_title' => "Винтовые сваи 89 мм",
                'slug' => Str::slug("Винтовые сваи 89 мм в [city|pp]"),
                'img' => "products/89 мм.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_5/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_5/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_5/price.html')),
            ],

            [
                'title' => "Винтовые сваи 102 мм в [city|pp]",
                'short_title' => "Винтовые сваи 102 мм",
                'slug' => Str::slug("Винтовые сваи 102 мм в [city|pp]"),
                'img' => "products/102 мм.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_6/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_6/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_6/price.html')),
            ],

            [ //7
                'title' => "Винтовые сваи 108 мм в [city|pp]",
                'short_title' => "Винтовые сваи 108 мм",
                'slug' => Str::slug("Винтовые сваи 108 мм в [city|pp]"),
                'img' => "products/108 мм.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_7/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_7/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_7/price.html')),
            ],

            [//8
                'title' => "Винтовые сваи 133 мм в [city|pp]",
                'short_title' => "Винтовые сваи 133 мм",
                'slug' => Str::slug("Винтовые сваи 133 мм в [city|pp]"),
                'img' => "products/133 мм.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_8/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_8/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_8/price.html')),
            ],
            [//9
                'title' => "Винтовые сваи 159 мм в [city|pp]",
                'short_title' => "Винтовые сваи 159 мм",
                'slug' => Str::slug("Винтовые сваи 159 мм в [city|pp]"),
                'img' => "products/159 мм.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_9/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_9/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_9/price.html')),
            ],
            [//10
                'title' => "Винтовые сваи 219 мм в [city|pp]",
                'short_title' => "Винтовые сваи 219 мм",
                'slug' => Str::slug("Винтовые сваи 219 мм в [city|pp]"),
                'img' => "products/219 мм.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_10/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_10/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_10/price.html')),
            ],
            [//11
                'title' => "Винтовые сваи 325 мм в [city|pp]",
                'short_title' => "Винтовые сваи 325 мм",
                'slug' => Str::slug("Винтовые сваи 325 мм в [city|pp]"),
                'img' => "products/325 мм.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_11/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_11/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_11/price.html')),
            ],
            [//13
                'title' => "Винтовые сваи с усиленной лопастью 8 мм в [city|pp]",
                'short_title' => "Винтовые сваи с усиленной лопастью 8 мм",
                'slug' => Str::slug("Винтовые сваи с усиленной лопастью 8 мм в [city|pp]"),
                'img' => "products/product_13.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_13/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_13/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_13/price.html')),
            ],
            [//14
                'title' => "Промышленные опоры из нержавеющей стали в [city|pp]",
                'short_title' => "Промышленные опоры из нержавеющей стали",
                'slug' => Str::slug("Промышленные опоры из нержавеющей стали в [city|pp]"),
                'img' => "products/product_14.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_14/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_14/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_14/price.html')),
            ],
            [//15
                'title' => "Квадратные винтовые сваи в [city|pp]",
                'short_title' => "Квадратные винтовые сваи",
                'slug' => Str::slug("Квадратные винтовые сваи в [city|pp]"),
                'img' => "products/kvadrat.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_15/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_15/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_15/price.html')),
            ],
            [//16
                'title' => "Комбинированные сваи для заборов в [city|pp]",
                'short_title' => "Комбинированные сваи для заборов",
                'slug' => Str::slug("Комбинированные сваи для заборов в [city|pp]"),
                'img' => "products/kombinirovanie.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_16/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_16/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_16/price.html')),
            ],
            [//17
                'title' => "Буронабивные сваи в [city|pp]",
                'short_title' => "Буронабивные сваи",
                'slug' => Str::slug("Буронабивные сваи в [city|pp]"),
                'img' => "products/product_17.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_17/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_17/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_17/price.html')),
            ],
            [//18
                'title' => "Опоры железобетонные в [city|pp]",
                'short_title' => "Опоры железобетонные",
                'slug' => Str::slug("Опоры железобетонные в [city|pp]"),
                'img' => "products/zelezobetonie.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_18/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_18/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_18/price.html')),
            ],
            [//19
                'title' => "Многолопастные Сваи в [city|pp]",
                'short_title' => "Многолопастные Сваи",
                'slug' => Str::slug("Многолопастные Сваи в [city|pp]"),
                'img' => "products/mnogolopostnie.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_19/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_19/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_19/price.html')),
            ],
            [//20
                'title' => "Сваи винтовые 150*150*3000 в [city|pp]",
                'short_title' => "Сваи винтовые 150*150*3000",
                'slug' => Str::slug("Сваи винтовые 150*150*3000 в [city|pp]"),
                'img' => "products/product_20.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_20/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_20/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_20/price.html')),
            ],
            [//21
                'title' => "Шурупные сваи в [city|pp]",
                'short_title' => "Шурупные сваи",
                'slug' => Str::slug("Шурупные сваи в [city|pp]"),
                'img' => "products/shurupnie.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_21/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_21/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_21/price.html')),
            ],
            [//22
                'title' => "Наклонные сваи в [city|pp]",
                'short_title' => "Наклонные сваи",
                'slug' => Str::slug("Наклонные сваи в [city|pp]"),
                'img' => "products/product_22.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_22/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_22/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_22/price.html')),
            ],
            [//23
                'title' => "Деревянные сваи в [city|pp]",
                'short_title' => "Деревянные сваи",
                'slug' => Str::slug("Деревянные сваи в [city|pp]"),
                'img' => "products/derevynie.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_23/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_23/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_23/price.html')),
            ],
            [//24
                'title' => "Сваи центрифугированные в [city|pp]",
                'short_title' => "Сваи центрифугированные",
                'slug' => Str::slug("Сваи центрифугированные в [city|pp]"),
                'img' => "products/centrofugirovanie.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_24/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_24/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_24/price.html')),
            ],
            [//25
                'title' => "Сваи цельные в [city|pp]",
                'short_title' => "Сваи цельные",
                'slug' => Str::slug("Сваи цельные в [city|pp]"),
                'img' => "products/celnie.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_25/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_25/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_25/price.html')),
            ],
            [//26
                'title' => "Сваи для беседки в [city|pp]",
                'short_title' => "Сваи для беседки",
                'slug' => Str::slug("Сваи для беседки в [city|pp]"),
                'img' => "products/besedka.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_26/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_26/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_26/price.html')),
            ],
            [//27
                'title' => "Якорные сваи в [city|pp]",
                'short_title' => "Якорные сваи",
                'slug' => Str::slug("Якорные сваи в [city|pp]"),
                'img' => "products/yakornaya.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_27/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_27/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_27/price.html')),
            ],
            [//28
                'title' => "Мини сваи в [city|pp]",
                'short_title' => "Мини сваи",
                'slug' => Str::slug("Мини сваи в [city|pp]"),
                'img' => "products/minisvaya.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_28/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_28/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_28/price.html')),
            ],
            [//29
                'title' => "Сваи для помоста в [city|pp]",
                'short_title' => "Сваи для помоста",
                'slug' => Str::slug("Сваи для помоста в [city|pp]"),
                'img' => "products/pomost.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_29/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_29/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_29/price.html')),
            ],
            [//30
                'title' => "Сваи для парника в [city|pp]",
                'short_title' => "Сваи для парника",
                'slug' => Str::slug("Сваи для парника в [city|pp]"),
                'img' => "products/teplica.png",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_30/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_30/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_30/price.html')),
            ],


        ];

        DB::table("products")->insert($data);

        foreach ($data as $item) {
            DB::table("seo_data")->insert(
                [
                    'url' => 'products/'.$item['slug'],
                    'seo_title' => $item['title'],
                    'seo_description' => $item['title'],
                ]
            );
        }
    }
}
