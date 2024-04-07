<?php

namespace App\Filament\Resources\OrderLineResource\Pages;

use App\Filament\Resources\OrderLineResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrderLines extends ListRecords
{
    protected static string $resource = OrderLineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
