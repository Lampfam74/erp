<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Clients,Cdds,Cdis,Forfaits,Offre};
use Carbon\Carbon;
class ContratsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contrats.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//         dd($id);
        $sortDirection = 'desc';
        $forfait='';
        $diffInDays='';
        $local='';
        $local_CDI='';
        $clients=Clients::where('id',$id)->where('soft_deleted',0)->first();
        $cdis=Cdis::where('client_id',$id)->where('soft_deleted',0)->first();
        $cdds=Cdds::where('client_id',$id)->where('soft_deleted',0)->OrderBy('id', $sortDirection)->first();
//         dd($cdds);
        if($cdds!=null){
             $diffInDays=Carbon::parse($cdds['dateFin'])->diffInDays(Carbon::now());
                $forfait=Forfaits::where('id',$cdds['forfait'])->where('soft_deleted',0)->first();
                $local=Offre::where('id',$cdds['local'])->where('soft_deleted',0)->first();
        }
     if($cdis!=null){
//                  $diffInDays=Carbon::parse($cdds['dateFin'])->diffInDays(Carbon::now());
//                     $forfait=Forfaits::where('id',$cdds['forfait'])->where('soft_deleted',0)->first();
                    $local_CDI=Offre::where('id',$cdis['local_id'])->where('soft_deleted',0)->first();
            }
//         dd();
        return view('contrats.show',[
        'clients'=>$clients,
        'cdds'=>$cdds,
        'cdis'=>$cdis,
        'forfait'=>$forfait,
        'diffInDays'=>$diffInDays,
        'local'=>$local,
        'local_CDI'=>$local_CDI
        ]);
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
