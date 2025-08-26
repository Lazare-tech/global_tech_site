<?php

namespace App\Filament\Resources\RealisationResource\Pages;

use App\Filament\Resources\RealisationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRealisations extends ListRecords
{
    protected static string $resource = RealisationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
