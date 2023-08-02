<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HallWeddingResource\Pages;
use App\Filament\Resources\HallWeddingResource\RelationManagers;
use App\Models\HallWedding;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HallWeddingResource extends Resource
{
    protected static ?string $model = HallWedding::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->required()
                ->label('الاسم')
                ->maxLength(255),
            Forms\Components\TextInput::make('capacity')
            ->label('سعة القاعة')
                ->required(),
                Forms\Components\TextInput::make('latit')

                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('longit')
                ->required()
                ->maxLength(255),
                Forms\Components\Select::make('city_id')
                ->label('المحافظة')
                ->relationship('city','name_ar'),



                Forms\Components\TextInput::make('address')
                    ->required()
                    ->label('العنوان')
                    ->maxLength(255),
                Forms\Components\TextInput::make('contact_number')
                ->label('سعة القاعة')
                    ->required(),
                Forms\Components\TextInput::make('phone')
                    ->tel(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('city_id'),
                Tables\Columns\TextColumn::make('latit'),
                Tables\Columns\TextColumn::make('longit'),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('contact_number'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('capacity'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHallWeddings::route('/'),
            'create' => Pages\CreateHallWedding::route('/create'),
            'edit' => Pages\EditHallWedding::route('/{record}/edit'),
        ];
    }
}
