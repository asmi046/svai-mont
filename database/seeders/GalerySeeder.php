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
        Storage::disk('public')->put("galery/g7.jpg", file_get_contents(public_path('tmp_data/galery/g7.jpg')), 'public');
        Storage::disk('public')->put("galery/g8.jpg", file_get_contents(public_path('tmp_data/galery/g8.jpg')), 'public');
        Storage::disk('public')->put("galery/g9.jpg", file_get_contents(public_path('tmp_data/galery/g9.jpg')), 'public');
        Storage::disk('public')->put("galery/g10.jpg", file_get_contents(public_path('tmp_data/galery/g10.jpg')), 'public');
        Storage::disk('public')->put("galery/g11.jpg", file_get_contents(public_path('tmp_data/galery/g11.jpg')), 'public');
        Storage::disk('public')->put("galery/g12.jpg", file_get_contents(public_path('tmp_data/galery/g12.jpg')), 'public');
        Storage::disk('public')->put("galery/g13.jpg", file_get_contents(public_path('tmp_data/galery/g13.jpg')), 'public');
        Storage::disk('public')->put("galery/g14.jpg", file_get_contents(public_path('tmp_data/galery/g14.jpg')), 'public');
        Storage::disk('public')->put("galery/g15.jpg", file_get_contents(public_path('tmp_data/galery/g15.jpg')), 'public');
        Storage::disk('public')->put("galery/g16.jpg", file_get_contents(public_path('tmp_data/galery/g16.jpg')), 'public');
        Storage::disk('public')->put("galery/g17.jpg", file_get_contents(public_path('tmp_data/galery/g17.jpg')), 'public');
        Storage::disk('public')->put("galery/g18.jpg", file_get_contents(public_path('tmp_data/galery/g18.jpg')), 'public');
        Storage::disk('public')->put("galery/g19.jpg", file_get_contents(public_path('tmp_data/galery/g19.jpg')), 'public');
        Storage::disk('public')->put("galery/g20.jpg", file_get_contents(public_path('tmp_data/galery/g20.jpg')), 'public');
        Storage::disk('public')->put("galery/g21.jpg", file_get_contents(public_path('tmp_data/galery/g21.jpg')), 'public');
        Storage::disk('public')->put("galery/g22.jpg", file_get_contents(public_path('tmp_data/galery/g22.jpg')), 'public');
        Storage::disk('public')->put("galery/g23.jpg", file_get_contents(public_path('tmp_data/galery/g23.jpg')), 'public');
        Storage::disk('public')->put("galery/g24.jpg", file_get_contents(public_path('tmp_data/galery/g24.jpg')), 'public');
        Storage::disk('public')->put("galery/g25.jpg", file_get_contents(public_path('tmp_data/galery/g25.jpg')), 'public');
        Storage::disk('public')->put("galery/g26.jpg", file_get_contents(public_path('tmp_data/galery/g26.jpg')), 'public');
        Storage::disk('public')->put("galery/g27.jpg", file_get_contents(public_path('tmp_data/galery/g27.jpg')), 'public');
        Storage::disk('public')->put("galery/g28.jpg", file_get_contents(public_path('tmp_data/galery/g28.jpg')), 'public');
        Storage::disk('public')->put("galery/g29.jpg", file_get_contents(public_path('tmp_data/galery/g29.jpg')), 'public');
        Storage::disk('public')->put("galery/g30.jpg", file_get_contents(public_path('tmp_data/galery/g30.jpg')), 'public');
        Storage::disk('public')->put("galery/g31.jpg", file_get_contents(public_path('tmp_data/galery/g31.jpg')), 'public');
        Storage::disk('public')->put("galery/g32.jpg", file_get_contents(public_path('tmp_data/galery/g32.jpg')), 'public');
        Storage::disk('public')->put("galery/g33.jpg", file_get_contents(public_path('tmp_data/galery/g33.jpg')), 'public');
        Storage::disk('public')->put("galery/g34.jpg", file_get_contents(public_path('tmp_data/galery/g34.jpg')), 'public');
        Storage::disk('public')->put("galery/g35.jpg", file_get_contents(public_path('tmp_data/galery/g35.jpg')), 'public');
        Storage::disk('public')->put("galery/g36.jpg", file_get_contents(public_path('tmp_data/galery/g36.jpg')), 'public');
        Storage::disk('public')->put("galery/g37.jpg", file_get_contents(public_path('tmp_data/galery/g37.jpg')), 'public');
        Storage::disk('public')->put("galery/g38.jpg", file_get_contents(public_path('tmp_data/galery/g38.jpg')), 'public');
        $data = [
            [
                'title' => "Доставка винтовых свай на объект",
                'img' => "galery/g1.jpg",
            ],
            [
                'title' => "Объвязка свайного фундамента на сложном рельефе",
                'img' => "galery/g2.jpg",
            ],
            [
                'title' => "Набор винтовых свай подготовленнх к отправке на объект",
                'img' => "galery/g3.jpg",
            ],
            [
                'title' => "Свайный фундамент для небольшого дома",
                'img' => "galery/g4.jpg",
            ],
            [
                'title' => "Подготовка свайного фундамента под обвязку",
                'img' => "galery/g5.jpg",
            ],
            [
                'title' => "Монтаж свайного фундавента в сложных погодных условиях",
                'img' => "galery/g6.jpg",
            ],
            [
                'title' => "Свайный фундамент монтаж зимой",
                'img' => "galery/g7.jpg",
            ],
            [
                'title' => "Оснащение винтовых свай качествекнными Оголовками",
                'img' => "galery/g8.jpg",
            ],
            [
                'title' => "Монтаж свайного фундамента под промышленное помещение",
                'img' => "galery/g9.jpg",
            ],

            [
                'title' => "Свайный фундамент в лесу",
                'img' => "galery/g10.jpg",
            ],
            [
                'title' => "Механический монтаж винтовцых свай",
                'img' => "galery/g11.jpg",
            ],
            [
                'title' => "Поле винтовых свай",
                'img' => "galery/g12.jpg",
            ],
            [
                'title' => "Причал на винтовых сваях",
                'img' => "galery/g13.jpg",
            ],
            [
                'title' => "Надежная упаковка свай для транспортировки",
                'img' => "galery/g14.jpg",
            ],
            [
                'title' => "Склад готовой продукции",
                'img' => "galery/g15.jpg",
            ],
            [
                'title' => "Процесс обвязки винтовых свай с подготовкой утепления подпола",
                'img' => "galery/g16.jpg",
            ],
            [
                'title' => "Бурение винтовых свай на песчаной почве",
                'img' => "galery/g17.jpg",
            ],
            [
                'title' => "Деревянные лаги смонтированные на винтовые сваи",
                'img' => "galery/g18.jpg",
            ],
            [
                'title' => "Свайный фундамент на дачном участке",
                'img' => "galery/g19.jpg",
            ],
            [
                'title' => "Свайное поле с обвязкой",
                'img' => "galery/g20.jpg",
            ],
            [
                'title' => "Смонтированные винтовые сваи под дом",
                'img' => "galery/g21.jpg",
            ],
            [
                'title' => "Свайный фундамент с обвязкой и усилением",
                'img' => "galery/g22.jpg",
            ],
            [
                'title' => "Монтаж свай под веранду",
                'img' => "galery/g23.jpg",
            ],
            [
                'title' => "Механический монтаж с применением крана",
                'img' => "galery/g24.jpg",
            ],
            [
                'title' => "Зимний монтаж свай",
                'img' => "galery/g25.jpg",
            ],
            [
                'title' => "Фундамент под помост",
                'img' => "galery/g26.jpg",
            ],

            [
                'title' => "Монтаж свай для установки забора",
                'img' => "galery/g27.jpg",
            ],
            [
                'title' => "Зимний монтаж свайного фундамента",
                'img' => "galery/g28.jpg",
            ],
            [
                'title' => "Сваный фундамент с обработанными лагами",
                'img' => "galery/g29.jpg",
            ],
            [
                'title' => "механическое бурение винтовых свай",
                'img' => "galery/g30.jpg",
            ],
            [
                'title' => "Подготовка фундамента под веранду",
                'img' => "galery/g31.jpg",
            ],

            [
                'title' => "Монтаж сваного фундамента для дома 50 м2",
                'img' => "galery/g32.jpg",
            ],
            [
                'title' => "Монтаж сваного фундамента для дома 65 м2",
                'img' => "galery/g33.jpg",
            ],
            [
                'title' => "Монтаж свайного фундамента с утеплением",
                'img' => "galery/g34.jpg",
            ],
            [
                'title' => "Отпуск винтовых свай со склада",
                'img' => "galery/g35.jpg",
            ],
            [
                'title' => "Бурение свайного поля под дом",
                'img' => "galery/g36.jpg",
            ],
            [
                'title' => "Механический монтаж свай в сложный грунт",
                'img' => "galery/g37.jpg",
            ],
            [
                'title' => "Работа по монтажу фундамента в промерзший грунт",
                'img' => "galery/g38.jpg",
            ],
        ];

        DB::table("galeries")->insert($data);
    }
}
