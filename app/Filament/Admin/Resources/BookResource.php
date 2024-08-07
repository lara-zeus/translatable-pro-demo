<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BookResource\Pages;
use App\Filament\Admin\Resources\BookResource\RelationManagers\ChaptersRelationManager;
use App\Models\Book;
use App\Models\Category;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use FilamentTiptapEditor\TiptapEditor;
use LaraZeus\TranslatablePro\Filament\Forms\Components\MultiLang;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;

    protected static ?string $navigationGroup = 'Book Store';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                MultiLang::make('title')
                    ->required()
                    ->columnSpanFull(),

                Grid::make()
                    ->columns()
                    ->schema([
                        MultiLang::make('desc')
                            ->columnSpan(1)
                            ->setTabSchema(
                                TiptapEditor::make('desc')
                                    ->profile('minimal'),
                            ),

                        Grid::make()
                            ->columnSpan(1)
                            ->columns(1)
                            ->schema([
                                Select::make('cat_id')
                                    ->extraAttributes(['class' => 'cat_form_input'])
                                    ->getOptionLabelFromRecordUsing(fn (Category $record) => $record->name)
                                    ->relationship('cat', 'id'),
                                FileUpload::make('cover')->image(),
                            ]),
                    ]),

                Section::make('meta')
                    ->extraAttributes(['class' => 'meta_form_input'])
                    ->relationship('meta')
                    ->schema([
                        MultiLang::make('title'),
                    ]),

                Repeater::make('chapters')
                    ->extraAttributes(['class' => 'chapters_form_input'])
                    ->columnSpanFull()
                    ->grid()
                    ->relationship('chapters')
                    ->schema([
                        MultiLang::make('title'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('cat.name')->label('category'),
                TextColumn::make('created_at'),
            ])
            ->filters([
                SelectFilter::make('cat.name')
                    ->label('Category')
                    ->relationship('cat', 'id'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
