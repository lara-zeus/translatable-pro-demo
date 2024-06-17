<?php

namespace App\Filament\App\Resources\ChapterResource\Pages;

use App\Filament\App\Resources\ChapterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChapters extends ListRecords
{
    protected static string $resource = ChapterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
