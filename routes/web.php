<?php

use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\ {UserController
   , AssociationController
   , CddController, SalesController,CdiController
   ,ClientsController
   , ContratsController, ConventionController, ForfaitsController, LocalsController, ProspecteController
   ,OffreController,ProfileController
   , RemisesController, ReservationController, TypePaiementController};
use App\Models\Cdds;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use App\Models\Cdis;
use App\Models\User;


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

      $nbr_ac=User::where('profil','AC')->get()->count();
      $nbr_cdd=Cdds::where("soft_deleted",0)->get()->count();
      $nbr_cdi=Cdis::where("soft_deleted",0)->get()->count();
    return view('dashboard',[
        'nbr_ac'=>$nbr_ac,
        'nbr_cdd'=>$nbr_cdd,
        'nbr_cdi'=>$nbr_cdi,
    ]);

})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class);
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
    Route::prefix('gestion')->middleware(['auth'])->group(function () {
        Route::resource('cdd',CddController::class);
        Route::resource('cdi',CdiController::class);
        Route::resource('contrats',ContratsController::class);
        Route::resource('convention',ConventionController::class);

    });
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
require __DIR__.'/auth.php';
