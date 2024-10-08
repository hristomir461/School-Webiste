<?php

namespace App\Filament\Resources\MonDocumentResource\Pages;

use App\Filament\Resources\MonDocumentResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageMonDocuments extends ManageRecords
{
    protected static string $resource = MonDocumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
