<?php

namespace App\Filament\App\Resources\BookResource\Pages;

use App\Filament\App\Resources\BookResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBook extends CreateRecord
{
    protected static string $resource = BookResource::class;
}
