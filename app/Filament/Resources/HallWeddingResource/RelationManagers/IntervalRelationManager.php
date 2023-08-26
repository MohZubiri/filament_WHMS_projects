<?php

namespace App\Filament\Resources\HallWeddingResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\TimePicker;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IntervalRelationManager extends RelationManager
{
    protected static string $relationship = 'hallInterval';

    protected static ?string $recordTitleAttribute = 'price';
    protected static ?string $pluralModelLabel  = 'فترات القاعة ';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric(),
                    Forms\Components\TextInput::make('first_price')
                    ->required()
                    ->numeric(),

                    TimePicker::make('start_time')


                        ->required(),
                    TimePicker::make('end_time')


                        ->required()

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('first_price'),
                Tables\Columns\TextColumn::make('start_time'),
                Tables\Columns\TextColumn::make('end_time'),
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
