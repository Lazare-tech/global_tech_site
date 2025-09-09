<?php

namespace App\Filament\Resources\RealisationimageResource\Pages;
use App\Filament\Resources\RealisationimageResource;

use Filament\Resources\Pages\ViewRecord;
use Filament\Forms\Components\Placeholder;
//
class ViewRealisationimage extends ViewRecord

{
    protected static string $resource = RealisationimageResource::class;
    protected function getFormSchema(): array
{
    return [
        Placeholder::make('image')
            ->label('Photo')
            ->content(fn ($record) => view('filament.components.image_realisation', ['record' => $record])),
                    // Nom
        Placeholder::make('realisation')
            ->label('Titre')
            ->content(fn ($record) => $record->realisation->titre),

      
        
    ];
}
}
