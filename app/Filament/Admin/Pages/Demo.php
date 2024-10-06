<?php

namespace App\Filament\Admin\Pages;

use App\Models\Book;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Page;
use LaraZeus\TranslatablePro\Filament\Forms\Components\MultiLang;

class Demo extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.admin.pages.demo';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'title' => [
                'en' => 'en title',
                'pt' => 'pt title',
            ],
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->model(Book::class)
            ->schema([
                TextInput::make('vvv'),
                MultiLang::make('title')
                    ->default(['en' => 'dsdd'])
                    ->required()
                    ->columnSpanFull(),
            ])
            ->statePath('data');
    }
}
