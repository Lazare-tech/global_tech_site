<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroResource\Pages;
use App\Filament\Resources\HeroResource\RelationManagers;
use App\Models\Hero;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

//
class HeroResource extends Resource
{
    protected static ?string $model = Hero::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('nom_page'),
                Textarea::make('texte_principal'),
                Textarea::make('texte_secondaire'),
                TextInput::make('call_to_action_first'),
                TextInput::make('call_to_action_second'),
                
                FileUpload::make('image')
                ->label('Image de la page')
                ->image() // force l’upload d’image
                ->directory('hero_image') // dossier de stockage (storage/app/public/services)
                ->disk('public')
                ->maxSize(2048) // limite en Ko (ici 2 Mo)
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('id'),
                TextColumn::make('slug'),
                TextColumn::make('nom_page'),
                TextColumn::make('texte_principal'),
                TextColumn::make('texte_secondaire'),
                TextColumn::make('call_to_action_first'),
                TextColumn::make('call_to_action_second'),
                ImageColumn::make('image')
                ->label('Image de la page')
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
            'index' => Pages\ListHeroes::route('/'),
            'create' => Pages\CreateHero::route('/create'),
            'edit' => Pages\EditHero::route('/{record}/edit'),
        ];
    }    
}
