<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("products/product_1.jpg", file_get_contents(public_path('tmp_data/prod/product_1.jpg')), 'public');
        Storage::disk('public')->put("products/product_2.jpg", file_get_contents(public_path('tmp_data/prod/product_2.jpg')), 'public');
        $data = [
            [
                'title' => "Винтовые сваи 57 мм купить в Сургуте",
                'img' => "products/product_1.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_1/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_1/main.html')),
                'price' => json_encode([
                    [
                        'name' => 'Закручивающаяся опора лопастная СВЛ-57-1500',
                        'wall' => '3.5',
                        'lopost' => '205',
                        'price' => '932',
                        'montage_price' => '1398',
                    ],
                    [
                        'name' => 'Закручивающаяся опора лопастная СВЛ-57-2000',
                        'wall' => '3.5',
                        'lopost' => '205',
                        'price' => '981',
                        'montage_price' => '1471',
                    ],
                ]),
            ],
            [
                'title' => "Винтовые сваи 60 мм в Сургуте",
                'img' => "products/product_2.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_2/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_2/main.html')),
                'price' => json_encode([
                    [
                        'name' => 'Закручивающаяся опора лопастная СВЛ-57-1600',
                        'wall' => '4.5',
                        'lopost' => '205',
                        'price' => '1324',
                        'montage_price' => '1986',
                    ],
                    [
                        'name' => 'Закручивающаяся опора лопастная СВЛ-60-2000',
                        'wall' => '4.5',
                        'lopost' => '205',
                        'price' => '1496',
                        'montage_price' => '2243',
                    ],
                ]),
            ],

        ];

        DB::table("products")->insert($data);
    }
}
