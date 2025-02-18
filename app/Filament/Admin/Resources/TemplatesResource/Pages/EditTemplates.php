<?php

namespace App\Filament\Admin\Resources\TemplatesResource\Pages;

use App\Filament\Admin\Resources\TemplatesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTemplates extends EditRecord
{
    protected static string $resource = TemplatesResource::class;
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
