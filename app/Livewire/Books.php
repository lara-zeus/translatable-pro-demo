<?php

namespace App\Livewire;

use App\Models\Book;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Books extends Component
{
    use WithPagination;

    public function render(): View
    {
        DB::connection()->enableQueryLog();

        $books = Book::query()
            ->with(['phrases', 'cat.phrases'])
            ->paginate(21);

        return view('livewire.books')
            ->with('queries', DB::getQueryLog())
            ->with('books', $books);
    }
}
