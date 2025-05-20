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
                'price' => 1083,
                'price_mont' => 920,
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
                'price' => 1308,
                'price_mont' => 1022,
            ],
            [
                'size' => 89,
                'order' => 4,
                'img' => "price/pr.webp",
                'price' => 1359,
                'price_mont' => 1022,
            ],
            [
                'size' => 108,
                'order' => 5,
                'img' => "price/pr.webp",
                'price' => 1583,
                'price_mont' => 1022,
            ],
            [
                'size' => 133,
                'order' => 6,
                'img' => "price/pr.webp",
                'price' => 2400,
                'price_mont' => 1230,
            ],

            [
                'size' => 159,
                'order' => 7,
                'img' => "price/pr.webp",
                'price' => 2400,
                'price_mont' => 1230,
            ],

            [
                'size' => 219,
                'order' => 8,
                'img' => "price/pr.webp",
                'price' => 2400,
                'price_mont' => 1230,
            ],
        ];

        DB::table("price_vidgets")->insert($data);
        // price_vidgets
    }
}
