<?php

namespace App\Filament\Resources\NegotiationTableResource\Pages;

use App\Filament\Resources\NegotiationTableResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNegotiationTables extends ListRecords
{
    protected static string $resource = NegotiationTableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
