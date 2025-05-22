<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class SeoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'url' => "/",
                'seo_title' => "Производство и монтаж винтовых свай в [city|pp]",
                'seo_description' => "Наша компания производит винтовые сваи всех типоразмеров в [city|pp]. Опытные бригады осуществят монтаж свай и строительство фундамента.",
                'page_title' => "",
            ],
            [
                'url' => "certificat",
                'seo_title' => "Сертификаты соответствия нашей продукции",
                'seo_description' => "Сертификаты соответствия нашей продукции",
                'page_title' => "",
            ],

        ];

        DB::table("seo_data")->insert($data);
    }
}
