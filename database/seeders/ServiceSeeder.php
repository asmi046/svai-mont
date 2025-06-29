<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("services/s_1.webp", file_get_contents(public_path('tmp_data/serv/s_1.webp')), 'public');
        Storage::disk('public')->put("services/s_2.webp", file_get_contents(public_path('tmp_data/serv/s_2.webp')), 'public');
        Storage::disk('public')->put("services/s_3.webp", file_get_contents(public_path('tmp_data/serv/s_3.webp')), 'public');
        Storage::disk('public')->put("services/s_4.webp", file_get_contents(public_path('tmp_data/serv/s_4.webp')), 'public');
        Storage::disk('public')->put("services/s_5.webp", file_get_contents(public_path('tmp_data/serv/s_5.webp')), 'public');
        Storage::disk('public')->put("services/s_6.webp", file_get_contents(public_path('tmp_data/serv/s_6.webp')), 'public');
        Storage::disk('public')->put("services/s_7.webp", file_get_contents(public_path('tmp_data/serv/s_7.webp')), 'public');
        Storage::disk('public')->put("services/s_8.webp", file_get_contents(public_path('tmp_data/serv/s_8.webp')), 'public');
        Storage::disk('public')->put("services/s_9.webp", file_get_contents(public_path('tmp_data/serv/s_9.webp')), 'public');
        Storage::disk('public')->put("services/s_10.webp", file_get_contents(public_path('tmp_data/serv/s_10.webp')), 'public');
        Storage::disk('public')->put("services/s_11.webp", file_get_contents(public_path('tmp_data/serv/s_11.webp')), 'public');
        Storage::disk('public')->put("services/s_12.webp", file_get_contents(public_path('tmp_data/serv/s_12.webp')), 'public');
        Storage::disk('public')->put("services/s_13.webp", file_get_contents(public_path('tmp_data/serv/s_13.webp')), 'public');
        Storage::disk('public')->put("services/s_14.webp", file_get_contents(public_path('tmp_data/serv/s_14.webp')), 'public');
        Storage::disk('public')->put("services/s_15.webp", file_get_contents(public_path('tmp_data/serv/s_15.webp')), 'public');
        Storage::disk('public')->put("services/s_16.webp", file_get_contents(public_path('tmp_data/serv/s_16.webp')), 'public');

        $data = [
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 1,
                'title' => "Бурение свай в [city|pp]",
                'slug' => Str::slug("Бурение свай"),
                'sub_title' => "Бурение под фундамент",
                'img' => "services/s_1.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_1/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_1/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_1/price.html')),
            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 2,
                'title' => "Утепление подполья дома в [city|pp]",
                'slug' => Str::slug("Заказать утепление подполья дома"),
                'sub_title' => "Утепление основания фундамента",
                'img' => "services/s_2.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_2/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_2/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_2/price.html')),
            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 3,
                'title' => "Закручивание винтовых свай в [city|pp]",
                'slug' => Str::slug("Заказать закручивание винтовых свай"),
                'sub_title' => "Заказать закручивание винтовых свай",
                'img' => "services/s_3.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_3/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_3/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_3/price.html')),
            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 4,
                'title' => "Замена фундамента на сваи в [city|pp]",
                'slug' => Str::slug("Заказать замену фундамента на сваи"),
                'sub_title' => "Замена свайного фундамента",
                'img' => "services/s_4.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_4/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_4/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_4/price.html')),
            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 5,
                'title' => "Монтаж винтовых свай в [city|pp]",
                'slug' => Str::slug("Заказать монтаж винтовых свай"),
                'sub_title' => "Монтаж винтовых свай",
                'img' => "services/s_5.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_5/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_5/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_5/price.html')),
            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 7,
                'title' => "Обвязка винтовых свай в [city|pp]",
                'slug' => Str::slug("Заказать обвязку винтовых свай"),
                'sub_title' => "Обвязка винтовых свай",
                'img' => "services/s_6.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_7/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_7/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_7/price.html')),
            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 8,
                'title' => "Поднятие дома на сваях в [city|pp]",
                'slug' => Str::slug("Заказать поднятие дома на сваях"),
                'sub_title' => "Поднятие дома на сваях",
                'img' => "services/s_7.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_7/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_7/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_8/price.html')),
            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 9,
                'title' => "Усиление фундамента винтовыми сваями в [city|pp]",
                'slug' => Str::slug("Заказать усиление фундамента винтовыми сваями"),
                'sub_title' => "Усиление фундамента винтовыми",
                'img' => "services/s_9.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_9/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_9/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_9/price.html')),
            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 10,
                'title' => "Установка винтовых свай в [city|pp]",
                'slug' => Str::slug("Заказать установка винтовых свай"),
                'sub_title' => "Заказать установка винтовых свай",
                'img' => "services/s_10.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_10/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_10/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_10/price.html')),
            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 11,
                'title' => "Сварные работы в [city|pp]",
                'slug' => Str::slug("Заказать сварные работы"),
                'sub_title' => "Cварные работы",
                'img' => "services/s_11.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_11/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_11/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_11/price.html')),
            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 12,
                'title' => "Механизированный монтаж в [city|pp]",
                'slug' => Str::slug("Заказать механизированный монтаж"),
                'sub_title' => "Механизированный монтаж свай",
                'img' => "services/s_12.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_12/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_12/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_12/price.html')),
            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 13,
                'title' => "Ремонт фундамента в [city|pp]",
                'slug' => Str::slug("Заказать ремонт фундамента"),
                'sub_title' => "Ремонт фундамента",
                'img' => "services/s_13.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_13/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_13/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_13/price.html')),
            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 14,
                'title' => "Строительство пристроек в [city|pp] под ключ",
                'slug' => Str::slug("Заказать строительство пристроек под ключ"),
                'sub_title' => "Строительство пристройки под ключ",
                'img' => "services/s_14.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_14/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_14/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_14/price.html')),
            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 15,
                'title' => "Пробное бурение под сваи в [city|pp]",
                'slug' => Str::slug("Заказать пробное бурение под сваи"),
                'sub_title' => "Пробное бурение под сваи",
                'img' => "services/s_15.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_15/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_15/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_15/price.html')),
            ],
            [
                                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order' => 16,
                'title' => "Удлинители для свай в [city|pp]",
                'slug' => Str::slug("Заказать удлинители для свай"),
                'sub_title' => "Удлинители для свай",
                'img' => "services/s_16.webp",
                'top_description' => file_get_contents(public_path('tmp_data/serv/s_16/top.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_16/main.html')),
                'price' => file_get_contents(public_path('tmp_data/serv/s_16/price.html')),
            ],
        ];

        $seo_data = [
            [
            'seo_title' => 'Бурение под фундамент — профессиональные услуги и доступные цены',
            'seo_description' => 'Профессиональное бурение под фундамент. Описание услуги, преимущества, стоимость и условия заказа. Гарантия качества и надежности.',
            ],
            [
            'seo_title' => 'Утепление основания фундамента — тепло и комфорт вашему дому',
            'seo_description' => 'Утепление подполья дома: подробное описание услуги, преимущества, цены и этапы работ. Эффективная теплоизоляция основания фундамента.',
            ],
            [
            'seo_title' => 'Заказ закручивания винтовых свай — быстро и надежно',
            'seo_description' => 'Закручивание винтовых свай: особенности услуги, преимущества, стоимость и условия заказа. Качественный монтаж свайного фундамента.',
            ],
            [
            'seo_title' => 'Замена свайного фундамента — восстановление и усиление основания',
            'seo_description' => 'Замена фундамента на сваи: описание процесса, преимущества, стоимость и сроки выполнения работ. Гарантия долговечности.',
            ],
            [
            'seo_title' => 'Монтаж винтовых свай — установка под ключ',
            'seo_description' => 'Монтаж винтовых свай: этапы работ, преимущества, стоимость и условия заказа. Быстрое и качественное выполнение.',
            ],
            [
            'seo_title' => 'Обвязка винтовых свай — прочность и надежность конструкции',
            'seo_description' => 'Обвязка винтовых свай: описание услуги, преимущества, стоимость и особенности монтажа. Гарантия устойчивости фундамента.',
            ],
            [
            'seo_title' => 'Поднятие дома на сваях — безопасно и эффективно',
            'seo_description' => 'Поднятие дома на сваях: подробное описание услуги, преимущества, стоимость и этапы работ. Качественное выполнение с гарантией.',
            ],
            [
            'seo_title' => 'Усиление фундамента винтовыми сваями — долговечность и надежность',
            'seo_description' => 'Усиление фундамента винтовыми сваями: преимущества, стоимость, этапы работ и условия заказа. Повышение прочности основания.',
            ],
            [
            'seo_title' => 'Установка винтовых свай — профессиональный монтаж',
            'seo_description' => 'Установка винтовых свай: описание услуги, преимущества, стоимость и сроки выполнения. Качественный монтаж свайного фундамента.',
            ],
            [
            'seo_title' => 'Сварные работы — качественно и оперативно',
            'seo_description' => 'Сварные работы: описание, преимущества, стоимость и условия заказа. Профессиональное выполнение сварочных работ любой сложности.',
            ],
            [
            'seo_title' => 'Механизированный монтаж свай — скорость и точность',
            'seo_description' => 'Механизированный монтаж свай: особенности услуги, преимущества, стоимость и этапы работ. Современное оборудование и опытные специалисты.',
            ],
            [
            'seo_title' => 'Ремонт фундамента — восстановление прочности и надежности',
            'seo_description' => 'Ремонт фундамента: описание услуги, преимущества, стоимость и этапы работ. Качественное восстановление основания дома.',
            ],
            [
            'seo_title' => 'Строительство пристройки под ключ — расширьте пространство дома',
            'seo_description' => 'Строительство пристроек под ключ: этапы работ, преимущества, стоимость и условия заказа. Индивидуальный подход и гарантия качества.',
            ],
            [
            'seo_title' => 'Пробное бурение под сваи — точная оценка грунта',
            'seo_description' => 'Пробное бурение под сваи: описание услуги, преимущества, стоимость и этапы работ. Поможем выбрать оптимальный фундамент.',
            ],
            [
            'seo_title' => 'Удлинители для свай — увеличение глубины и надежности',
            'seo_description' => 'Удлинители для свай: описание, преимущества, стоимость и условия заказа. Решение для сложных грунтов и нестандартных задач.',
            ],
        ];

        DB::table("services")->insert($data);

        $i = 0;
        foreach ($data as $item) {
            DB::table("seo_data")->insert(
                [
                    'url' => 'services/'.$item['slug'],
                    'seo_title' => $seo_data[$i]['seo_title'],
                    'seo_description' => $seo_data[$i]['seo_description'],
                ]
            );
            $i++;
        }
    }
}
