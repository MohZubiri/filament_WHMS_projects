<?php

namespace App\Filament\Resources\VenuesResource\Pages;

use App\Filament\Resources\VenuesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVenues extends ListRecords
{
    protected static string $resource = VenuesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
