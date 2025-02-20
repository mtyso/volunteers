<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\UpcomingEventsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[MainController::class,'index'])->name('main');
Route::get('home',[MainController::class,'index'])->name('main');

Route::resource('about',AboutController::class);
Route::resource('events',EventsController::class);
Route::resource('upcomings',UpcomingEventsController::class);
Route::resource('ourteam',TeamController::class);
Route::resource('partners',PartnersController::class);
Route::resource('reviews',ReviewsController::class);
Route::resource('FAQ',FaqsController::class);
Route::resource('contact',ContactController::class);

Route::get('events/{id}', [EventsController::class, 'show']);

Route::get('/events/create', [EventsController::class, 'create'])->name('events.create')->middleware('auth');

Route::post('/events', [EventsController::class, 'store'])->name('events.store')->middleware('auth');




// ----------------------------------------------------------------


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store']);

require __DIR__.'/auth.php';
