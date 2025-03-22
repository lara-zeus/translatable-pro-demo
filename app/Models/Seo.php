<?php

namespace App\Models;

use LaraZeus\TranslatablePro\Casts\PhrasesCast;
use LaraZeus\TranslatablePro\Models\Concerns\HasPhrases;

class Seo extends \RalphJSmit\Laravel\SEO\Models\SEO
{
    use HasPhrases;

    protected $casts = [
        'title' => PhrasesCast::class,
        'author' => PhrasesCast::class,
        'description' => PhrasesCast::class,
    ];
}
