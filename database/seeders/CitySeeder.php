<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => "Сургут",
                'slug' => "surgut",
                'is_default' => true,
                'order' => 1,
                'rp' => "Сургута",
                'pp' => "Сургуте",
            ],
            [
                'name' => "Нижневартовск",
                'slug' => "nizhnevartovsk",
                'is_default' => false,
                'order' => 2,
                'rp' => "Нижневартовска",
                'pp' => "Нижневартовске",
            ],
            [
                'name' => "Когалым",
                'slug' => "kogalym",
                'is_default' => false,
                'order' => 3,
                'rp' => "Когалыма",
                'pp' => "Когалыме",

            ],
            [
                'name' => "Нефтеюганск",
                'slug' => "nefteyugansk",
                'is_default' => false,
                'order' => 4,
                'rp' => "Нефтеюганска",
                'pp' => "Нефтеюганске",

            ],

            [
                'name' => "Птьях",
                'slug' => "ptyah",
                'is_default' => false,
                'order' => 5,
                'rp' => "Птьяха",
                'pp' => "Птьяха",

            ],

            [
                'name' => "Пойковский",
                'slug' =>  "poikovskiy",
                'is_default' => false,
                'order' => 6,
                'rp' => "Пойковского",
                'pp' => "Пойковском",

            ],
            [
                'name' => "Мегион",
                'slug' => Str::slug("Мегион"),
                'is_default' => false,
                'order' => 7,
                'rp' => "Мегиона",
                'pp' => "Мегионе",

            ],
            [
                'name' => "Ноябрьск",
                'slug' =>  Str::slug("Ноябрьск"),
                'is_default' => false,
                'order' => 8,
                'rp' => "Ноябрьска",
                'pp' => "Ноябрьске",

            ],
            [
                'name' => "Новый уренгой",
                'slug' =>  Str::slug("Новый уренгой"),
                'is_default' => false,
                'order' => 9,
                'rp' => "Нового уренгоя",
                'pp' => "Новом уренге",

            ],
            [
                'name' => "Губкинский",
                'slug' =>  Str::slug("Губкинский"),
                'is_default' => false,
                'order' => 10,
                'rp' => "Губкинском",
                'pp' => "Губкинске",

            ],
            [
                'name' => "Муравленко",
                'slug' =>  Str::slug("Муравленко"),
                'is_default' => false,
                'order' => 11,
                'rp' => "Муравленко",
                'pp' => "Муравленко",

            ],
            [
                'name' => "Тарко-сале",
                'slug' =>  Str::slug("Тарко-сале"),
                'is_default' => false,
                'order' => 12,
                'rp' => "Тарко-сале",
                'pp' => "Тарко-сале",

            ],

        ];
        DB::table("cities")->insert($data);
    }
}
