<?php

namespace App\Filament\Resources\TourismDestinationResource\Pages;

use App\Filament\Resources\TourismDestinationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTourismDestination extends EditRecord
{
    protected static string $resource = TourismDestinationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
