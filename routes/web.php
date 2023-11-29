<?php

use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\ {UserController
   , AssociationController
   , CddController, SalesController
   ,ClientsController
   , ContratsController, ForfaitsController, LocalsController, ProspecteController
   ,OffreController
   , RemisesController, ReservationController, TypePaiementController};
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
    Route::resource('user', UserController::class);
    Route::resource('association', AssociationController::class);
    Route::resource('Sales', SalesController::class);
    Route::resource('clients', ClientsController::class);
    Route::resource('prospecte', ProspecteController::class);
    Route::resource('offres', OffreController::class);
    Route::resource('reservation', ReservationController::class);
    Route::resource('remises', RemisesController::class);
    Route::resource('contrats', ContratsController::class);
    Route::resource('local', LocalsController::class);
    Route::resource('typepaiement', TypePaiementController::class);
    Route::resource('forfaits', ForfaitsController::class);
    });
    Route::prefix('contrats')->middleware(['auth'])->group(function () {
        Route::resource('cdd',CddController::class);
        
    });
require __DIR__.'/auth.php';
