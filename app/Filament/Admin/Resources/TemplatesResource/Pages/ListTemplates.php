<?php

namespace App\Filament\Admin\Resources\TemplatesResource\Pages;

use App\Filament\Admin\Resources\TemplatesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTemplates extends ListRecords
{
    protected static string $resource = TemplatesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
