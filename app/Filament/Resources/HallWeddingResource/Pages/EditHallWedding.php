<?php

namespace App\Filament\Resources\HallWeddingResource\Pages;

use App\Filament\Resources\HallWeddingResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHallWedding extends EditRecord
{
    protected static string $resource = HallWeddingResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
