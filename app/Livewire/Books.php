<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class Books extends Component
{
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.books')
            ->with('books', Book::get());
    }
}
