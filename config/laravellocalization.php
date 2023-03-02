<?php

return [
    'supportedLocales' => [
        'en' => [
            'name' => 'English',
            'script' => 'Latn',
            'native' => 'En',
            'regional' => 'en_GB',
        ],
        'ru' => [
            'name' => 'Русский',
            'script' => 'Cyrl',
            'native' => 'Ру',
            'regional' => 'ru_RU',
        ],
        'oz' => [
            'name' => "O'zbek",
            'script' => 'Latn',
            'native' => 'O‘z',
            'regional' => 'uz_UZ',
        ],
    ],
    'useAcceptLanguageHeader' => false,
    'hideDefaultLocaleInURL' => false,
    'localesOrder' => [],
    'localesMapping' => [],
    'utf8suffix' => env('LARAVELLOCALIZATION_UTF8SUFFIX', '.UTF-8'),
    'urlsIgnored' => ['/skipped'],
];
