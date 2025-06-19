<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Illuminate\Support\Facades\Storage;

class PriceVidgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("price/pr.webp", file_get_contents(public_path('tmp_data/price/pr.webp')), 'public');
        $data = [
            [
                'size' => 57,
                'order' => 1,
                'img' => "price/pr.webp",
                'price' => 920,
                'price_mont' => 1083,
            ],
            [
                'size' => 73,
                'order' => 2,
                'img' => "price/pr.webp",
                'price' => 858,
                'price_mont' => 1022,
            ],
            [
                'size' => 76,
                'order' => 3,
                'img' => "price/pr.webp",
                'price' => 1022,
                'price_mont' => 1308,
            ],
            [
                'size' => 89,
                'order' => 4,
                'img' => "price/pr.webp",
                'price' => 1022,
                'price_mont' => 1359,
            ],
            [
                'size' => 108,
                'order' => 5,
                'img' => "price/pr.webp",
                'price' => 1022,
                'price_mont' => 1583,
            ],
            [
                'size' => 133,
                'order' => 6,
                'img' => "price/pr.webp",
                'price' => 1230,
                'price_mont' => 2400,
            ],

            [
                'size' => 159,
                'order' => 7,
                'img' => "price/pr.webp",
                'price' => 1230,
                'price_mont' => 2400,
            ],

            [
                'size' => 219,
                'order' => 8,
                'img' => "price/pr.webp",
                'price' => 1230,
                'price_mont' => 2400,
            ],
        ];

        DB::table("price_vidgets")->insert($data);
        // price_vidgets
    }
}
