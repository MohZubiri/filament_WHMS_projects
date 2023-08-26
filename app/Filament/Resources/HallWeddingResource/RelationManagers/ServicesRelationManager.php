<?php

namespace App\Filament\Resources\HallWeddingResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServicesRelationManager extends RelationManager
{
    protected static string $relationship = 'hallService';

    protected static ?string $recordTitleAttribute = 'service_name';
    protected static ?string $pluralModelLabel  = 'خدمات القاعة ';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('service_name')
                ->label('اسم الخدمة')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\TextInput::make('price')
                    ->required()
                    ->label('سعر الخدمة')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('service_name')->label('اسم الخدمة'),
                Tables\Columns\TextColumn::make('price')->label('سعر الخدمة'),
            ])


            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
