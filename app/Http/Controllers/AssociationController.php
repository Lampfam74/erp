<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $association=Association::where('soft_deleted',0)->get();
        // $association=Association::all();
        // dd($association);
        return view('association.index',[
            'association'=>$association
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
       $valide=$request->validate([
            'libelle' => ['required', 'string', 'max:255'],
            'activite' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string',  'max:255'],
            'telephone' => ['required'],
        ]);if(!$valide) return  redirect()->back()->with('data',"Association are already save ");
        Association::create([
            'libelle'=>$request['libelle'],
            'activite'=>$request['activite'],
            'adresse'=>$request['adresse'],
            'telephone'=>$request['telephone'],
            'user_id'=>Auth::user()->id,

        ]);
        return  redirect()->back()->with('success',"ajout reussi avec success");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function show(Association $association)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function edit(Association $association)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Association $association)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function destroy(Association $association)
    {
        //
    }
}
