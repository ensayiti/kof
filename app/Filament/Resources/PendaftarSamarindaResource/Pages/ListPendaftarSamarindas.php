<?php

namespace App\Filament\Resources\PendaftarSamarindaResource\Pages;

use App\Filament\Resources\PendaftarSamarindaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPendaftarSamarindas extends ListRecords
{
    protected static string $resource = PendaftarSamarindaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
