<?php

namespace App\Filament\Admin\Resources;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use App\Filament\Admin\Resources\PostResource\Pages\ListPosts;
use App\Filament\Admin\Resources\PostResource\Pages\CreatePost;
use App\Filament\Admin\Resources\PostResource\Pages\EditPost;
use App\Filament\Admin\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use LaraZeus\TranslatablePro\Filament\Forms\Components\MultiLang;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),

                Section::make('seo')
                    ->relationship('seo')
                    ->compact()
                    ->columns()
                    ->schema([
                        MultiLang::make('title'),
                        MultiLang::make('description'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('seo.title'),
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

    public static function getPages(): array
    {
        return [
            'index' => ListPosts::route('/'),
            'create' => CreatePost::route('/create'),
            'edit' => EditPost::route('/{record}/edit'),
        ];
    }
}
