<?php

namespace App\Filament\Resources\HospitalitySuiteResource\Pages;

use App\Filament\Resources\HospitalitySuiteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHospitalitySuite extends EditRecord
{
    protected static string $resource = HospitalitySuiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
