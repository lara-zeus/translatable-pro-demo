<?php

use LaraZeus\TranslatablePro\Models\Phrase;

return [
    'languages' => [
        ['name' => 'English', 'code' => 'en'],
        ['name' => 'Portuguese', 'code' => 'pt'],
    ],

    'lang_switcher' => [
        'enabled' => true,
    ],

    'auto_phraseable' => true,

    'models' => [
        'Phrase' => Phrase::class,
    ],

    'fallback_lang' => 'en',

    'register_phrase_resource' => true,

    'ai_provider' => null,

    'ai_model' => null,
];
