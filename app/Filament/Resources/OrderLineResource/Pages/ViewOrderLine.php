<?php

namespace App\Filament\Resources\OrderLineResource\Pages;

use App\Filament\Resources\OrderLineResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewOrderLine extends ViewRecord
{
    protected static string $resource = OrderLineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
