<?php

namespace App\Filament\Resources\RealisationResource\Pages;

use App\Filament\Resources\RealisationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRealisation extends CreateRecord
{
    protected static string $resource = RealisationResource::class;
    //
    public function getRedirectUrl():string
    {
        return $this->getResource()::getUrl('index');

    }
}
