<?php

namespace App\Filament\Admin\Resources\CategoryResource\Pages;

use Filament\Tables\Columns\TextColumn;
use Filament\Actions\CreateAction;
use Filament\Actions\AttachAction;
use Filament\Actions\ViewAction;
use Filament\Actions\EditAction;
use Filament\Actions\DetachAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DetachBulkAction;
use Filament\Actions\DeleteBulkAction;
use App\Filament\Admin\Resources\CategoryResource;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Pages\ManageRelatedRecords;
use Filament\Tables;
use Filament\Tables\Table;

class CatBooks extends ManageRelatedRecords
{
    protected static string $resource = CategoryResource::class;

    protected static string $relationship = 'books';

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationLabel(): string
    {
        return 'Cat Books';
    }

    /*public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
            ]);
    }*/

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                TextColumn::make('id')
                    ->sortable(),
                TextColumn::make('title')
                //    ->phraseable()
                ,

                TextColumn::make('cat.name')
                    ->phraseable(),
            ])
            ->headerActions([
                CreateAction::make(),
                AttachAction::make(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DetachAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DetachBulkAction::make(),
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
