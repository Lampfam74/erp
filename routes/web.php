<?php

use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\ {UserController
   , AssociationController
   , CddController, SalesController,CdiController
   ,ClientsController
   , ContratsController, ForfaitsController, LocalsController, ProspecteController
   ,OffreController,ProfileController
   , RemisesController, ReservationController, TypePaiementController};
use App\Models\Cdds;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
//     //    $user=Auth::user()->email;
//    $cdds1=Cdds::where('soft_deleted',0)->get();
//    foreach($cdds1 as $cdds){
//     $dateFin = Carbon::parse($cdds['dateFin']);
//     $nowInDakar = Carbon::now('Africa/Dakar');
//     $diffInDays =(int) $nowInDakar->diffInDays(date: $dateFin);
//     if($diffInDays <5){
//         Mail::send('contrats.email.show', (array)[ $cdds,$diffInDays], function ($message) use ($diffInDays) {
//             $message->from('Classlamp196@gmail.com', 'Admin Lamp');
//             $message->sender('Classlamp196@gmail.com', 'Admin Lamp');
//             $message->to('Classlamp196@gmail.com',Auth::user()->name );
//             $message->subject('LOCATION PONCTUEL');
//             $message->priority(3);
//             $message->attach('/public/img/l1.png');
//         });
//     }
//    }
    return view('dashboard');
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
    Route::prefix('contrats')->middleware(['auth'])->group(function () {
        Route::resource('cdd',CddController::class);
        Route::resource('cdi',CdiController::class);

    });
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
require __DIR__.'/auth.php';
