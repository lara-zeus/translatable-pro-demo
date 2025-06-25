<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('category_has_books', function (Blueprint $table) {
           $table->unsignedBigInteger('book_id')
               ->comment('The ID of the book associated with the category');
          $table->unsignedBigInteger('category_id')
           ->comment('The ID of the category associated with the book');
        });
    }
};
