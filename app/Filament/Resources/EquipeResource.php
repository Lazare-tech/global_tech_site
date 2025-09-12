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
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\Placeholder;

//
use Filament\Forms\Components\ViewField;
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
                TextInput::make('alt_text'),
               Placeholder::make('image_preview')
            ->label('Photo')
            ->content(fn ($record) => view('filament.components.image', ['record' => $record])),
       // Nouveau upload
            FileUpload::make('image')
                ->label('remplacer par une nouvelle image')
                ->image()
                ->disk('public')
                ->directory('equipe_image')
                ->maxSize(92160)
                ->required(false)
                ->imagePreviewHeight('150'), // prévisualisation immédiate de la nouvelle image
                 
                
         
               
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
