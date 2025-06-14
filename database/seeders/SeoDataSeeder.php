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

            [
                'url' => "contacts",
                'seo_title' => "Контакты нашей компании",
                'seo_description' => "Все контакты нашей компании",
                'page_title' => "",
            ],

            [
                'url' => "faq",
                'seo_title' => "Ответы на часто задаваемые вопросы",
                'seo_description' => "Ответы на часто задаваемые вопросы",
                'page_title' => "",
            ],

            [
                'url' => "quiz",
                'seo_title' => "Калькулятор для расчета стоимости винтовых свай",
                'seo_description' => "Калькулятор для расчета стоимости винтовых свай",
                'page_title' => "",
            ],

            [
                'url' => "review",
                'seo_title' => "Отзывы довольных клиентов",
                'seo_description' => "Отзывы довольных клиентов",
                'page_title' => "",
            ],

            [
                'url' => "sales",
                'seo_title' => "Акции и скидки на винтовые сваи",
                'seo_description' => "Акции и скидки на винтовые сваи",
                'page_title' => "",
            ],

            [
                'url' => "galery",
                'seo_title' => "Галерея выполненных работ",
                'seo_description' => "Галерея выполненных работ",
                'page_title' => "",
            ],

            [
                'url' => "price",
                'seo_title' => "Цены на продукцию и работы",
                'seo_description' => "Цены на продукцию и работы",
                'page_title' => "",
            ],

            [
                'url' => "products",
                'seo_title' => "Цены на винтовые сваи в [city|pp]",
                'seo_description' => "Цены на продукцию на нашу продукцию в [city|pp]. Винтовые сваи всех типоразмеров по доступным ценам.",
                'page_title' => "",
            ],

            [
                'url' => "services",
                'seo_title' => "Услуги нашей компании в [city|pp]",
                'seo_description' => "Цены на услуги нашей компании в [city|pp]. Винтовые сваи всех типоразмеров + услуги по монтажу по доступным ценам.",
                'page_title' => "",
            ],

            [
                'url' => "fondations",
                'seo_title' => "Виды свайных фундаментов устанавливаемых нами в [city|pp]",
                'seo_description' => "Цены на услуги созданию фундаментов в [city|pp]. Винтовые сваи всех типоразмеров + услуги по монтажу по доступным ценам.",
                'page_title' => "",
            ],

            [
                'url' => "page/soglasie-na-obrabotku-personalnyx-dannyx",
                'seo_title' => "Согласие на обработку персональных данных",
                'seo_description' => "Согласие на обработку персональных данных",
                'page_title' => "",
            ],

            [
                'url' => "page/politika-v-oblasti-obrabotki-personalnyx-dannyx",
                'seo_title' => "Политика в области обработки персональных данных",
                'seo_description' => "Политика в области обработки персональных данных",
                'page_title' => "",
            ],

            [
                'url' => "page/oplata-i-dostavka",
                'seo_title' => "Оплата и доставка винтовых свай в [city|pp]",
                'seo_description' => "Оплата и доставка винтовых свай в [city|pp]. Выберите удобный способ оплаты и вариант доставки.",
                'page_title' => "",
            ],

        ];

        DB::table("seo_data")->insert($data);
    }
}
