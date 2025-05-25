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
        Storage::disk('public')->put("products/product_1.jpg", file_get_contents(public_path('tmp_data/prod/product_1.jpg')), 'public');
        Storage::disk('public')->put("products/product_2.jpg", file_get_contents(public_path('tmp_data/prod/product_2.jpg')), 'public');
        Storage::disk('public')->put("products/product_3.jpg", file_get_contents(public_path('tmp_data/prod/product_3.jpg')), 'public');
        Storage::disk('public')->put("products/product_4.jpg", file_get_contents(public_path('tmp_data/prod/product_4.jpg')), 'public');
        Storage::disk('public')->put("products/product_5.jpg", file_get_contents(public_path('tmp_data/prod/product_5.jpg')), 'public');
        Storage::disk('public')->put("products/product_6.jpg", file_get_contents(public_path('tmp_data/prod/product_6.jpg')), 'public');
        Storage::disk('public')->put("products/product_7.jpg", file_get_contents(public_path('tmp_data/prod/product_7.jpg')), 'public');
        Storage::disk('public')->put("products/product_8.jpg", file_get_contents(public_path('tmp_data/prod/product_8.jpg')), 'public');
        Storage::disk('public')->put("products/product_9.jpg", file_get_contents(public_path('tmp_data/prod/product_9.jpg')), 'public');
        Storage::disk('public')->put("products/product_10.jpg", file_get_contents(public_path('tmp_data/prod/product_10.jpg')), 'public');
        Storage::disk('public')->put("products/product_11.jpg", file_get_contents(public_path('tmp_data/prod/product_11.jpg')), 'public');
        Storage::disk('public')->put("products/product_12.jpg", file_get_contents(public_path('tmp_data/prod/product_12.jpg')), 'public');
        Storage::disk('public')->put("products/product_13.jpg", file_get_contents(public_path('tmp_data/prod/product_13.jpg')), 'public');
        Storage::disk('public')->put("products/product_14.jpg", file_get_contents(public_path('tmp_data/prod/product_14.jpg')), 'public');
        Storage::disk('public')->put("products/product_15.jpg", file_get_contents(public_path('tmp_data/prod/product_15.jpg')), 'public');
        Storage::disk('public')->put("products/product_16.jpg", file_get_contents(public_path('tmp_data/prod/product_16.jpg')), 'public');
        Storage::disk('public')->put("products/product_17.jpg", file_get_contents(public_path('tmp_data/prod/product_17.jpg')), 'public');
        Storage::disk('public')->put("products/product_18.jpg", file_get_contents(public_path('tmp_data/prod/product_18.jpg')), 'public');
        Storage::disk('public')->put("products/product_19.jpg", file_get_contents(public_path('tmp_data/prod/product_19.jpg')), 'public');
        Storage::disk('public')->put("products/product_20.jpg", file_get_contents(public_path('tmp_data/prod/product_20.jpg')), 'public');
        Storage::disk('public')->put("products/product_21.jpg", file_get_contents(public_path('tmp_data/prod/product_21.jpg')), 'public');
        Storage::disk('public')->put("products/product_22.jpg", file_get_contents(public_path('tmp_data/prod/product_22.jpg')), 'public');
        Storage::disk('public')->put("products/product_23.jpg", file_get_contents(public_path('tmp_data/prod/product_23.jpg')), 'public');
        Storage::disk('public')->put("products/product_24.jpg", file_get_contents(public_path('tmp_data/prod/product_24.jpg')), 'public');
        Storage::disk('public')->put("products/product_25.jpg", file_get_contents(public_path('tmp_data/prod/product_25.jpg')), 'public');
        Storage::disk('public')->put("products/product_26.jpg", file_get_contents(public_path('tmp_data/prod/product_26.jpg')), 'public');
        Storage::disk('public')->put("products/product_27.jpg", file_get_contents(public_path('tmp_data/prod/product_27.jpg')), 'public');
        Storage::disk('public')->put("products/product_28.jpg", file_get_contents(public_path('tmp_data/prod/product_28.jpg')), 'public');
        Storage::disk('public')->put("products/product_29.jpg", file_get_contents(public_path('tmp_data/prod/product_29.jpg')), 'public');
        Storage::disk('public')->put("products/product_30.jpg", file_get_contents(public_path('tmp_data/prod/product_30.jpg')), 'public');
        $data = [
            [
                'title' => "Винтовые сваи 57 мм купить в [city|pp]",
                'short_title' => "Винтовые сваи 57 мм",
                'slug' => Str::slug("Винтовые сваи 57 мм купить в [city|pp]"),
                'img' => "products/product_1.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_1/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_1/main.html')),
                'price' =>  file_get_contents(public_path('tmp_data/prod/pr_1/price.html')),
            ],
            [
                'title' => "Винтовые сваи 60 мм в [city|pp]",
                'short_title' => "Винтовые сваи 60 мм",
                'slug' => Str::slug("Винтовые сваи 60 мм в [city|pp]"),
                'img' => "products/product_2.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_2/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_2/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_2/price.html')),
            ],
            [
                'title' => "Винтовые сваи 73 мм в [city|pp]",
                'short_title' => "Винтовые сваи 73 мм",
                'slug' => Str::slug("Винтовые сваи 73 мм в [city|pp]"),
                'img' => "products/product_3.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_3/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_3/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_3/price.html')),
            ],
            [
                'title' => "Винтовые сваи 76 мм в [city|pp]",
                'short_title' => "Винтовые сваи 76 мм",
                'slug' => Str::slug("Винтовые сваи 76 мм в [city|pp]"),
                'img' => "products/product_4.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_4/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_4/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_4/price.html')),
            ],
            [
                'title' => "Винтовые сваи 89 мм в [city|pp]",
                'short_title' => "Винтовые сваи 89 мм",
                'slug' => Str::slug("Винтовые сваи 89 мм в [city|pp]"),
                'img' => "products/product_5.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_5/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_5/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_5/price.html')),
            ],
            [
                'title' => "Винтовые сваи 102 мм в [city|pp]",
                'short_title' => "Винтовые сваи 102 мм",
                'slug' => Str::slug("Винтовые сваи 102 мм в [city|pp]"),
                'img' => "products/product_6.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_6/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_6/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_6/price.html')),
            ],
            [
                'title' => "Винтовые сваи 108 мм в [city|pp]",
                'short_title' => "Винтовые сваи 108 мм",
                'slug' => Str::slug("Винтовые сваи 108 мм в [city|pp]"),
                'img' => "products/product_7.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_7/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_7/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_7/price.html')),
            ],
            [
                'title' => "Винтовые сваи 133 мм в [city|pp]",
                'short_title' => "Винтовые сваи 133 мм",
                'slug' => Str::slug("Винтовые сваи 133 мм в [city|pp]"),
                'img' => "products/product_8.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_8/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_8/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_8/price.html')),
            ],
            [
                'title' => "Винтовые сваи 159 мм в [city|pp]",
                'short_title' => "Винтовые сваи 159 мм",
                'slug' => Str::slug("Винтовые сваи 159 мм в [city|pp]"),
                'img' => "products/product_9.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_9/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_9/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_9/price.html')),
            ],
            [
                'title' => "Винтовые сваи 219 мм в [city|pp]",
                'short_title' => "Винтовые сваи 219 мм",
                'slug' => Str::slug("Винтовые сваи 219 мм в [city|pp]"),
                'img' => "products/product_10.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_10/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_10/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_10/price.html')),
            ],
            [
                'title' => "Винтовые сваи 325 мм в [city|pp]",
                'short_title' => "Винтовые сваи 325 мм",
                'slug' => Str::slug("Винтовые сваи 325 мм в [city|pp]"),
                'img' => "products/product_11.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_11/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_11/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_11/price.html')),
            ],
            [
                'title' => "Винтовые сваи с усиленной лопастью 8 мм в [city|pp]",
                'short_title' => "Винтовые сваи с усиленной лопастью 8 мм",
                'slug' => Str::slug("Винтовые сваи с усиленной лопастью 8 мм в [city|pp]"),
                'img' => "products/product_13.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_13/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_13/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_13/price.html')),
            ],
            [
                'title' => "Промышленные опоры из нержавеющей стали в [city|pp]",
                'short_title' => "Промышленные опоры из нержавеющей стали",
                'slug' => Str::slug("Промышленные опоры из нержавеющей стали в [city|pp]"),
                'img' => "products/product_14.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_14/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_14/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_14/price.html')),
            ],
            [
                'title' => "Квадратные винтовые сваи в [city|pp]",
                'short_title' => "Квадратные винтовые сваи",
                'slug' => Str::slug("Квадратные винтовые сваи в [city|pp]"),
                'img' => "products/product_15.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_15/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_15/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_15/price.html')),
            ],
            [
                'title' => "Комбинированные сваи для заборов в [city|pp]",
                'short_title' => "Комбинированные сваи для заборов",
                'slug' => Str::slug("Комбинированные сваи для заборов в [city|pp]"),
                'img' => "products/product_16.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_16/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_16/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_16/price.html')),
            ],
            [
                'title' => "Буронабивные сваи в [city|pp]",
                'short_title' => "Буронабивные сваи",
                'slug' => Str::slug("Буронабивные сваи в [city|pp]"),
                'img' => "products/product_17.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_17/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_17/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_17/price.html')),
            ],
            [
                'title' => "Опоры железобетонные в [city|pp]",
                'short_title' => "Опоры железобетонные",
                'slug' => Str::slug("Опоры железобетонные в [city|pp]"),
                'img' => "products/product_18.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_18/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_18/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_18/price.html')),
            ],
            [
                'title' => "Многолопастные Сваи в [city|pp]",
                'short_title' => "Многолопастные Сваи",
                'slug' => Str::slug("Многолопастные Сваи в [city|pp]"),
                'img' => "products/product_19.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_19/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_19/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_19/price.html')),
            ],
            [
                'title' => "Сваи винтовые 150*150*3000 в [city|pp]",
                'short_title' => "Сваи винтовые 150*150*3000",
                'slug' => Str::slug("Сваи винтовые 150*150*3000 в [city|pp]"),
                'img' => "products/product_20.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_20/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_20/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_20/price.html')),
            ],
            [
                'title' => "Шурупные сваи в [city|pp]",
                'short_title' => "Шурупные сваи",
                'slug' => Str::slug("Шурупные сваи в [city|pp]"),
                'img' => "products/product_21.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_21/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_21/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_21/price.html')),
            ],
            [
                'title' => "Наклонные сваи в [city|pp]",
                'short_title' => "Наклонные сваи",
                'slug' => Str::slug("Наклонные сваи в [city|pp]"),
                'img' => "products/product_22.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_22/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_22/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_22/price.html')),
            ],
            [
                'title' => "Деревянные сваи в [city|pp]",
                'short_title' => "Деревянные сваи",
                'slug' => Str::slug("Деревянные сваи в [city|pp]"),
                'img' => "products/product_23.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_23/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_23/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_23/price.html')),
            ],
            [
                'title' => "Сваи центрифугированные в [city|pp]",
                'short_title' => "Сваи центрифугированные",
                'slug' => Str::slug("Сваи центрифугированные в [city|pp]"),
                'img' => "products/product_24.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_24/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_24/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_24/price.html')),
            ],
            [
                'title' => "Сваи цельные в [city|pp]",
                'short_title' => "Сваи цельные",
                'slug' => Str::slug("Сваи цельные в [city|pp]"),
                'img' => "products/product_25.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_25/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_25/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_25/price.html')),
            ],
            [
                'title' => "Сваи для беседки в [city|pp]",
                'short_title' => "Сваи для беседки",
                'slug' => Str::slug("Сваи для беседки в [city|pp]"),
                'img' => "products/product_26.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_26/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_26/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_26/price.html')),
            ],
            [
                'title' => "Якорные сваи в [city|pp]",
                'short_title' => "Якорные сваи",
                'slug' => Str::slug("Якорные сваи в [city|pp]"),
                'img' => "products/product_27.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_27/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_27/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_27/price.html')),
            ],
            [
                'title' => "Мини сваи в [city|pp]",
                'short_title' => "Мини сваи",
                'slug' => Str::slug("Мини сваи в [city|pp]"),
                'img' => "products/product_28.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_28/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_28/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_28/price.html')),
            ],
            [
                'title' => "Сваи для помоста в [city|pp]",
                'short_title' => "Сваи для помоста",
                'slug' => Str::slug("Сваи для помоста в [city|pp]"),
                'img' => "products/product_29.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_29/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_29/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_29/price.html')),
            ],
            [
                'title' => "Сваи для парника в [city|pp]",
                'short_title' => "Сваи для парника",
                'slug' => Str::slug("Сваи для парника в [city|pp]"),
                'img' => "products/product_30.jpg",
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
