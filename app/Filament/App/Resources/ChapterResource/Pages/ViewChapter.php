<?php

namespace App\Filament\App\Resources\ChapterResource\Pages;

use App\Filament\App\Resources\ChapterResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewChapter extends ViewRecord
{
    protected static string $resource = ChapterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
