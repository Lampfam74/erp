<?php

namespace App\Http\Controllers;

use App\Models\{Cdds,Forfaits};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class CddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'debut' => ['required'],
            'forfait' => ['required'],
            'typepaiement' => ['required'],
            'local' => ['required'],
            'duree' => ['required'],
            'produit' => ['required'],
//             'local' => ['required'],
//             'montantPaiement'=>['required']

        ]);
        
        // dd($request['duree']);
        $unite=Forfaits::where('id',$request['forfait'])->first();
//         dd($unite);
$fin = Carbon::parse($request->debut);
$duree = (int) $request['duree'];
// Calcul de la date de fin en fonction de l'unité de temps
switch ($unite->unite) {
    case '1/sem':
        $fin->addWeeks($duree);
        break;
    case '1/j':
        $fin->addDays($duree);
        break;
    case '1/Mois':
        $fin->addMonths($duree);
        break;
    default:
        return back()->withErrors(['unite' => 'Unité de temps non reconnue.']);
}

 $DateFin = $fin->toDateString();
    //    dd($DateFin);
         Cdds::create([
            'debut'=>$request['debut'],
            'forfait'=>$request['forfait'],
            'typePaiement'=>$request['typepaiement'],
            'local'=>$request['local'],
            'duree'=>$request['duree'],
            'produit'=>$request['produit'],
            'dateFin'=>$DateFin,
            'user_id'=>Auth::user()->id,
            'client_id'=>$request['client_id'],

        ]);
        return  redirect()->back()->with('success',"ajout reussi avec success");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
