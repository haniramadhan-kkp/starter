<?php

namespace App\Filament\Resources\InovationResource\Pages;

use App\Filament\Resources\InovationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInovations extends ListRecords
{
    protected static string $resource = InovationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
