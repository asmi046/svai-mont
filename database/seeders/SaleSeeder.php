<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Illuminate\Support\Facades\Storage;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("sale/1.webp", file_get_contents(public_path('tmp_data/sale/1.webp')), 'public');
        $data = [
            [
                'img' => "sale/1.webp",
                'title' => "Акция 1",
                'description' => "Акция 1",
            ],
        ];

        DB::table("sales")->insert($data);
    }
}
