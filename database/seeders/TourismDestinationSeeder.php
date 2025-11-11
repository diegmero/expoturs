<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TourismDestination;

class TourismDestinationSeeder extends Seeder
{
    public function run(): void
    {
        // Crear los 24 destinos numerados del 01 al 24
        for ($i = 1; $i <= 24; $i++) {
            TourismDestination::create([
                'destination_number' => $i,
                'is_reserved' => false,
            ]);
        }
    }
}
