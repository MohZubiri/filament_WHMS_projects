<?php

namespace App\Filament\Resources\EventsResource\Pages;

use App\Filament\Resources\EventsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEvents extends CreateRecord
{
    protected static string $resource = EventsResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
