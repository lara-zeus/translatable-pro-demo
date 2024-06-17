<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use LaraZeus\TranslatablePro\Casts\PhrasesCast;
use LaraZeus\TranslatablePro\Models\Concerns\HasPhrases;

class Chapter extends Model
{
    use HasFactory;
    use HasPhrases;

    protected $casts = [
        'title' => PhrasesCast::class,
    ];
}
