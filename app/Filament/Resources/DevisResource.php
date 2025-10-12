<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DevisResource\Pages;
use App\Filament\Resources\DevisResource\RelationManagers;
use App\Models\Devis;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Infolists\Components\TextEntry;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReponseDevis;
//
class DevisResource extends Resource
{
    protected static ?string $model = Devis::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('nom'),
                TextInput::make('numero'),
                TextInput::make('email'),
                Textarea::make('message')
            ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('id'),
                TextColumn::make('nom'),
                TextColumn::make('numero'),
                TextColumn::make('email'),
                TextColumn::make('message')->limit(50)
            ])
            ->filters([
                //
            ])
             ->actions([
            Tables\Actions\ViewAction::make(),
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
               Tables\Actions\Action::make('Répondre')
        ->icon('heroicon-o-mail')
        ->color('success')
        ->label('Répondre au devis') // Texte ajusté
        ->form([
            Forms\Components\Textarea::make('reponse') // Nom de la variable sans accent
                ->label('Votre réponse')
                ->required(),

            Forms\Components\FileUpload::make('fichiers_joints') // Nom de variable unique
                ->label('Joindre des fichiers')
                ->multiple()
                ->directory('reponses-devis') // Dossier de stockage temporaire/permanent
                ->preserveFilenames()
                ->maxSize(9096) // 9MB
                ->helperText('Formats acceptés : PDF, JPG, PNG, DOCX'),
        ])
        ->action(function (array $data, $record): void {
            // $data['fichiers_joints'] contiendra un tableau des chemins des fichiers stockés
            $fichiers = $data['fichiers_joints'] ?? [];

            Mail::to($record->email)->send(
                // 1. Passez le corps de la réponse et les chemins des fichiers à la Mailable
                new ReponseDevis($data['reponse'], $fichiers)
            );
        })
        ->modalHeading('Envoyer une réponse au devis')
        ->modalButton('Envoyer le mail')
        ->successNotificationTitle('Réponse envoyée avec succès ✅')
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
            'index' => Pages\ListDevis::route('/'),
            'create' => Pages\CreateDevis::route('/create'),
            'edit' => Pages\EditDevis::route('/{record}/edit'),
            'view' => Pages\ViewDevis::route('/{record}'), // 👈 page voir

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
