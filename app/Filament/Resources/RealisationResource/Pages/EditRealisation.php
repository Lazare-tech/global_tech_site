<?php

namespace App\Filament\Resources\RealisationResource\Pages;

use App\Filament\Resources\RealisationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

//
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
    //
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
    // suppression ancienne image principale si besoin
    if ($this->oldImage && $this->oldImage !== $this->record->image) {
        Storage::disk('public')->delete($this->oldImage);
    }

    // gestion de l’image secondaire
    $data = $this->form->getState();

    if (!empty($data['new_image_secondaire'])) {
        $this->record->realisationImages()->create([
            'image' => $data['new_image_secondaire'],
        ]);
    }
}

    

}
