<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Support\Carbon;
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
        Storage::disk('public')->put("products/57 мм.webp", file_get_contents(public_path('tmp_data/prod/57 мм.webp')), 'public');
        Storage::disk('public')->put("products/60 мм.webp", file_get_contents(public_path('tmp_data/prod/60 мм.webp')), 'public');
        Storage::disk('public')->put("products/73 мм.webp", file_get_contents(public_path('tmp_data/prod/73 мм.webp')), 'public');
        Storage::disk('public')->put("products/76 мм.webp", file_get_contents(public_path('tmp_data/prod/76 мм.webp')), 'public');
        Storage::disk('public')->put("products/89 мм.webp", file_get_contents(public_path('tmp_data/prod/89 мм.webp')), 'public');
        Storage::disk('public')->put("products/102 мм.webp", file_get_contents(public_path('tmp_data/prod/102 мм.webp')), 'public');
        Storage::disk('public')->put("products/108 мм.webp", file_get_contents(public_path('tmp_data/prod/108 мм.webp')), 'public');
        Storage::disk('public')->put("products/133 мм.webp", file_get_contents(public_path('tmp_data/prod/133 мм.webp')), 'public');
        Storage::disk('public')->put("products/159 мм.webp", file_get_contents(public_path('tmp_data/prod/159 мм.webp')), 'public');
        Storage::disk('public')->put("products/219 мм.webp", file_get_contents(public_path('tmp_data/prod/219 мм.webp')), 'public');
        Storage::disk('public')->put("products/325 мм.webp", file_get_contents(public_path('tmp_data/prod/325 мм.webp')), 'public');
        Storage::disk('public')->put("products/product_12.webp", file_get_contents(public_path('tmp_data/prod/product_12.webp')), 'public');
        Storage::disk('public')->put("products/product_13.webp", file_get_contents(public_path('tmp_data/prod/product_13.webp')), 'public');
        Storage::disk('public')->put("products/product_14.webp", file_get_contents(public_path('tmp_data/prod/product_14.webp')), 'public');
        Storage::disk('public')->put("products/kvadrat.webp", file_get_contents(public_path('tmp_data/prod/kvadrat.webp')), 'public');
        Storage::disk('public')->put("products/kombinirovanie.webp", file_get_contents(public_path('tmp_data/prod/kombinirovanie.webp')), 'public');
        Storage::disk('public')->put("products/product_17.webp", file_get_contents(public_path('tmp_data/prod/product_17.webp')), 'public');
        Storage::disk('public')->put("products/zelezobetonie.webp", file_get_contents(public_path('tmp_data/prod/zelezobetonie.webp')), 'public');
        Storage::disk('public')->put("products/mnogolopostnie.webp", file_get_contents(public_path('tmp_data/prod/mnogolopostnie.webp')), 'public');
        Storage::disk('public')->put("products/product_20.webp", file_get_contents(public_path('tmp_data/prod/product_20.webp')), 'public');
        Storage::disk('public')->put("products/shurupnie.webp", file_get_contents(public_path('tmp_data/prod/shurupnie.webp')), 'public');
        Storage::disk('public')->put("products/product_22.webp", file_get_contents(public_path('tmp_data/prod/product_22.webp')), 'public');
        Storage::disk('public')->put("products/derevynie.webp", file_get_contents(public_path('tmp_data/prod/derevynie.webp')), 'public');
        Storage::disk('public')->put("products/centrofugirovanie.webp", file_get_contents(public_path('tmp_data/prod/centrofugirovanie.webp')), 'public');
        Storage::disk('public')->put("products/celnie.webp", file_get_contents(public_path('tmp_data/prod/celnie.webp')), 'public');
        Storage::disk('public')->put("products/besedka.webp", file_get_contents(public_path('tmp_data/prod/besedka.webp')), 'public');
        Storage::disk('public')->put("products/yakornaya.webp", file_get_contents(public_path('tmp_data/prod/yakornaya.webp')), 'public');
        Storage::disk('public')->put("products/minisvaya.webp", file_get_contents(public_path('tmp_data/prod/minisvaya.webp')), 'public');
        Storage::disk('public')->put("products/pomost.webp", file_get_contents(public_path('tmp_data/prod/pomost.webp')), 'public');
        Storage::disk('public')->put("products/teplica.webp", file_get_contents(public_path('tmp_data/prod/teplica.webp')), 'public');
        $data = [
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Винтовые сваи 57 мм купить в [city|pp]",
                'short_title' => "Винтовые сваи 57 мм",
                'slug' => Str::slug("Винтовые сваи 57 мм купить в [city|pp]"),
                'img' => "products/57 мм.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_1/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_1/main.html')),
                'price' =>  file_get_contents(public_path('tmp_data/prod/pr_1/price.html')),
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Винтовые сваи 60 мм в [city|pp]",
                'short_title' => "Винтовые сваи 60 мм",
                'slug' => Str::slug("Винтовые сваи 60 мм в [city|pp]"),
                'img' => "products/60 мм.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_2/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_2/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_2/price.html')),
            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Винтовые сваи 73 мм в [city|pp]",
                'short_title' => "Винтовые сваи 73 мм",
                'slug' => Str::slug("Винтовые сваи 73 мм в [city|pp]"),
                'img' => "products/73 мм.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_3/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_3/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_3/price.html')),
            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Винтовые сваи 76 мм в [city|pp]",
                'short_title' => "Винтовые сваи 76 мм",
                'slug' => Str::slug("Винтовые сваи 76 мм в [city|pp]"),
                'img' => "products/76 мм.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_4/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_4/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_4/price.html')),
            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Винтовые сваи 89 мм в [city|pp]",
                'short_title' => "Винтовые сваи 89 мм",
                'slug' => Str::slug("Винтовые сваи 89 мм в [city|pp]"),
                'img' => "products/89 мм.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_5/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_5/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_5/price.html')),
            ],

            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Винтовые сваи 102 мм в [city|pp]",
                'short_title' => "Винтовые сваи 102 мм",
                'slug' => Str::slug("Винтовые сваи 102 мм в [city|pp]"),
                'img' => "products/102 мм.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_6/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_6/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_6/price.html')),
            ],

            [ //7
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Винтовые сваи 108 мм в [city|pp]",
                'short_title' => "Винтовые сваи 108 мм",
                'slug' => Str::slug("Винтовые сваи 108 мм в [city|pp]"),
                'img' => "products/108 мм.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_7/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_7/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_7/price.html')),
            ],

            [//8
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Винтовые сваи 133 мм в [city|pp]",
                'short_title' => "Винтовые сваи 133 мм",
                'slug' => Str::slug("Винтовые сваи 133 мм в [city|pp]"),
                'img' => "products/133 мм.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_8/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_8/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_8/price.html')),
            ],
            [//9
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Винтовые сваи 159 мм в [city|pp]",
                'short_title' => "Винтовые сваи 159 мм",
                'slug' => Str::slug("Винтовые сваи 159 мм в [city|pp]"),
                'img' => "products/159 мм.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_9/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_9/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_9/price.html')),
            ],
            [//10
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Винтовые сваи 219 мм в [city|pp]",
                'short_title' => "Винтовые сваи 219 мм",
                'slug' => Str::slug("Винтовые сваи 219 мм в [city|pp]"),
                'img' => "products/219 мм.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_10/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_10/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_10/price.html')),
            ],
            [//11
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Винтовые сваи 325 мм в [city|pp]",
                'short_title' => "Винтовые сваи 325 мм",
                'slug' => Str::slug("Винтовые сваи 325 мм в [city|pp]"),
                'img' => "products/325 мм.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_11/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_11/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_11/price.html')),
            ],
            [//13
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Винтовые сваи с усиленной лопастью 8 мм в [city|pp]",
                'short_title' => "Винтовые сваи с усиленной лопастью 8 мм",
                'slug' => Str::slug("Винтовые сваи с усиленной лопастью 8 мм в [city|pp]"),
                'img' => "products/product_13.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_13/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_13/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_13/price.html')),
            ],
            [//14
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Промышленные опоры из нержавеющей стали в [city|pp]",
                'short_title' => "Промышленные опоры из нержавеющей стали",
                'slug' => Str::slug("Промышленные опоры из нержавеющей стали в [city|pp]"),
                'img' => "products/product_14.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_14/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_14/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_14/price.html')),
            ],
            [//15
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Квадратные винтовые сваи в [city|pp]",
                'short_title' => "Квадратные винтовые сваи",
                'slug' => Str::slug("Квадратные винтовые сваи в [city|pp]"),
                'img' => "products/kvadrat.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_15/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_15/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_15/price.html')),
            ],
            [//16
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Комбинированные сваи для заборов в [city|pp]",
                'short_title' => "Комбинированные сваи для заборов",
                'slug' => Str::slug("Комбинированные сваи для заборов в [city|pp]"),
                'img' => "products/kombinirovanie.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_16/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_16/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_16/price.html')),
            ],
            [//17
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Буронабивные сваи в [city|pp]",
                'short_title' => "Буронабивные сваи",
                'slug' => Str::slug("Буронабивные сваи в [city|pp]"),
                'img' => "products/product_17.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_17/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_17/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_17/price.html')),
            ],
            [//18
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Опоры железобетонные в [city|pp]",
                'short_title' => "Опоры железобетонные",
                'slug' => Str::slug("Опоры железобетонные в [city|pp]"),
                'img' => "products/zelezobetonie.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_18/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_18/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_18/price.html')),
            ],
            [//19
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Многолопастные Сваи в [city|pp]",
                'short_title' => "Многолопастные Сваи",
                'slug' => Str::slug("Многолопастные Сваи в [city|pp]"),
                'img' => "products/mnogolopostnie.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_19/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_19/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_19/price.html')),
            ],
            [//20
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Сваи винтовые 150*150*3000 в [city|pp]",
                'short_title' => "Сваи винтовые 150*150*3000",
                'slug' => Str::slug("Сваи винтовые 150*150*3000 в [city|pp]"),
                'img' => "products/product_20.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_20/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_20/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_20/price.html')),
            ],
            [//21
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Шурупные сваи в [city|pp]",
                'short_title' => "Шурупные сваи",
                'slug' => Str::slug("Шурупные сваи в [city|pp]"),
                'img' => "products/shurupnie.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_21/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_21/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_21/price.html')),
            ],
            [//22
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Наклонные сваи в [city|pp]",
                'short_title' => "Наклонные сваи",
                'slug' => Str::slug("Наклонные сваи в [city|pp]"),
                'img' => "products/product_22.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_22/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_22/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_22/price.html')),
            ],
            [//23
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Деревянные сваи в [city|pp]",
                'short_title' => "Деревянные сваи",
                'slug' => Str::slug("Деревянные сваи в [city|pp]"),
                'img' => "products/derevynie.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_23/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_23/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_23/price.html')),
            ],
            [//24
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Сваи центрифугированные в [city|pp]",
                'short_title' => "Сваи центрифугированные",
                'slug' => Str::slug("Сваи центрифугированные в [city|pp]"),
                'img' => "products/centrofugirovanie.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_24/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_24/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_24/price.html')),
            ],
            [//25
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Сваи цельные в [city|pp]",
                'short_title' => "Сваи цельные",
                'slug' => Str::slug("Сваи цельные в [city|pp]"),
                'img' => "products/celnie.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_25/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_25/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_25/price.html')),
            ],
            [//26
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Сваи для беседки в [city|pp]",
                'short_title' => "Сваи для беседки",
                'slug' => Str::slug("Сваи для беседки в [city|pp]"),
                'img' => "products/besedka.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_26/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_26/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_26/price.html')),
            ],
            [//27
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Якорные сваи в [city|pp]",
                'short_title' => "Якорные сваи",
                'slug' => Str::slug("Якорные сваи в [city|pp]"),
                'img' => "products/yakornaya.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_27/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_27/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_27/price.html')),
            ],
            [//28
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Мини сваи в [city|pp]",
                'short_title' => "Мини сваи",
                'slug' => Str::slug("Мини сваи в [city|pp]"),
                'img' => "products/minisvaya.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_28/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_28/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_28/price.html')),
            ],
            [//29
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Сваи для помоста в [city|pp]",
                'short_title' => "Сваи для помоста",
                'slug' => Str::slug("Сваи для помоста в [city|pp]"),
                'img' => "products/pomost.webp",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_29/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_29/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_29/price.html')),
            ],
            [//30
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'title' => "Сваи для парника в [city|pp]",
                'short_title' => "Сваи для парника",
                'slug' => Str::slug("Сваи для парника в [city|pp]"),
                'img' => "products/teplica.webp",
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
