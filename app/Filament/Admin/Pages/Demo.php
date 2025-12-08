<?php

namespace App\Filament\Admin\Pages;

use App\Models\Book;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Page;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\HtmlString;
use LaraZeus\TranslatablePro\Filament\Forms\Components\MultiLang;

class Demo extends Page
{
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-document-text';

    protected string $view = 'filament.admin.pages.demo';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'vvv' => 'vvv',
            'title' => [
                'en' => '111',
                'pt' => 'pt title',
            ],
        ]);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->model(Book::class)
            ->components([
                TextInput::make('name')
                    ->default('default input value')
                    ->required(),

                Section::make('MultiLang Component Options')
                    ->columnSpanFull()
                    ->description('You can configure the component per language. disable and enable or set required')
                    ->schema([
                        MultiLang::make('title')
                            ->require(['en'])
                            ->disable(['pt'])
                            ->setTabSchema(
                                TextInput::make('title')
                            )
                            ->columnSpanFull(),
                    ]),
                Section::make('Custom Component')
                    ->columnSpanFull()
                    ->description(new HtmlString(
                        'and you can use any community components for the translations input'
                        .' like <a target="_blank" class="text-info-500" href="https://github.com/Abdulmajeed-Jamaan/filament-translatable-tabs">filament translatable tabs</a>'
                    ))
                    ->schema([
                        TextInput::make('title')
                            ->translatableTabs()
                            ->extraAttributes(['class' => 'zu-langs-tabs']),
                    ]),
            ])
            ->statePath('data');
    }

    public function create()
    {
        dd($this->form->getState());
    }
}
