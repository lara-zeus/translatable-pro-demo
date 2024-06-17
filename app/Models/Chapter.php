<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use LaraZeus\TranslatablePro\Casts\PhrasesCast;
use LaraZeus\TranslatablePro\Models\Concerns\HasPhrases;

/**
 * @property array $title
 */
class Chapter extends Model
{
    use HasPhrases;

    protected $casts = [
        'title' => PhrasesCast::class,
    ];
}
