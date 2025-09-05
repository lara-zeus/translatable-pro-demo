<?php

namespace App\Filament\Admin\Resources\PostResource\Pages;

use Filament\Actions\DeleteAction;
use App\Filament\Admin\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
