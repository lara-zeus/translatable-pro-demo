<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class Books extends Component
{
    public function render()
    {
        return view('livewire.books')
            ->with('books',Book::get());
    }
}
