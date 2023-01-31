<?php

use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Frontend\VoteController;
use App\Http\Controllers\Frontend\SiteController;
use App\Http\Controllers\Frontend\ApplicationController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::prefix(LaravelLocalization::setLocale())
    ->middleware([
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath',
        'frameGuard'
    ])
    ->group(function () {

        Route::controller(SiteController::class)
            ->group(function () {
                Route::get('/', 'index');
                Route::post('/search', 'search')->name('search')->withoutMiddleware([VerifyCsrfToken::class]);
                Route::get('/category/{slug}', 'category')->name('category');
                Route::get('/leader/{slug}', 'leader')->name('leader');
                Route::get('/category-list', 'categoryList')->name('categoryList');
                Route::get('/region/{slug}', 'region')->name('region');
                Route::get('/news/{slug}', 'news')->name('news');
                Route::get('/pages/{slug}', 'pages')->name('pages');
                Route::get('/documents/{slug}', 'documents')->name('documents');
                Route::get('/contact', 'contact')->name('contact');
                Route::get('/appeal-stats', 'appealStats')->name('appealStats');
                Route::get('rss', 'rss')->name('rss');
            });

        Route::controller(ApplicationController::class)
            ->group(function () {
                Route::get('/appeal', 'appeal')->name('appeal');
                Route::get('/appeal-stats', 'appealStats')->name('appealStats');
                Route::post('/appeal', 'appealPost')->name('appealPost');
                Route::get('/appeal-status', 'status')->name('status');
                Route::post('/appeal-status', 'statusPost')->name('statusPost');
            });

        Route::controller(VoteController::class)
            ->prefix('vote')
            ->as('vote.')
            ->group(function () {
                Route::post('/', 'vote')->name('index');
            });

        Route::fallback(function () {
            return view('frontend.404');
        });

        Route::get('clear', function () {
            Artisan::call('optimize:clear');
            return redirect('/');
        });
    });
