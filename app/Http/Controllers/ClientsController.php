<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $clients=Clients::where('soft_deleted',0);
        $clients=Clients::all();
        return view('clients.index',[
            'clients'=>$clients
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
        // dd($request);
        $valide=$request->validate([
            'datePaiment' => 'required',
            'structure' => ['required', 'string','unique:Clients', 'max:255'],
            'telephone' => ['required', 'string',  'max:255'],
            'local' => ['required'],
            'categorie' => ['required'],
            'montantEncaisse' => ['required'],
            'PasDePorte' => ['required'],
            'remise' => ['required'],
            'faciliteDePayment' => ['required'],
            'caution' => ['required'],
        ]);if(!$valide) return  redirect()->back()->with('data',"Association are already save ");
        Clients::create([
            'datePaiment' => $request['datePaiment'],
            'structure' => $request['structure'],
            'telephone' => $request['telephone'],
            'local' =>  $request['local'],
            'categorie' => $request['categorie'],
            'montantEncaisse' => $request['montantEncaisse'],
            'PasDePorte' => $request['PasDePorte'],
            'remise' =>  $request['remise'],
            'faciliteDePayment' =>  $request['faciliteDePayment'],
            'caution' =>  $request['caution'],
            'user_id'=>Auth::user()->id,

        ]);
        return  redirect()->back()->with('success',"ajout reussi avec success");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function show(Clients $clients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function edit(Clients $clients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clients $clients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clients $clients)
    {
        //
    }
}
