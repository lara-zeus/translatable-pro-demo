<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use LaraZeus\TranslatablePro\Casts\PhrasesCast;
use LaraZeus\TranslatablePro\Models\Concerns\HasPhrases;
use RalphJSmit\Laravel\SEO\Support\HasSEO;

class Post extends Model
{
    use HasSEO;
    use HasPhrases;

    protected $casts = [
        'description' => PhrasesCast::class,
    ];
}
