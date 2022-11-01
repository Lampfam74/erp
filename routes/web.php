<?php

use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\ UserController;
    use App\Http\Controllers\ AssociationController;
    use App\Http\Controllers\ SalesController;
    use App\Http\Controllers\ClientsController;
    use App\Http\Controllers\ProspecteController;
    use App\Http\Controllers\OffreController;
    use App\Http\Controllers\ReservationController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    // Route::resource('user', UserController::class);
    Route::resource('association', AssociationController::class);
    Route::resource('Sales', SalesController::class);
    Route::resource('clients', ClientsController::class);
    Route::resource('prospecte', ProspecteController::class);
    Route::resource('offres', OffreController::class);
    Route::resource('reservation', ReservationController::class);
    });

require __DIR__.'/auth.php';
