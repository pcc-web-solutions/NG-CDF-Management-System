<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CountyController;
use App\Http\Controllers\SubCountyController;
use App\Http\Controllers\WardController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SubLocationController;
use App\Http\Controllers\VillageController;

Route::get('/', function () { return view('home'); })->name('home');
Route::get('/home', function () { return view('home'); })->name('home');

Route::view('dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');
Route::view('applications', 'applications')->middleware(['auth', 'verified'])->name('applications');
Route::view('projects', 'projects')->middleware(['auth', 'verified'])->name('projects');
Route::view('disbursements', 'disbursements')->middleware(['auth', 'verified'])->name('disbursements');
Route::view('reports', 'reports')->middleware(['auth', 'verified'])->name('reports');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');

    Route::resource('countries', CountryController::class);
    Route::resource('counties', CountyController::class);
    Route::resource('sub-counties', SubCountyController::class);
    Route::resource('wards', WardController::class);
    Route::resource('locations', LocationController::class);
    Route::resource('sub-locations', SubLocationController::class);
    Route::resource('villages', VillageController::class);

});

require __DIR__.'/auth.php';
