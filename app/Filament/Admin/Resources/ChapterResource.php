<?php

namespace App\Filament\Admin\Resources;

use Filament\Schemas\Schema;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use App\Filament\Admin\Resources\ChapterResource\Pages\ListChapters;
use App\Filament\Admin\Resources\ChapterResource\Pages\CreateChapter;
use App\Filament\Admin\Resources\ChapterResource\Pages\EditChapter;
use App\Filament\Admin\Resources\ChapterResource\Pages;
use App\Models\Chapter;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use LaraZeus\TranslatablePro\Filament\Forms\Components\MultiLang;

class ChapterResource extends Resource
{
    protected static ?string $model = Chapter::class;

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                MultiLang::make('title')
                    ->require()
                    ->columnSpanFull(),

                TextInput::make('pages_number')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('cover')
                    ->required()
                    ->maxLength(255)
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->paginated([10, 25, 50])
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('book_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('pages_number')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('cover')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListChapters::route('/'),
            'create' => CreateChapter::route('/create'),
            'edit' => EditChapter::route('/{record}/edit'),
        ];
    }
}
