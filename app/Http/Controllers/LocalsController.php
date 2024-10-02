<?php

namespace App\Http\Controllers;

use App\Models\LOCALS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LocalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Locals=Locals::where('soft_deleted',0)->get();
        return view('local.index',[
            'locals'=>$Locals
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
        $request->validate([
            'identifiants' => ['required', 'max:255'],
            'mesure' => ['required'],
            'description' => ['required'],
        ]);
        // if(!$valide) return  redirect()->back()->with('data',"Association are already save ");
        Locals::create([
            'description'=>$request['description'],
            'identifiants'=>$request['identifiants'],
            'mesure'=>$request['mesure'],
            // 'client_id'=>$request['client_id'],
            'user_id'=>Auth::user()->id,

        ]);
        return  back()->with('success',"ajout reussi avec success");
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
