<?php

use Illuminate\Support\Facades\Route;
use LaraZeus\TranslatablePro\Facades\ActiveLanguage;

Route::get('/', \App\Livewire\Books::class);

Route::get('/phrases', function () {
    $book = \App\Models\Book::latest()->first();

    $bookPhr = $book->phrases()
        ->where('lang_code', ActiveLanguage::get())
        ->where('key', 'title')
        ->first();

    if ($bookPhr !== null) {
        dump($bookPhr->toArray());
    }

    // helpers
    $book->setPhrase('New Title '.rand(1, 99), 'title');
    $book->getPhrase('title');
    $book->getPhrases('title');
    $book->deleteAllPhrase('title');
    $book->deletePhrase('title');
    $book->phrases->first()->toArray();
});
