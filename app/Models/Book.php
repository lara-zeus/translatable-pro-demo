<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use LaraZeus\TranslatablePro\Casts\PhrasesCast;
use LaraZeus\TranslatablePro\Models\Concerns\HasPhrases;

/**
 * @property array $title
 * @property array $desc
 */
class Book extends Model
{
    use HasFactory;
    use HasPhrases;

    protected $guarded = [];

    protected $casts = [
        'title' => PhrasesCast::class,
        'desc' => PhrasesCast::class,
    ];

    public function chapters(): HasMany
    {
        return $this->hasMany(Chapter::class);
    }

    public function cat(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function meta(): HasOne
    {
        return $this->hasOne(Meta::class);
    }

    public function categories(): BelongsToMany {
        return $this->belongsToMany(Category::class, 'category_has_books')->withPivot(['notes']);
    }
}
