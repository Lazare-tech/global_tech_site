<?php

namespace App\Filament\Resources\ProjetRealiseResource\Pages;

use App\Filament\Resources\ProjetRealiseResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProjetRealises extends ListRecords
{
    protected static string $resource = ProjetRealiseResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
