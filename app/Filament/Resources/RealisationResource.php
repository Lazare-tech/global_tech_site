<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RealisationResource\Pages;
use App\Filament\Resources\RealisationResource\RelationManagers;
use App\Models\Realisation;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\MultiSelect;
//
class RealisationResource extends Resource
{
    protected static ?string $model = Realisation::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('titre'),
                Textarea::make('description'),
                TextInput::make('lieu_realisation'),
                DatePicker::make('date_realisation')
                ->label('Date de realisation')
                ->required(),
                            
                            
                Repeater::make('realisationImages')
                ->label('Images du projet')
                ->relationship()
                ->schema([
                    FileUpload::make('image')
                        ->label('Photo du chantier')
                        ->image()
                        ->directory('realisation_images')
                        ->disk('public')
                        ->required(),
                ])
                ->minItems(1)
                ->maxItems(10),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('id'),
                TextColumn::make('slug'),
                TextColumn::make('titre'),
                TextColumn::make('description')->limit(50),
                TextColumn::make('lieu_realisation'),
                TextColumn::make('date_realisation'),
                ImageColumn::make('image')
                ->disk('public')
                ->circular()
                ->size(60)

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
            'index' => Pages\ListRealisations::route('/'),
            'create' => Pages\CreateRealisation::route('/create'),
            'edit' => Pages\EditRealisation::route('/{record}/edit'),
        ];
    }    
}
