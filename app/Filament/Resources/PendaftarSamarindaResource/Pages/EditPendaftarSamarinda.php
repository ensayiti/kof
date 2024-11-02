<?php

namespace App\Filament\Resources\PendaftarSamarindaResource\Pages;

use App\Filament\Resources\PendaftarSamarindaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPendaftarSamarinda extends EditRecord
{
    protected static string $resource = PendaftarSamarindaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
