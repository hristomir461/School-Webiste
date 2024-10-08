<?php

namespace App\Filament\Resources\PublicCouncilResource\Pages;

use App\Filament\Resources\PublicCouncilResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPublicCouncil extends EditRecord
{
    protected static string $resource = PublicCouncilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
