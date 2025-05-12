<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'order' => 1,
                'title' => 'Когда допустимо использование винтовых труб?',
                'description' => 'Чаще всего в ЯНАО такие изделия используют для устройства фундамента под забор. Также их используют в качестве основы для информационных стендов, различного рода светильников и беседок.',
            ],
            [
                'order' => 2,
                'title' => 'Какая несущая способность?',
                'description' => 'Ответ на вопрос',
            ],
            [
                'order' => 3,
                'title' => 'Какой срок службы?',
                'description' => 'Ответ на вопрос',
            ],
            [
                'order' => 4,
                'title' => 'На каком этапе монтажа опор необходимы сварные работы?',
                'description' => 'Ответ на вопрос',
            ],
            [
                'order' => 5,
                'title' => 'Сколько стоят сварочные работы?',
                'description' => 'Ответ на вопрос',
            ],
            [
                'order' => 6,
                'title' => 'Ваши работники имеют квалификацию?',
                'description' => 'Ответ на вопрос',
            ],
            [
                'order' => 7,
                'title' => 'У вас есть срочные услуги ямобура?',
                'description' => 'Ответ на вопрос',
            ],
            [
                'order' => 8,
                'title' => 'У вас есть скидки?',
                'description' => 'Ответ на вопрос',
            ],
        ];

        DB::table('questions')->insert($data);
    }
}
