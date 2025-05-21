<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Illuminate\Support\Facades\Storage;

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

        $data = [
            [
                'order' => 1,
                'title' => "Свайный фундамент под ключ в Сургуте",
                'short_title' => "Свайный фундамент под ключ",
                'img' => "fondation/f_1.jpg",
                'icon' => "fondation/home.svg",
                'top_description' => file_get_contents(public_path('tmp_data/fond/f_1/top.html')),
                'description' => file_get_contents(public_path('tmp_data/fond/f_1/main.html')),
                'price' => file_get_contents(public_path('tmp_data/fond/f_1/price.html')),

            ],
        ];
        DB::table("fondations")->insert($data);

    }
}
