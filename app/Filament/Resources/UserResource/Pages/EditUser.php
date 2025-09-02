<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    //
    protected function getRedirectUrl(): string
    {
        $user = auth()->user();

        if ($user?->is_superuser) {
            // Après modification → retour à la liste
            return $this->getResource()::getUrl('index');
        }

        // Après modification → rester sur sa propre page d’édition
        return $this->getResource()::getUrl('edit', ['record' => $user->id]);
    }
    
}
