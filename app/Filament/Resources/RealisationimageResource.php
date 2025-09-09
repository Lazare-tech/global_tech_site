<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RealisationimageResource\Pages;
use App\Filament\Resources\RealisationimageResource\RelationManagers;
use App\Models\Realisationimage;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\Placeholder;


//
class RealisationimageResource extends Resource
{
    protected static ?string $model = Realisationimage::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                 Placeholder::make('image_preview')
            ->label('Photo')
            ->content(fn ($record) => view('filament.components.image_realisation', ['record' => $record])),
       
                FileUpload::make('new_image')
                ->label('remplacer Image')
                ->image() // force l’upload d’image
                ->directory('realisation_image') // dossier de stockage (storage/app/public/services)
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
                TextColumn::make('realisation_id'),
                TextColumn::make('realisation.titre'),
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
            'index' => Pages\ListRealisationimages::route('/'),
            'create' => Pages\CreateRealisationimage::route('/create'),
            'edit' => Pages\EditRealisationimage::route('/{record}/edit'),
            'view' => Pages\ViewRealisationimage::route('/{record}'), // 👈 page voir

        ];
    }    
    //
      public static function canEdit(Model $record): bool
    {
        return auth()->user()?->is_superuser ?? false;
    }

    public static function canDelete(Model $record): bool
    {
        return auth()->user()?->is_superuser ?? false;
    }
    public static function canCreate(): bool
    {
        return auth()->user()?->is_superuser ?? false;
    }
}
