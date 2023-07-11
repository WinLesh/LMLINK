<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);


Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [HomeController::class, 'index']);

Route::get('/cart', function () {
    return view('cart');
})->middleware(['auth', 'verified'])->name('cart');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::prefix('admin')->group(function(){
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->
    middleware(['auth','admin']);

    // Category Routes
    Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function (){
        Route::get('/category', 'index')->
    middleware(['auth','admin']);
        Route::get('/category/create', 'create')->
    middleware(['auth','admin']);
        Route::post('/category', 'store')->
    middleware(['auth','admin']);
        Route::get('/category/{category}/edit', 'edit')->
    middleware(['auth','admin']);
        Route::put('/category/{category}', 'update')->
    middleware(['auth','admin']);
    });

    // Brands
    Route::get('/brands',  App\Http\Livewire\Admin\Brand\Index::class);
});

require __DIR__.'/auth.php';