<?php

namespace App\Filament\User\Resources\InvitationsResource\Pages;

use App\Filament\User\Resources\InvitationsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInvitations extends CreateRecord
{
    protected static string $resource = InvitationsResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
