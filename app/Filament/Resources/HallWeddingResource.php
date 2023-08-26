<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HallWeddingResource\Pages;
use App\Filament\Resources\HallWeddingResource\RelationManagers;
use App\Models\HallWedding;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Cheesegrits\FilamentGoogleMaps\Fields\Map;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Support\Facades\FilamentAsset;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Validation\Rule;
use Livewire\TemporaryUploadedFile;

class HallWeddingResource extends Resource
{
    protected static ?string $model = HallWedding::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $pluralModelLabel  = 'إدارة القاعات';
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
                  Map::make('location')
                  ->defaultLocation([39.526610, -107.727261])
                  ->mapControls([
                    'mapTypeControl'    => true,
                    'scaleControl'      => true,
                    'streetViewControl' => true,
                    'rotateControl'     => true,
                    'fullscreenControl' => true,
                    'searchBoxControl'  => false, // creates geocomplete field inside map
                    'zoomControl'       => false,
                ]),
                Forms\Components\TextInput::make('latit')

                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('longit')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('city_id')
                    ->label('المحافظة')
                    ->searchable()
                    ->relationship('city', 'name_ar'),

                Forms\Components\Hidden::make('user_id')->default(auth()->user()->id)
                    ->required(),

                Forms\Components\TextInput::make('address')
                    ->required()
                    ->label('العنوان')
                    ->maxLength(255),
                Forms\Components\TextInput::make('contact_number')
                    ->label('رقم الهاتف')
                    ->required(),
                Forms\Components\TextInput::make('phone')
                    ->label('الموبايل ')
                    ->tel(),
                    FileUpload::make('main_image')
                    ->image()



                    ->required()
                    ->label('الصورة الرئيسية '),
                    FileUpload::make('alt_image')
                   ->multiple()
                   ->image()


                    ->nullable()
                    ->label('الصور المتبقية')


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('name')->label('الاسم'),
                Tables\Columns\TextColumn::make('capacity')->label('السعة'),
                ImageColumn::make('main_image')->label('صورة'),
                Tables\Columns\TextColumn::make('city.name_ar')->label('المدينة'),
                Tables\Columns\TextColumn::make('latit'),
                Tables\Columns\TextColumn::make('longit'),
                Tables\Columns\TextColumn::make('address')->label('العنوان'),
                Tables\Columns\TextColumn::make('contact_number')->label('رقم التواصل'),
                Tables\Columns\TextColumn::make('phone')->label('الموبايل'),

                Tables\Columns\TextColumn::make('created_at')->label('تاريخ الانشاء')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->label('تاريخ التعديل')
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
            RelationManagers\ServicesRelationManager::class,
            RelationManagers\IntervalRelationManager::class,
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
