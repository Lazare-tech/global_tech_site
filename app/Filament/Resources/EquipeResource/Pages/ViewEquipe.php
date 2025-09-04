<?php

namespace App\Filament\Resources\EquipeResource\Pages;

use App\Filament\Resources\EquipeResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Placeholder;

class ViewEquipe extends ViewRecord
{
    protected static string $resource = EquipeResource::class;
  
protected function getFormSchema(): array
{
    return [
        Placeholder::make('image')
            ->label('Photo')
            ->content(fn ($record) => view('filament.components.image', ['record' => $record])),
                    // Nom
        Placeholder::make('nom')
            ->label('Nom')
            ->content(fn ($record) => $record->nom),

        // Poste
        Placeholder::make('post')
            ->label('Poste')
            ->content(fn ($record) => $record->post),
        
    ];
}
}
