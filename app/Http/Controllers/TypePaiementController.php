<?php

namespace App\Http\Controllers;

use App\Models\typePaiement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TypePaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typepaiement=typePaiement::where('soft_deleted',0)->get();
        return view('paiement.index',[
            'typepaiement'=>$typepaiement
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => ['required', 'max:255'],
            'description' => ['required'],
        ]);
        // if(!$valide) return  redirect()->back()->with('data',"Association are already save ");
        typePaiement::create([
            'libelle'=>$request['libelle'],
            'description'=>$request['description'],
            // 'client_id'=>$request['client_id'],
            'user_id'=>Auth::user()->id,

        ]);
        return  back()->with('success',"ajout reussi avec success");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\typePaiement  $typePaiement
     * @return \Illuminate\Http\Response
     */
    public function show(typePaiement $typePaiement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\typePaiement  $typePaiement
     * @return \Illuminate\Http\Response
     */
    public function edit(typePaiement $typePaiement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\typePaiement  $typePaiement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, typePaiement $typePaiement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\typePaiement  $typePaiement
     * @return \Illuminate\Http\Response
     */
    public function destroy(typePaiement $typePaiement)
    {
        //
    }
}
