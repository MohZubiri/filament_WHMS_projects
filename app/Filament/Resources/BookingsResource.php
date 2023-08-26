<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingsResource\Pages;
use App\Filament\Resources\BookingsResource\RelationManagers;
use App\Models\Bookings;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookingsResource extends Resource
{
    protected static ?string $model = Bookings::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $pluralModelLabel  = 'إداره الحجوزات';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('client_id')->relationship('client', 'name')
                    ->required(),
                Forms\Components\Select::make('event_id')->relationship('event', 'name')
                    ->required(),
                Forms\Components\Select::make('venue_id')->relationship('venue', 'name')
                    ->required(),
                Forms\Components\Select::make('package_id')->relationship('package', 'name')
                    ->required(),
                    Forms\Components\Hidden::make('user_id')->default(auth()->user()->id)
                    ->required(),
                Forms\Components\DatePicker::make('booking_date')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('client.name'),
                Tables\Columns\TextColumn::make('event.name'),
                Tables\Columns\TextColumn::make('venue.name'),
                Tables\Columns\TextColumn::make('package.name'),
                Tables\Columns\TextColumn::make('user.name'),
                Tables\Columns\TextColumn::make('booking_date')
                ->date('d-m-YY'),
                Tables\Columns\TextColumn::make('created_at')
                ->date('d-m-YY')
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
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBookings::route('/create'),
            'edit' => Pages\EditBookings::route('/{record}/edit'),
        ];
    }
}
