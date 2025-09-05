<?php

namespace App\Filament\Admin\Resources;

use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use App\Filament\Admin\Resources\CategoryResource\Pages\CatBooks;
use App\Filament\Admin\Resources\CategoryResource\Pages\ListCategories;
use App\Filament\Admin\Resources\CategoryResource\Pages\CreateCategory;
use App\Filament\Admin\Resources\CategoryResource\Pages\EditCategory;
use App\Filament\Admin\Resources\CategoryResource\Pages;
use App\Models\Category;
use Filament\Resources\Pages\Page;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use LaraZeus\TranslatablePro\Filament\Forms\Components\MultiLang;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static string | \UnitEnum | null $navigationGroup = 'Book Store';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                MultiLang::make('name')
                    ->require()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->paginated([10, 25, 50])
            ->defaultSort('id', 'desc')
            ->columns([
                // @phpstan-ignore-next-line
                TextColumn::make('name')
                    ->phraseable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRecordSubNavigation(Page $page): array
    {
        return $page->generateNavigationItems([
            CatBooks::class,
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCategories::route('/'),
            'create' => CreateCategory::route('/create'),
            'edit' => EditCategory::route('/{record}/edit'),
            'books' => CatBooks::route('/{record}/books'),
        ];
    }
}
