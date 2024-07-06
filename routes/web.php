<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\OuvierController;

//use App\Http\Controllers\ProfilesController;

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

//Route::get('/', function () {
  //  return view('home');
//});
Route::get('/', [dashboardController::class, 'home'])->name('job.home');
Route::get('/job/{id}', [dashboardController::class, 'show'])->name('job.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
//Admin
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('creerjob', [dashboardController::class, 'creejob'])->name('job.creat');

});

//Ouvrier

Route::prefix('ouvrier')->name('ouvrier.')->group(function () {
     Route::get('login/login', [LoginController::class, 'showLoginForm'])->name('loginForme');
    Route::post('profile', [RegisterController::class, 'profile'])->name('profiles.store');

   // Route::post('ouvier/profile', [RegisterController::class, 'profile'])->name('ouvrier.info');
    //Route::post('/profiles', [ProfilesController::class, 'store'])->name('profiles.store');

    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::get('logout/{id}', [LoginController::class, 'logout'])->name('logout');
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    //Route::post('ouvier/profile', [RegisterController::class, 'profile'])->name('ouvrier.info');
    Route::post('register', [RegisterController::class, 'register']);


});



require __DIR__.'/auth.php';
