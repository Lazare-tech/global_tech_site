<?php

namespace App\Filament\Resources\NewsLetterResource\Pages;

use App\Filament\Resources\NewsLetterResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewsLetter extends EditRecord
{
    protected static string $resource = NewsLetterResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    public function getRedirectUrl():string
    {
        return $this->getResource()::getUrl('index');

    }
}
