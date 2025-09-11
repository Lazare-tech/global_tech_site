<?php

namespace App\Filament\Resources\PartenaireResource\Pages;

use App\Filament\Resources\PartenaireResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Forms\Components\Placeholder;
//
class ViewPartenaire extends ViewRecord
{
    protected static string $resource = PartenaireResource::class;
    //
    protected function getFormSchema(): array
{
    return [
        Placeholder::make('image')
            ->label('Photo')
            ->content(fn ($record) => view('filament.components.image', ['record' => $record])),
                    // Nom
        Placeholder::make('alt_text')
            ->label('Nom')
            ->content(fn ($record) => $record->alt_text),

    
        
    ];
}
}
