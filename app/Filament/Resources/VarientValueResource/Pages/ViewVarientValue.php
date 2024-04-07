<?php

namespace App\Filament\Resources\VarientValueResource\Pages;

use App\Filament\Resources\VarientValueResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewVarientValue extends ViewRecord
{
    protected static string $resource = VarientValueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
