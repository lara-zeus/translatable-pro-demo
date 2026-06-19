<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BookResource\Pages;
use App\Filament\Admin\Resources\BookResource\RelationManagers\ChaptersRelationManager;
use App\Models\Book;
use Filament\Actions;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use LaraZeus\TranslatablePro\Filament\Forms\Components\MultiLang;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;

    protected static string|\UnitEnum|null $navigationGroup = 'Book Store';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Content')
                    ->columnSpanFull()
                    ->schema([
                        MultiLang::make('title')
                            ->require()
                            ->columnSpanFull(),

                        MultiLang::make('desc')
                            ->columnSpanFull()
                            ->setTabSchema(
                                RichEditor::make('desc'),
                            ),
                    ]),

                Section::make('Book settings')
                    ->compact()
                    ->columns([
                        'default' => 1,
                        'md' => 2,
                    ])
                    ->schema([
                        FileUpload::make('cover')
                            ->image(),

                        Select::make('cat_id')
                            ->relationship('cat', 'name')
                            ->phrasesSearchable(),
                    ]),

                Section::make('Meta')
                    ->extraAttributes(['class' => 'meta_form_input'])
                    ->relationship('meta')
                    ->compact()
                    ->collapsible()
                    ->schema([
                        MultiLang::make('title')
                            ->columnSpanFull(),
                    ]),

                Section::make('Chapters')
                    ->columnSpanFull()
                    ->collapsible()
                    ->schema([
                        Repeater::make('chapters')
                            ->extraAttributes(['class' => 'chapters_form_input'])
                            ->columnSpanFull()
                            ->grid()
                            ->relationship('chapters')
                            ->schema([
                                MultiLang::make('title'),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->paginated([10, 25, 50])
            ->columns([
                TextColumn::make('title')->phraseable(),
                TextColumn::make('cat.name')->label('category')->phraseable(),
                TextColumn::make('created_at'),
            ])
            ->filters([
                SelectFilter::make('cat.name')
                    ->label('Category')
                    ->relationship('cat', 'id'),
            ])
            ->recordActions([
                Actions\EditAction::make(),
                Actions\ViewAction::make(),
            ])
            ->toolbarActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            ChaptersRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
        ];
    }
}
