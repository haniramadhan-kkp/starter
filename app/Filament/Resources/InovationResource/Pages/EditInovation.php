<?php

namespace App\Filament\Resources\InovationResource\Pages;

use App\Filament\Resources\InovationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInovation extends EditRecord
{
    protected static string $resource = InovationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
