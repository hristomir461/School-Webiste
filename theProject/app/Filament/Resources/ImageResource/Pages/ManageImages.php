<?php

namespace App\Filament\Resources\ImageResource\Pages;

use App\Filament\Resources\ImageResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageImages extends ManageRecords
{
    protected static string $resource = ImageResource::class;
    protected static bool $canCreateAnother = false;
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->createAnother(false),
        ];
    }
}
