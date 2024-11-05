<?php

namespace App\Http\Controllers;

use App\Models\{Offre,Locals};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offre=Offre::where('soft_deleted',0)->get();
        // $offre=Offre::all();
         $serie=Locals::where('soft_deleted',0)->get();
        return view('offre.index',[
            'offre'=>$offre,
            'serie'=>$serie
        ]);
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
        $valide=$request->validate([
            'typeLocale' => ['required', 'string', 'max:255'],
            'ficheTechnique' => ['required'],
            // 'quantiteDinsponible' => ['required'],
            'quantiteAffecter' => ['required'],
            'PasDePorte' => ['required'],
            'caution' => ['required'],
            'chargeLocative' => ['required'],
        ]);if(!$valide) return  redirect()->back()->with('data',"Association are already save ");
        Offre::create([
            'typeLocale'=>$request['typeLocale'],
            'ficheTechnique'=>$request['ficheTechnique'],
            // 'quantiteDinsponible'=>$request['quantiteDinsponible'],
            'quantiteAffecter'=>$request['quantiteAffecter'],
            'PasDePorte'=>$request['PasDePorte'],
            'caution'=>$request['caution'],
            'chargeLocative'=>$request['chargeLocative'],
            'user_id'=>Auth::user()->id,

        ]);
        return  redirect()->back()->with('success',"ajout reussi avec success");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function show($offre)
    {
        $offre=Offre::where('id',$offre)
        ->where('soft_deleted',0)->get();
       return $offre;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function edit($offre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offre $offre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offre $offre)
    {
        //
    }
}
