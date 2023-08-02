<?php

namespace App\Filament\Resources\PaymentsResource\Pages;

use App\Filament\Resources\PaymentsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPayments extends ListRecords
{
    protected static string $resource = PaymentsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
