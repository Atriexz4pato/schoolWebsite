<?php

namespace App\Filament\Resources\NeewResource\Pages;

use App\Filament\Resources\NeewResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNeews extends ListRecords
{
    protected static string $resource = NeewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
