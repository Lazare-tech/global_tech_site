<?php

namespace App\Filament\Resources\ProjetRealiseResource\Pages;

use App\Filament\Resources\ProjetRealiseResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProjetRealise extends CreateRecord
{
    protected static string $resource = ProjetRealiseResource::class;
    //
    public function getRedirectUrl():string
    {
        return $this->getResource()::getUrl('index');

    }
}
