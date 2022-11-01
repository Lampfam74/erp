<?php

namespace App\Http\Controllers;

use App\Models\Prospecte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProspecteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $prospecte=Prospecte::where('soft_deleted',0);
        $prospecte=Prospecte::all();
        return view('prospecte.index',[
            'prospecte'=>$prospecte
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
            'structure' => ['required', 'string','unique:Prospectes', 'max:255'],
            'contact' => ['required'],
            'email' => ['required'],
            'poste' => ['required'],
            'telephone' => ['required'],
            'affecter' => ['required'],
            'commentaire' => ['required'],
        ]);if(!$valide) return  redirect()->back()->with('data',"Association are already save ");
        Prospecte::create([
            'structure' => $request['structure'],
            'email' => $request['email'],
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
     * @param  \App\Models\Prospecte  $prospecte
     * @return \Illuminate\Http\Response
     */
    public function show(Prospecte $prospecte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prospecte  $prospecte
     * @return \Illuminate\Http\Response
     */
    public function edit(Prospecte $prospecte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prospecte  $prospecte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prospecte $prospecte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prospecte  $prospecte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prospecte $prospecte)
    {
        //
    }
}
