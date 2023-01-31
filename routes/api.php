<?php

use App\Http\Controllers\Api\Frontend\SiteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('cors')->group(function () {
    Route::get('menus', [SiteController::class, 'menus']);
    Route::get('category-list', [SiteController::class, 'categoryList']);
    Route::get('leader/{slug}', [SiteController::class, 'leader']);
    Route::get('regions', [SiteController::class, 'regions']);
});
