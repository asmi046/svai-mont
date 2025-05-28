<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ParametrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put("parametr/main_top.jpg", file_get_contents(public_path('tmp_data/main_banner.jpg')), 'public');

        Storage::disk('public')->put("parametr/adv_1.svg", file_get_contents(public_path('tmp_data/adv_icon/adv_1.svg')), 'public');
        Storage::disk('public')->put("parametr/adv_2.svg", file_get_contents(public_path('tmp_data/adv_icon/adv_2.svg')), 'public');
        Storage::disk('public')->put("parametr/adv_3.svg", file_get_contents(public_path('tmp_data/adv_icon/adv_3.svg')), 'public');
        Storage::disk('public')->put("parametr/adv_4.svg", file_get_contents(public_path('tmp_data/adv_icon/adv_4.svg')), 'public');
        Storage::disk('public')->put("parametr/adv_5.svg", file_get_contents(public_path('tmp_data/adv_icon/adv_5.svg')), 'public');

        Storage::disk('public')->put("parametr/pay_1.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_1.svg')), 'public');
        Storage::disk('public')->put("parametr/pay_2.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_2.svg')), 'public');
        Storage::disk('public')->put("parametr/pay_3.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_3.svg')), 'public');
        Storage::disk('public')->put("parametr/pay_4.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_4.svg')), 'public');
        Storage::disk('public')->put("parametr/pay_5.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_5.svg')), 'public');
        Storage::disk('public')->put("parametr/pay_6.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_6.svg')), 'public');

        $data = [
            [
                'str_id' => 'banner_text',
                'section' => "Баннер на главной",
                'title' => null,
                'value' => "Производство<br>и монтаж<br>Винтовых сваи <br>в [city|pp]",
                'img' => null,
            ],
            [
                'str_id' => 'banner_img',
                'section' => "Баннер на главной",
                'title' => null,
                'value' => null,
                'img' => "parametr/main_top.jpg",
            ],
            [
                'str_id' => 'banner_projects',
                'section' => "Баннер на главной",
                'title' => "Завершенных <br>проектов",
                'value' => "100+",
                'img' => null,
            ],
            [
                'str_id' => 'banner_verency',
                'section' => "Баннер на главной",
                'title' => "Лет гарантии <br>на сваи",
                'value' => "20+",
                'img' => null,
            ],
            [
                'str_id' => 'banner_types',
                'section' => "Баннер на главной",
                'title' => "Типоразмером<br>свай",
                'value' => "80",
                'img' => null,
            ],
            // --------------------------
            [
                'str_id' => 'adv_1',
                'section' => "Преимущества",
                'title' => "Долговечные<br>сваи",
                'value' => "Двойная антикоррозийная защита для сурового климата ЯНАО. Срок службы – до 50 лет.",
                'img' => "parametr/adv_1.svg",
            ],

            [
                'str_id' => 'adv_2',
                'section' => "Преимущества",
                'title' => "Работаем<br>зимой",
                'value' => "Монтаж даже при -40°C. Спецтехника и технологии для любых условий.",
                'img' => "parametr/adv_2.svg",
            ],

            [
                'str_id' => 'adv_3',
                'section' => "Преимущества",
                'title' => "Бесплатный<br>замер",
                'value' => "Выезд инженера в течение дня. Анализ грунта и расчет без предоплаты.",
                'img' => "parametr/adv_3.svg",
            ],

            [
                'str_id' => 'adv_4',
                'section' => "Преимущества",
                'title' => "Доставка по <br>ЯНАО",
                'value' => "Собственный автопарк – привезем сваи даже в отдаленные поселки.",
                'img' => "parametr/adv_4.svg",
            ],

            [
                'str_id' => 'adv_5',
                'section' => "Преимущества",
                'title' => "Гарантия <br>10 лет",
                'value' => "На сваи и монтаж. Все риски –  мы берем на себя! Вам не нужно беспокоиться",
                'img' => "parametr/adv_5.svg",
            ],
        ];

        DB::table("parametrs")->insert($data);

        $pay_var = [
            [
                'str_id' => 'pay_1',
                'section' => "Способы оплаты",
                'title' => "Наличные",
                'value' => "Оплата наличными",
                'img' => "parametr/pay_1.svg",
            ],

            [
                'str_id' => 'pay_2',
                'section' => "Способы оплаты",
                'title' => "Картой",
                'value' => "Оплата банковской картой",
                'img' => "parametr/pay_2.svg",
            ],

            [
                'str_id' => 'pay_3',
                'section' => "Способы оплаты",
                'title' => "Перевод",
                'value' => "Оплата переводом на карту",
                'img' => "parametr/pay_3.svg",
            ],

            [
                'str_id' => 'pay_4',
                'section' => "Способы оплаты",
                'title' => "Кредит",
                'value' => "Оплата кредитными средствами",
                'img' => "parametr/pay_4.svg",
            ],

            [
                'str_id' => 'pay_5',
                'section' => "Способы оплаты",
                'title' => "Рассрочка",
                'value' => "Оплата в рассрочку",
                'img' => "parametr/pay_5.svg",
            ],

            [
                'str_id' => 'pay_6',
                'section' => "Способы оплаты",
                'title' => "По счету",
                'value' => "Оплата на рассчетный счет",
                'img' => "parametr/pay_6.svg",
            ],
        ];

        DB::table("parametrs")->insert($pay_var);

    }
}
