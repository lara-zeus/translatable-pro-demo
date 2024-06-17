<?php

namespace App\Filament\App\Resources\ChapterResource\Pages;

use App\Filament\App\Resources\ChapterResource;
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
