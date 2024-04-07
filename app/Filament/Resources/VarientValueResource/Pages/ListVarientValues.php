<?php

namespace App\Filament\Resources\VarientValueResource\Pages;

use App\Filament\Resources\VarientValueResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVarientValues extends ListRecords
{
    protected static string $resource = VarientValueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
