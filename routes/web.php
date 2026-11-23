<?php

use App\Livewire\HomePortal;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePortal::class)->name('home');

Route::get('/lang/{locale}', function (string $locale) {
    $locale = in_array($locale, ['en', 'am'], true) ? $locale : 'en';

    return redirect('/')
        ->withCookie(cookie('app_locale', $locale, 60 * 24 * 30)); // 30 days
})->name('locale.switch');
