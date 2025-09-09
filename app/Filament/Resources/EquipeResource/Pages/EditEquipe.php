<?php

namespace App\Filament\Resources\EquipeResource\Pages;

use App\Filament\Resources\EquipeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

//

class EditEquipe extends EditRecord
{
    protected static string $resource = EquipeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    
    //
     protected ?string $oldImage = null;
  protected function mutateFormDataBeforeSave(array $data): array
{
     $this->oldImage = $this->record->image ?? null;

    if (! empty($data['new_image'])) {
        $data['image'] = $data['new_image']; // Remplace l'ancienne
    }

    unset($data['new_image']); // On ne garde pas ce champ
    return $data;
}
//
    protected function afterSave(): void
{
    if ($this->oldImage && $this->oldImage !== $this->record->image) {
        Storage::disk('public')->delete($this->oldImage);
    }
}
    //
    public function getRedirectUrl():string
    {
        return $this->getResource()::getUrl('index');

    }
}
