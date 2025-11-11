<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HospitalitySuite;

class HospitalitySuiteSeeder extends Seeder
{
    public function run(): void
    {
        // Crear las 17 suites numeradas del 01 al 17
        for ($i = 1; $i <= 17; $i++) {
            HospitalitySuite::create([
                'suite_number' => $i,
                'is_reserved' => false,
            ]);
        }
    }
}
