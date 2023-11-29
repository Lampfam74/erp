<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservation=Reservation::where('soft_deleted',0)->get();
        // $reservation=Reservation::all();
        return view('reservation.index',[
            'reservation'=>$reservation
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
            'structure' => ['required', 'string','unique:Reservations', 'max:255'],
            'adresse' => ['required', 'string',  'max:255'],
            'rccm' => ['required'],
            'ninea' => ['required'],
            'contact' => ['required'],
            'poste' => ['required'],
            'telephone' => ['required'],
            'affecter' => ['required'],
            'commentaire' => ['required'],
        ]);if(!$valide) return  redirect()->back()->with('data',"Association are already save ");
        Reservation::create([
            'structure' => $request['structure'],
            'adresse' => $request['adresse'],
            'rccm' => $request['rccm'],
            'ninea' =>$request['ninea'],
            'contact' =>$request['contact'],
            'poste' =>$request['poste'],
            'telephone' =>$request['telephone'],
            'affecter' =>$request['affecter'],
            'commentaire' =>$request['commentaire'],
            'user_id'=>Auth::user()->id,

        ]);
        return  redirect()->back()->with('success',"ajout reussi avec success");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show( $reservation)
    {
        $reservation=Reservation::where('id',$reservation)
        ->where('soft_deleted',0)->get();
       return $reservation;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
