<?php

namespace App\Filament\Admin\Resources\BookResource\Pages;

use App\Filament\Admin\Resources\BookResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBooks extends ListRecords
{
    protected static string $resource = BookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    /*public function tours(): array
    {
        return [
            Tour::make(id: 'main')
                ->steps(
                    Step::make('.fi-ta-header-cell')
                        ->title(title: 'lazy loaded!')
                        ->description('the title and category title are translatable, and lazy loaded for fast performance, and ready for sortable'),

                    Step::make('.fi-ta-search-field')
                        ->title(title: 'Searchable!')
                        ->description('try searching for titles or categories, any translatable are searchable by default')
                ),
        ];
    }*/
}
