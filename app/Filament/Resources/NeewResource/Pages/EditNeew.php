<?php

namespace App\Filament\Resources\NeewResource\Pages;

use App\Filament\Resources\NeewResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNeew extends EditRecord
{
    protected static string $resource = NeewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
