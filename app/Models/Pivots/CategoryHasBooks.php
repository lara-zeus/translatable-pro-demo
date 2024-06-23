<?php

namespace App\Models\Pivots;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use LaraZeus\TranslatablePro\Casts\PhrasesCast;
use LaraZeus\TranslatablePro\Models\Concerns\HasPhrases;

/**
 * @property string $name
 */
class CategoryHasBooks extends Pivot
{
    use HasFactory;
    use HasPhrases;

    public function getTable()
    {
        return 'category_has_books';
    }

    protected $casts = [
        'notes' => PhrasesCast::class,
    ];
}
