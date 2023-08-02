<?php

namespace App\Filament\Resources\VenuesResource\Pages;

use App\Filament\Resources\VenuesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVenues extends CreateRecord
{
    protected static string $resource = VenuesResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
