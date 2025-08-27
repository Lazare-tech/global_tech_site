<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EquipeResource\Pages;
use App\Filament\Resources\EquipeResource\RelationManagers;
use App\Models\Equipe;
use Dom\Text;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

//
class EquipeResource extends Resource
{
    protected static ?string $model = Equipe::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('nom'),
                TextInput::make('post'),
                
                FileUpload::make('image')
                ->label('Image equipe')
                ->image() // force l’upload d’image
                ->directory('equipe_image') // dossier de stockage (storage/app/public/services)
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
                TextColumn::make('nom'),
                TextColumn::make('post'),
                
                ImageColumn::make('image')
                ->label('image')
                ->disk('public')
                ->circular()
                ->size(60)
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),  
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(), 

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
            'index' => Pages\ListEquipes::route('/'),
            'create' => Pages\CreateEquipe::route('/create'),
            'edit' => Pages\EditEquipe::route('/{record}/edit'),
            'view' => Pages\ViewEquipe::route('/{record}'), // 👈 page voir

        ];
    }    
}
