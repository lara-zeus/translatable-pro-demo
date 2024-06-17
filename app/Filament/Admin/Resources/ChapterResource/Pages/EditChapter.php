<?php

namespace App\Filament\Admin\Resources\ChapterResource\Pages;

use App\Filament\Admin\Resources\ChapterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditChapter extends EditRecord
{
    protected static string $resource = ChapterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
