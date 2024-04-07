<?php

namespace App\Filament\Resources\OrderLineResource\Pages;

use App\Filament\Resources\OrderLineResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrderLine extends CreateRecord
{
    protected static string $resource = OrderLineResource::class;
}
