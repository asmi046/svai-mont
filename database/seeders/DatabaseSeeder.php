<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            SaleSeeder::class,
            SeoDataSeeder::class,
            UserSeeder::class,
            CitySeeder::class,
            PriceVidgetSeeder::class,
            CertificatSeeder::class,
            ServiceSeeder::class,
            ProductSeeder::class,
            ParametrSeeder::class,
            GalerySeeder::class,
            ContactSeeder::class,
            MenuSeeder::class,
            QuestionSeeder::class,
            PageSeeder::class,
            FondationSeeder::class,
            ReviewSeeder::class
        ]);
    }
}
