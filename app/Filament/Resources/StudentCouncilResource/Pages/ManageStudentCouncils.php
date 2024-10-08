<?php

namespace App\Filament\Resources\StudentCouncilResource\Pages;

use App\Filament\Resources\StudentCouncilResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageStudentCouncils extends ManageRecords
{
    protected static string $resource = StudentCouncilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
