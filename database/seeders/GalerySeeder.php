<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("galery/g1.jpg", file_get_contents(public_path('tmp_data/galery/g1.jpg')), 'public');
        Storage::disk('public')->put("galery/g2.jpg", file_get_contents(public_path('tmp_data/galery/g2.jpg')), 'public');
        Storage::disk('public')->put("galery/g3.jpg", file_get_contents(public_path('tmp_data/galery/g3.jpg')), 'public');
        Storage::disk('public')->put("galery/g4.jpg", file_get_contents(public_path('tmp_data/galery/g4.jpg')), 'public');
        Storage::disk('public')->put("galery/g5.jpg", file_get_contents(public_path('tmp_data/galery/g5.jpg')), 'public');
        Storage::disk('public')->put("galery/g6.jpg", file_get_contents(public_path('tmp_data/galery/g6.jpg')), 'public');
        $data = [
            [
                'title' => "Процесс монтажа  винтовых свай",
                'img' => "galery/g1.jpg",
            ],
            [
                'title' => "Фундамент на сваях с утеплением",
                'img' => "galery/g2.jpg",
            ],
            [
                'title' => "Монтаж винтовых свай",
                'img' => "galery/g3.jpg",
            ],
            [
                'title' => "Автоматизированный монтаж винтовых свай",
                'img' => "galery/g4.jpg",
            ],
            [
                'title' => "Смонтированный фундамент",
                'img' => "galery/g5.jpg",
            ],
            [
                'title' => "Новый дом на винтовых сваях",
                'img' => "galery/g6.jpg",
            ],
        ];

        DB::table("galeries")->insert($data);
    }
}
