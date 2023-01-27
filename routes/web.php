<?php

use App\Http\Livewire\AboutPage\About;
use App\Http\Livewire\MainPage\Main;
use App\Http\Livewire\ArchivePage\{Archive, Add, Edit, Addattendance};
use App\Http\Livewire\Ui\ShowCard;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\QRCodeController;

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

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/', Main::class)->name('main');
Route::get('/about', About::class)->name('about');
Route::get('/archive', Archive::class)->name('archive');
Route::get('/show/{event_id}', ShowCard::class)->name('show-card');
Route::get('/add-event', Add::class)->name('add-event');
Route::get('/edit-event/{event_id}', Edit::class)->name('edit-event');
Route::get('/addattendance/{event_id}', Addattendance::class)->name('addattendance');
Route::get('/qrcode/{event_id}', QRCodeController::class)->name('home.index');
