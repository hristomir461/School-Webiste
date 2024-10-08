<?php

namespace App\Filament\Resources\SchoolDocumentResource\Pages;

use App\Filament\Resources\SchoolDocumentResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSchoolDocuments extends ManageRecords
{
    protected static string $resource = SchoolDocumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
