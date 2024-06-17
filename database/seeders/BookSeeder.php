<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\Meta;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $cat = Category::create([
            'name' => [
                'en' => 'Developers Books',
                'ar' => 'كتب المطورين',
            ],
        ]);

        $book = Book::create([
            'title' => [
                'en' => 'Consuming APIs in Laravel',
                'ar' => 'Consuming APIs in Laravel in arabic',
            ],
            'desc' => [
                'en' => '{"type":"doc","content":[{"type":"paragraph","attrs":{"class":null,"style":null,"textAlign":"start"},"content":[{"type":"text","text":"Book Desc"}]},{"type":"paragraph","attrs":{"class":null,"style":null,"textAlign":"start"},"content":[{"type":"text","text":"Book Desc"}]},{"type":"paragraph","attrs":{"class":null,"style":null,"textAlign":"start"},"content":[{"type":"text","text":"Book Desc"}]},{"type":"paragraph","attrs":{"class":null,"style":null,"textAlign":"start"}}]}',
                'ar' => '{"type":"doc","content":[{"type":"paragraph","attrs":{"class":null,"style":null,"textAlign":"start"},"content":[{"type":"text","text":"توصيف الكتاب"}]},{"type":"paragraph","attrs":{"class":null,"style":null,"textAlign":"start"},"content":[{"type":"text","text":"توصيف الكتاب"}]},{"type":"paragraph","attrs":{"class":null,"style":null,"textAlign":"start"},"content":[{"type":"text","text":"توصيف الكتاب"}]},{"type":"paragraph","attrs":{"class":null,"style":null,"textAlign":"start"}}]}',
            ],
            'cat_id' => $cat->id,
        ]);

        Meta::create([
            'book_id' => $book->id,
            'title' => [
                'en' => 'Book Meta',
                'ar' => 'بيانات اضافية',
            ],
        ]);
    }
}
