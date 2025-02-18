<?php

namespace App\Filament\Admin\Resources\TemplatesResource\Pages;

use App\Filament\Admin\Resources\TemplatesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTemplates extends CreateRecord
{
    protected static string $resource = TemplatesResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
