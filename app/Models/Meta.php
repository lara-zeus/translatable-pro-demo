<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use LaraZeus\TranslatablePro\Casts\PhrasesCast;
use LaraZeus\TranslatablePro\Models\Concerns\HasPhrases;

class Meta extends Model
{
    use HasPhrases;

    protected $guarded = [];

    protected $casts = [
        'title' => PhrasesCast::class,
    ];
}
