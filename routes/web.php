<?php

use App\Http\Livewire\AboutPage\About;
use App\Http\Livewire\MainPage\Main;
use App\Http\Livewire\ArchivePage\{
    Archive,
    Add,
};
use App\Http\Livewire\Ui\ShowCard;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', Main::class)->name('main');
Route::get('/about', About::class)->name('about');
Route::get('/archive', Archive::class)->name('archive');
Route::get('/show/{id}', ShowCard::class)->name('show-card');
Route::get('/add-event', Add::class)->name('add-event');
