<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'menu_name' => 'Главное меню',
                'title' => 'О компании',
                'order' => 1,
                'lnk' => "#",
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Цены',
                'order' => 2,
                'lnk' => "#",
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Сваи',
                'order' => 3,
                'lnk' => "#",
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Галерея',
                'order' => 4,
                'lnk' => "#",
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Акции',
                'order' => 5,
                'lnk' => "#",
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Отзывы',
                'order' => 6,
                'lnk' => "#",
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'FAQ',
                'order' => 7,
                'lnk' => "#",
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Оплата и доставка',
                'order' => 8,
                'lnk' => "#",
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Сертификаты',
                'order' => 9,
                'lnk' => "#",
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Контакты',
                'order' => 10,
                'lnk' => "#",
            ],
        ];

        DB::table("menus")->insert($data);

    }
}
