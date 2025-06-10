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
        Storage::disk('public')->put("sale/1.jpeg", file_get_contents(public_path('tmp_data/sale/1.jpeg')), 'public');
        Storage::disk('public')->put("sale/2.webp", file_get_contents(public_path('tmp_data/sale/2.webp')), 'public');
        Storage::disk('public')->put("sale/3.jpg", file_get_contents(public_path('tmp_data/sale/3.jpg')), 'public');
        $data = [
            [
                'img' => "sale/1.jpeg",
                'title' => "Фундамент под ключ",
                'sub_title' => "со скидкой 10%",
                'description' => "Фундамент на винтовых сваях под ключ со скидкой 10%! Выполним все работы по установке фундамента на винтовых сваях в срок и с гарантией качества. Скидка действует до конца месяца.",
            ],
            [
                'img' => "sale/2.webp",
                'title' => "Монтаж винтовых свай",
                'sub_title' => "со скидкой 10%",
                'description' => "Монтаж винтовых свай со скидкой 10%! Профессиональный монтаж винтовых свай с гарантией качества. Скидка действует до конца месяца. Не упустите возможность сэкономить на установке фундамента!",
            ],

            [
                'img' => "sale/3.jpg",
                'title' => "Продажа винтовых свай",
                'sub_title' => "со скидкой 5%",
                'description' => "Продажа винтовых свай со скидкой 5%! Высококачественные винтовые сваи по доступным ценам. Скидка действует до конца месяца. Закажите сейчас и получите качественный продукт по выгодной цене!",
            ],
        ];

        DB::table("sales")->insert($data);
    }
}
