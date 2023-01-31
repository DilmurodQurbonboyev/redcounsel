<?php

return [
    'supportedLocales' => [
        'uz' => [
            'name' => 'Ўзбек',
            'script' => 'Cyrl',
            'native' => 'Ўз',
            'regional' => 'uz_UZ',
        ],
        'oz' => [
            'name' => "O'zbek",
            'script' => 'Latn',
            'native' => 'O‘z',
            'regional' => 'uz_UZ',
        ],
        'ru' => [
            'name' => 'Русский',
            'script' => 'Cyrl',
            'native' => 'Ру',
            'regional' => 'ru_RU',
        ],
        'en' => [
            'name' => 'English',
            'script' => 'Latn',
            'native' => 'En',
            'regional' => 'en_GB',
        ],
    ],
    'useAcceptLanguageHeader' => false,
    'hideDefaultLocaleInURL' => false,
    'localesOrder' => [],
    'localesMapping' => [],
    'utf8suffix' => env('LARAVELLOCALIZATION_UTF8SUFFIX', '.UTF-8'),
    'urlsIgnored' => ['/skipped'],
];
