<?php

namespace App\Filament\Resources\PendaftarBalikpapanResource\Pages;

use App\Filament\Resources\PendaftarBalikpapanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPendaftarBalikpapan extends EditRecord
{
    protected static string $resource = PendaftarBalikpapanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
