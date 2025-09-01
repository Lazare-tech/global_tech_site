<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjetRealiseResource\Pages;
use App\Filament\Resources\ProjetRealiseResource\RelationManagers;
use App\Models\ProjetRealise;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjetRealiseResource extends Resource
{
    protected static ?string $model = ProjetRealise::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                
                TextInput::make('nombre_projet_realise'),
                TextInput::make('annee_experience'),
                TextInput::make('nombre_client_satisfait'),
                TextInput::make('nombre_zone_intervention')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('nombre_projet_realise'),
                TextColumn::make('annee_experience'),
                TextColumn::make('nombre_client_satisfait'),
                TextColumn::make('nombre_zone_intervention')
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
            'index' => Pages\ListProjetRealises::route('/'),
            'create' => Pages\CreateProjetRealise::route('/create'),
            'edit' => Pages\EditProjetRealise::route('/{record}/edit'),
        ];
    }    
}
