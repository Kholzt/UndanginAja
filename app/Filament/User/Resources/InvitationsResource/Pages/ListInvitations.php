<?php

namespace App\Filament\User\Resources\InvitationsResource\Pages;

use App\Filament\User\Resources\InvitationsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInvitations extends ListRecords
{
    protected static string $resource = InvitationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
