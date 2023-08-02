<?php

namespace App\Filament\Resources\PackagesResource\Pages;

use App\Filament\Resources\PackagesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePackages extends CreateRecord
{
    protected static string $resource = PackagesResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
