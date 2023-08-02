<?php

namespace App\Filament\Resources\PackagesResource\Pages;

use App\Filament\Resources\PackagesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPackages extends ListRecords
{
    protected static string $resource = PackagesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
