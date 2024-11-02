<?php

namespace App\Filament\Resources\PendaftarBalikpapanResource\Pages;

use App\Filament\Resources\PendaftarBalikpapanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPendaftarBalikpapans extends ListRecords
{
    protected static string $resource = PendaftarBalikpapanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
