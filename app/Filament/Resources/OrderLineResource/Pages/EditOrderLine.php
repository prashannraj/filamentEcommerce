<?php

namespace App\Filament\Resources\OrderLineResource\Pages;

use App\Filament\Resources\OrderLineResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrderLine extends EditRecord
{
    protected static string $resource = OrderLineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
