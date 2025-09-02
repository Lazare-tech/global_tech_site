<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\Toggle;
//
class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('name'),
                TextInput::make('email'),
                TextInput::make('password')
                ->password()
                ->minLength(8)
                ->nullable()
                ->dehydrateStateUsing(fn($state) => bcrypt($state))
                ->label('Nouveau mot de passe'),
                
                Toggle::make('is_superuser')
                ->label('Superuser')
                ->default(false)
                ->visible(fn () => auth()->user()?->is_superuser ?? false), // visible seulement pour superuser
    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('is_superuser'),
                TextColumn::make('email'),
                TextColumn::make('password'),
                TextColumn::make('created_at')->dateTime(),
                TextColumn::make('updated-at')->dateTime(),
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                ->visible(fn () => auth()->user()?->is_superuser ?? false),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }    
    //
    
    // public static function canEdit(Model $record): bool
    // {
    //     return auth()->user()?->is_superuser ?? false;
    // }

    // public static function canDelete(Model $record): bool
    // {
    //     return auth()->user()?->is_superuser ?? false;
    // }
    // public static function canCreate(): bool
    // {
    //     return auth()->user()?->is_superuser ?? false;
    // }
    

    //
//     public static function getEloquentQuery(): Builder
// {
//     $query = parent::getEloquentQuery();

//     // Si l'utilisateur connecté n'est pas superuser
//     if (! (auth()->user()?->is_superuser ?? false)) {
//         $query->where('id', auth()->id()); // ne retourne que son propre record
//     }

//     return $query;
// }
}

