<?php

namespace App\Filament\Resources\ProjetRealiseResource\Pages;

use App\Filament\Resources\ProjetRealiseResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProjetRealise extends EditRecord
{
    protected static string $resource = ProjetRealiseResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    //
    public function getRedirectUrl():string
    {
        return $this->getResource()::getUrl('index');

    }
}
