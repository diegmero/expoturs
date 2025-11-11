<?php

namespace App\Filament\Resources\NegotiationTableResource\Pages;

use App\Filament\Resources\NegotiationTableResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNegotiationTable extends EditRecord
{
    protected static string $resource = NegotiationTableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
