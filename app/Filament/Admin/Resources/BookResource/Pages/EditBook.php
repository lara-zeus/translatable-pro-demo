<?php

namespace App\Filament\Admin\Resources\BookResource\Pages;

use Filament\Actions\DeleteAction;
use App\Filament\Admin\Resources\BookResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBook extends EditRecord
{
    protected static string $resource = BookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
