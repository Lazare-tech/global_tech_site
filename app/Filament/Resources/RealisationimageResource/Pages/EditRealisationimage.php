<?php

namespace App\Filament\Resources\RealisationimageResource\Pages;

use App\Filament\Resources\RealisationimageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRealisationimage extends EditRecord
{
    protected static string $resource = RealisationimageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
