<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\BookResource\Pages;
use App\Filament\App\Resources\BookResource\RelationManagers\ChaptersRelationManager;
use App\Models\Book;
use App\Models\Category;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use FilamentTiptapEditor\TiptapEditor;
use LaraZeus\TranslatablePro\Filament\Forms\Components\MultiLang;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                MultiLang::make('title')
                    ->required()
                    ->columnSpanFull(),

                MultiLang::make('desc')
                    ->setTabSchema(
                        TiptapEditor::make('desc'),
                    ),

                Select::make('cat_id')
                    ->getOptionLabelFromRecordUsing(fn (Category $record) => $record->name)
                    ->relationship('cat', 'id'),

                Section::make('meta')
                    ->relationship('meta')
                    ->schema([
                        MultiLang::make('title'),
                    ]),

                /*MultiLang::make('chapters')
                    ->dehydrated(false)
                    ->setTabSchema(
                        Select::make('chapters')
                            ->relationship(),
                    ),*/

                /*MultiLang::make('cover')
                    ->setTabSchema(
                        FileUpload::make('langs')->image(),
                    ),*/

                FileUpload::make('cover')->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('id', 'desc')
            ->columns([
                // @phpstan-ignore-next-line
                Tables\Columns\TextColumn::make('title')
                    ->phraseable(),
            ])
            ->filters([
                //
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
