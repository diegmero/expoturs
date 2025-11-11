<?php

namespace App\Filament\Resources\HospitalitySuiteResource\Pages;

use App\Filament\Resources\HospitalitySuiteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHospitalitySuites extends ListRecords
{
    protected static string $resource = HospitalitySuiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
