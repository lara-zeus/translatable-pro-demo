<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use LaraZeus\TranslatablePro\Casts\PhrasesCast;
use LaraZeus\TranslatablePro\Models\Concerns\HasPhrases;

/**
 * @property string $name
 */
class Category extends Model
{
    use HasFactory;
    use HasPhrases;

    protected $casts = [
        'name' => PhrasesCast::class,
    ];

    public function books(): BelongsToMany {
        return $this->belongsToMany(Book::class, 'category_has_books');
    }
}
