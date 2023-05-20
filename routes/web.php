<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;

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
    return view('croquis');
})->name('croquis');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $nombreUser = User::where('id',auth()->user()->id)->get();
        return view('dashboard', compact('nombreUser'));
    })->name('dashboard');
});

// Bloqueo de la ruta de registro para poder accesar solo despues de haber iniciado sesion
Route::middleware('auth')->get('/register', function () {
    return view('auth.register');
})->name('register');