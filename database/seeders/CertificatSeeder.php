<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Illuminate\Support\Facades\Storage;

class CertificatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("certificates/cert_1.jpg", file_get_contents(public_path('tmp_data/cert/cert_1.jpg')), 'public');
        Storage::disk('public')->put("certificates/cert_2.jpg", file_get_contents(public_path('tmp_data/cert/cert_2.jpg')), 'public');
        Storage::disk('public')->put("certificates/cert_3.jpg", file_get_contents(public_path('tmp_data/cert/cert_3.jpg')), 'public');
        Storage::disk('public')->put("certificates/cert_4.jpg", file_get_contents(public_path('tmp_data/cert/cert_4.jpg')), 'public');

        $data = [
            [
                'title' => "2014.04.30 Сургут - Электроды покрытые металлические марки УОНИИ-13/55Р для ручной дуговой",
                'img' => "certificates/cert_1.jpg",
            ],
            [
                'title' => "2014.10.03 Сургут - Сертификат на сваи винтовые серийный выпуск. ТУ 5817-",
                'img' => "certificates/cert_2.jpg",
            ],
            [
                'title' => "2016.04.15 Сургут - Электроды покрытые металлические для сварки",
                'img' => "certificates/cert_3.jpg",
            ],
            [
                'title' => "2016.06.22 Сургут - Электроды покрытые металлические для ручной",
                'img' => "certificates/cert_4.jpg",
            ]
        ];

        DB::table("certificats")->insert($data);
    }
}
