<?php

namespace App\Filament\Resources\VarientValueResource\Pages;

use App\Filament\Resources\VarientValueResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVarientValue extends EditRecord
{
    protected static string $resource = VarientValueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
