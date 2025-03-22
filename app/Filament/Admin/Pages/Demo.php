<?php

namespace App\Filament\Admin\Pages;

use App\Models\Book;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Illuminate\Support\HtmlString;
use LaraZeus\TranslatablePro\Filament\Forms\Components\MultiLang;

class Demo extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.admin.pages.demo';

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

    public function form(Form $form): Form
    {
        return $form
            ->model(Book::class)
            ->schema([
                TextInput::make('name')
                    ->default('default input value')
                    ->required(),

                Section::make('MultiLang Component Options')
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
                    ->description(new HtmlString(
                        'and you can use any community components for the translations input'
                        .' like <a target="_blank" class="text-info-500" href="https://github.com/Abdulmajeed-Jamaan/filament-translatable-tabs">filament translatable tabs</a>'
                    ))
                    ->schema([
                        TextInput::make('title')
                            ->translatableTabs(),
                    ]),
            ])
            ->statePath('data');
    }

    public function create()
    {
        dd($this->form->getState());
    }
}
