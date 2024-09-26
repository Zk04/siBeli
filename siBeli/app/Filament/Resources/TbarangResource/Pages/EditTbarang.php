<?php

namespace App\Filament\Resources\TbarangResource\Pages;

use App\Filament\Resources\TbarangResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTbarang extends EditRecord
{
    protected static string $resource = TbarangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
