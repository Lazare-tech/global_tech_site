<?php

namespace App\Filament\Resources\RealisationResource\Pages;

use App\Filament\Resources\RealisationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRealisation extends EditRecord
{
    protected static string $resource = RealisationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    //
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
