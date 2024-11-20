<?php

use App\Models\Cdds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Cdis;
use App\Models\Clients;
use App\Models\Forfaits;
use App\Models\Offre;
use App\Models\User;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/alloperateur', function () {

    $Clients=Clients::where("soft_deleted",0)->get();
    $nbr_cdd=Cdds::where("soft_deleted",0)->get();
    $nbr_cdi=Cdis::where("soft_deleted",0)->get();
    $Offre=Offre::where("soft_deleted",0)->get();
    $Forfaits=Forfaits::where("soft_deleted",0)->get();
  return [
      'Clients'=>$Clients,
      'nbr_cdd'=>$nbr_cdd,
      'nbr_cdi'=>$nbr_cdi,
      'Offre'=>$Offre,
      'Forfaits'=>$Forfaits,
  ];

})->name('alloperateur');
Route::get('/all', function () {

    $sortDirection = 'desc';
        $forfait='';
        $diffInDays='';
        $local='';
        $local_CDI='';
        $forfait=Offre::where('soft_deleted',0)->get();
        $clients=Clients::where('soft_deleted',0)->get();
        $cdis=Cdis::where('soft_deleted',0)->get();
        $cdds=Cdds::where('soft_deleted',0)->OrderBy('id', $sortDirection)->get();
        // dd($cdds);
        // $cdds1=Cdds::where('soft_deleted',0)->get();
        // if($cdds!=null){
        //         $dateFin = Carbon::parse($cdds['dateFin']);
        //         $nowInDakar = Carbon::now('Africa/Dakar');

            // Calcul de la différence en jours entre la date de fin et la date actuelle à Dakar
    //         $diffInDays =(int) $nowInDakar->diffInDays(date: $dateFin);
    //             $forfait=Forfaits::where('id',$cdds['forfait'])->where('soft_deleted',0)->first();
    //             $local=Offre::where('id',$cdds['local'])->where('soft_deleted',0)->first();
    //     }
    //  if($cdis!=null){
    //              $diffInDays=Carbon::parse($cdds['dateFin'])->diffInDays(Carbon::now());
    //                 $forfait=Forfaits::where('id',$cdds['forfait'])->where('soft_deleted',0)->first();
    //                 $local_CDI=Offre::where('id',$cdis['local_id'])->where('soft_deleted',0)->first();
    //         }

        return json_encode([
        'clients'=>$clients,
        'cdds'=>$cdds,
        'cdis'=>$cdis,
        'forfait'=>$forfait,
        ]);

})->name('alloperateur');
//etat financier Commerciale
Route::get('/etat-commerciale', function () {
   $total=[];
   $data=[];
        $montants=0;
        $forfait=Offre::where('soft_deleted',0)->get()->groupBy('ficheTechnique');
        $clients=Clients::where('soft_deleted',0)->get();
        $cdis=Cdis::where('soft_deleted',0)->get();
        $cdds=Cdds::where('soft_deleted',0)->get();

      foreach($forfait as $k=>$for){
        foreach($for as $item){
           $montants+=$item->chargeLocative*$item->quantiteAffecter;
            foreach($clients as $cli){
                foreach($cdis as $cdi){
                    if($cdi->client_id==$cli->id && $cdi->local_id==$item->id){
                        $data[$k]['client']=$cli;
                        $data[$k]['local']=$item;
                        $data[$k]['cdi']=$cdi;
                    }
                    return $data;
                }
            }
        }
        // $total[$k]=$montants;


      }

        // return json_encode([
        // 'clients'=>$clients,
        // 'cdds'=>$cdds,
        // 'cdis'=>$cdis,
        // 'forfait'=>$forfait,
        // ]);


})->name('alloperateur');
?>
