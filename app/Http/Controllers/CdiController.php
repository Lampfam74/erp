<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cdis;
use App\Models\Clients;
use Illuminate\Support\Facades\Auth;
class CdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cdi = Cdis::where('soft_deleted',0)->get();
        $clients=Clients::where('soft_deleted',0)->get();
        return view("cdi.index",[
            "cdis"=> $cdi,
            "clients"=> $clients
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
        'dateencaisse'=>['required'],
            'loyeRemise'=>['required'],
            'serie'=>['required'],
            'local_id'=>['required'],
             'nombre'=>['required']
        ]);
        Cdis::create([
        'dateencaisse'=>$request['dateencaisse'],
                    'loyeRemise'=>$request['loyeRemise'],
                    'local_id'=>$request['local_id'],
                    'serie'=>$request['serie'],
                      'nombre'=>$request['nombre'],
                     'user_id'=>Auth::user()->id,
                      'client_id'=>$request['client_id'],
        ]);
        return  redirect()->back()->with('success','ajouter avec success');
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
