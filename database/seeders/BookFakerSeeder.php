<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookFakerSeeder extends Seeder
{
    public function run(): void
    {
        Book::factory(1000)->create();
    }
}
