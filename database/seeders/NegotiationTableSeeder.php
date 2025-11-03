<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NegotiationTable;

class NegotiationTableSeeder extends Seeder
{
    public function run(): void
    {
        // Crear las 112 mesas numeradas del 01 al 112
        for ($i = 1; $i <= 112; $i++) {
            NegotiationTable::create([
                'table_number' => $i,
                'is_reserved' => false,
            ]);
        }
    }
}
