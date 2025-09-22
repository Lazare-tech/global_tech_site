<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Filament\Resources\TestimonialResource\RelationManagers;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\BadgeColumn;
//
class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

        protected static ?string $navigationIcon = 'heroicon-o-emoji-happy';
            protected static ?string $navigationLabel = 'Témoignages';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('name')->label('Nom')->required(),
                TextInput::make('email')->label('Email')->email(),
                TextInput::make('company')->label('Entreprise')->nullable(),
                FileUpload::make('photo')
                ->label('Photo')
                ->directory('testimonials/photos')
                ->nullable(),
                Textarea::make('message')
                ->label('Message')
                ->required(),
                Select::make('status')
                ->label('Statut')
                ->options([
                    'pending' => 'En attente',
                    'approved' => 'Approuve',
                ])->required()
                
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                ImageColumn::make('photo')->label('Photo'),
                TextColumn::make('name')->label('Nom')->searchable(),
                TextColumn::make('company')->label('Entreprise')->searchable(),
                TextColumn::make('message')->label('Message')->limit(50),
                BadgeColumn::make('status')
                    ->label('Statut')
                    ->colors([
                        'primary' => 'pending',
                        'success' => 'approved',
                    ]),
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
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
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
