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
                'title' => "Винтовые сваи в ЯНАО",
                'img' => "galery/g1.jpg",
            ],
            [
                'title' => "Пробное завинчивание свай",
                'img' => "galery/g2.jpg",
            ],
            [
                'title' => "Сваи под каркасный дом",
                'img' => "galery/g3.jpg",
            ],
            [
                'title' => "Сваи свс 76 в ЯНАО",
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
            [
                'title' => "Свайное поле от СвайМонтаж",
                'img' => "galery/g7.jpg",
            ],
            [
                'title' => "Винтовые сваи с литыми наконечниками в ЯНАО",
                'img' => "galery/g8.jpg",
            ],
            [
                'title' => "Фундамент на винтовых сваях в ЯНАО",
                'img' => "galery/g9.jpg",
            ],
            [
                'title' => "Монтаж свайного фундамента в ЯНАО",
                'img' => "galery/g10.jpg",
            ],
            [
                'title' => "Монтаж винтовых свай в ЯНАО под ключ",
                'img' => "galery/g11.jpg",
            ],
            [
                'title' => "Новый дом на винтовых сваях",
                'img' => "galery/g12.jpg",
            ],
            [
                'title' => "Сваи для пирса ЯНАО",
                'img' => "galery/g13.jpg",
            ],
            [
                'title' => "Сваи СВС для экодомов. Без вреда природе ЯНАО",
                'img' => "galery/g14.jpg",
            ],
            [
                'title' => "Сваи СВС 89 — усиленные ЯНАО",
                'img' => "galery/g15.jpg",
            ],
            [
                'title' => "Монтаж буронабивной сваи в ЯНАО",
                'img' => "galery/g16.jpg",
            ],
            [
                'title' => "Многовитковые сваи в ЯНАО",
                'img' => "galery/g17.jpg",
            ],
            [
                'title' => "Свайный фундамент для дома ЯНАО — наш профиль!",
                'img' => "galery/g18.jpg",
            ],
            [
                'title' => "Сваи СВС с оцинковкой — защита от коррозии в ЯНАО!",
                'img' => "galery/g19.jpg",
            ],
            [
                'title' => "Литые сваи ЯНАО",
                'img' => "galery/g20.jpg",
            ],
            [
                'title' => "сваи из нержавеющей стали в ЯНАО",
                'img' => "galery/g21.jpg",
            ],
            [
                'title' => "Срочный монтаж свай в ЯНАО — замеры за 2 часа!",
                'img' => "galery/g22.jpg",
            ],
            [
                'title' => "Фундамент под мобильные дома. Переезжайте без проблем!",
                'img' => "galery/g23.jpg",
            ],
            [
                'title' => "Сваи СВС 57 для легких построек.",
                'img' => "galery/g24.jpg",
            ],
            [
                'title' => "Зимний монтаж свай — без простоев! ЯНАО",
                'img' => "galery/g25.jpg",
            ],
            [
                'title' => "Фундамент под детскую площадку. Безопасно и экологично!",
                'img' => "galery/g26.jpg",
            ],

            [
                'title' => "Фундамент под забор.",
                'img' => "galery/g27.jpg",
            ],
            [
                'title' => "Монтаж винтовых свай краном — 20 свай за 1 день! Нагрузка до 15 тонн.",
                'img' => "galery/g28.jpg",
            ],
            [
                'title' => "Этапы монтажа: бурение, установка сваи, обвязка. Дом начинается с надежного фундамента!",
                'img' => "galery/g29.jpg",
            ],
            [
                'title' => "Готовый фундамент с антикоррозийным покрытием. Можно начинать стройку хоть завтра!",
                'img' => "galery/g30.jpg",
            ],
            [
                'title' => "Монтаж краном в сложном грунте. Сваи закручены — можно строить!",
                'img' => "galery/g31.jpg",
            ],
            [
                'title' => "Профессиональный монтаж под ключ!",
                'img' => "galery/g31.jpg",
            ],
            [
                'title' => "Установка свай краном для трёхэтажного дома. Гарантия вертикальности!",
                'img' => "galery/g32.jpg",
            ],
            [
                'title' => "Сваи установлены — бригада монтирует каркас дома. Никаких простоев!",
                'img' => "galery/g33.jpg",
            ],
            [
                'title' => "Процесс установки фундамента: свая вкручена, основание готово под дом!",
                'img' => "galery/g34.jpg",
            ],
            [
                'title' => "Монтаж под инженерные сети",
                'img' => "galery/g35.jpg",
            ],
            [
                'title' => "Установка свай под дом из СИП-панелей. Легко, быстро, без усадки!",
                'img' => "galery/g36.jpg",
            ],
            [
                'title' => "Кран + опытная бригада: 30 свай за смену. Дом начнётся вовремя!",
                'img' => "galery/g37.jpg",
            ],
            [
                'title' => "Монтаж свай под модульные дома. Фундамент и коробка — за неделю!",
                'img' => "galery/g38.jpg",
            ],
        ];

        DB::table("galeries")->insert($data);
    }
}
