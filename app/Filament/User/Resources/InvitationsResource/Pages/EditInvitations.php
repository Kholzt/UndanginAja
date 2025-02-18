<?php

namespace App\Filament\User\Resources\InvitationsResource\Pages;

use App\Filament\User\Resources\InvitationsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInvitations extends EditRecord
{
    protected static string $resource = InvitationsResource::class;
    protected function getRedirectUrl(): ?string
    {
        return static::getResource()::getUrl('index');
    }
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
