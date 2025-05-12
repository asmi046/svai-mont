<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("contacts")->insert(
            [
                [
                    'name' => 'site_name',
                    'title' => 'Имя сайта',
                    'value' => 'СвайМастер',
                ],

                [
                    'name' => 'phone',
                    'title' => 'Телефон',
                    'value' => '+7 905 000 00 00',
                ],

                [
                    'name' => 'tg_lnk',
                    'title' => 'Ссылка  на Телеграм',
                    'value' => '#',
                ],

                [
                    'name' => 'ws_lnk',
                    'title' => 'Ссылка  на WhatsApp',
                    'value' => '#',
                ],

                [
                    'name' => 'adress',
                    'title' => 'Адрес компании',
                    'value' => '628414,Россия, Ханты-Мансийский автономный округ, Сургут, ул. Западная, 16',
                ],

                [
                    'name' => 'work_time',
                    'title' => 'Время работы',
                    'value' => 'Пн-Пт 09:00 - 18:00 Сб-Вс 10:00 - 15:00',
                ],

                [
                    'name' => 'email',
                    'title' => 'E-mail',
                    'value' => 'info@master.ru',
                ],
            ]
        );
    }
}
