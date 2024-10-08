<?php

namespace App\Filament\Resources\PublicCouncilResource\Pages;

use App\Filament\Resources\PublicCouncilResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPublicCouncils extends ListRecords
{
    protected static string $resource = PublicCouncilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
