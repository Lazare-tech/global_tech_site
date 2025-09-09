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
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\Placeholder;

//
class RealisationResource extends Resource
{
    protected static ?string $model = Realisation::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

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
                FileUpload::make('new_image')
                ->label('remplacer Image principale')
                ->image() // force l’upload d’image
                ->directory('realisation_image') // dossier de stockage (storage/app/public/services)
                ->disk('public')
                ->maxSize(2048) // limite en Ko (ici 2 Mo)
                ->required(),
                            
                //
                Placeholder::make('image_preview')
            ->label('Image principal et secondaires')
            ->content(fn ($record) => view('filament.components.image', [
                'record' => $record,
                'assocImages' => $record->realisationImages, // relation hasMany
            ])),
            //
              Repeater::make('realisationImages')
            ->label('Images secondaires')
            ->relationship() // attention : doit correspondre à la relation hasMany dans le modèle
            ->schema([
                FileUpload::make('new_image')
                    ->label('Ajouter une image')
                    ->image()
                    ->directory('realisation_image')
                    ->disk('public')
                    ->maxSize(2048)
                    ->imagePreviewHeight('120')
                    ->required(false)
            ])
            ->minItems(0)
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
                ->visibility('public')
                ->url(fn ($record) => asset('storage/' . $record->image))
            
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
            'index' => Pages\ListRealisations::route('/'),
            'create' => Pages\CreateRealisation::route('/create'),
            'edit' => Pages\EditRealisation::route('/{record}/edit'),
            'view' => Pages\ViewRealisation::route('/{record}'), // 👈 page voir

        ];
    }    
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
