<?php

namespace App\Livewire;

use App\Models\Book;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Books extends Component
{
    use WithPagination;

    public function render(): View
    {
        $books = Book::query()
            ->with(['phrases','cat.phrases'])
            ->paginate(100);

        return view('livewire.books')
            ->with('books', $books);
    }
}
