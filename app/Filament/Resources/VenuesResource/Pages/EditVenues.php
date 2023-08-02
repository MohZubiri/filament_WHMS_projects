<?php

namespace App\Filament\Resources\VenuesResource\Pages;

use App\Filament\Resources\VenuesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVenues extends EditRecord
{
    protected static string $resource = VenuesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
