<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\Chapter;
use App\Models\Meta;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $cat = Category::create([
            'name' => [
                'en' => 'Developers Books',
                'pt' => 'Livros para desenvolvedores',
            ],
        ]);

        $book = Book::create([
            'title' => [
                'en' => 'Consuming APIs in Laravel',
                'pt' => 'Consumindo APIs no Laravel',
            ],
            'desc' => [
                'en' => '{"type":"doc","content":[{"type":"paragraph","attrs":{"class":null,"style":null,"textAlign":"start"},"content":[{"type":"text","text":"Book Summary"}]},{"type":"paragraph","attrs":{"class":null,"style":null,"textAlign":"start"},"content":[{"type":"text","text":"Book Summary"}]},{"type":"paragraph","attrs":{"class":null,"style":null,"textAlign":"start"},"content":[{"type":"text","text":"Book Summary"}]},{"type":"paragraph","attrs":{"class":null,"style":null,"textAlign":"start"}}]}',
                'pt' => '{"type":"doc","content":[{"type":"paragraph","attrs":{"class":null,"style":null,"textAlign":"start"},"content":[{"type":"text","text":"Resumo do livro"}]},{"type":"paragraph","attrs":{"class":null,"style":null,"textAlign":"start"},"content":[{"type":"text","text":"Resumo do livro"}]},{"type":"paragraph","attrs":{"class":null,"style":null,"textAlign":"start"},"content":[{"type":"text","text":"Resumo do livro"}]},{"type":"paragraph","attrs":{"class":null,"style":null,"textAlign":"start"}}]}',
            ],
            'cat_id' => $cat->id,
        ]);

        Meta::create([
            'book_id' => $book->id,
            'title' => [
                'en' => 'Book Meta',
                'pt' => 'Meta do livro',
            ],
        ]);

        Chapter::create([
            'book_id' => $book->id,
            'title' => [
                'en' => 'Chapter 1',
                'pt' => 'Capítulo 1',
            ],
        ]);
    }
}
