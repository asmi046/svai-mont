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
                'price' =>  file_get_contents(public_path('tmp_data/prod/pr_1/price.html')),
            ],
            [
                'title' => "Винтовые сваи 60 мм в Сургуте",
                'img' => "products/product_2.jpg",
                'top_description' => file_get_contents(public_path('tmp_data/prod/pr_2/top.html')),
                'description' => file_get_contents(public_path('tmp_data/prod/pr_2/main.html')),
                'price' => file_get_contents(public_path('tmp_data/prod/pr_2/price.html')),
            ],

        ];

        DB::table("products")->insert($data);
    }
}
