<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    private const CITIES = [
        'Kyiv',
        'Odesa',
        'Mariupol',
        'Brovary',
        'Chernihiv',
    ];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::CITIES as $city) {
            DB::table('cities')->insert(['city' => $city]);
        }

        // \App\Models\User::factory(10)->create();
    }
}
