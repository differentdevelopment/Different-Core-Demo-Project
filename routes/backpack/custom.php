<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\Cruds\SongsCrudController;
use App\Http\Controllers\Admin\Pages\EmailPageController;
use App\Http\Controllers\Admin\Pages\MusicPlayerPageController;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    //'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('songs', SongsCrudController::class);
    Route::get('emails', [EmailPageController::class, 'index'])->name('email');
    Route::get('emails/{type}', [EmailPageController::class, 'send'])->name('email.send');
    Route::get('music-player', [MusicPlayerPageController::class, 'index'])->name('music-player');

});
