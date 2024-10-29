<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Clients,Cdds,Cdis,Forfaits,Offre};
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        // dd($cdds);
        $cdds1=Cdds::where('client_id',$id)->where('soft_deleted',0)->get();
        if($cdds!=null){
                $dateFin = Carbon::parse($cdds['dateFin']);
                $nowInDakar = Carbon::now('Africa/Dakar');

            // Calcul de la différence en jours entre la date de fin et la date actuelle à Dakar
            $diffInDays =(int) $nowInDakar->diffInDays(date: $dateFin);
                $forfait=Forfaits::where('id',$cdds['forfait'])->where('soft_deleted',0)->first();
                $local=Offre::where('id',$cdds['local'])->where('soft_deleted',0)->first();
        }
     if($cdis!=null){
//                  $diffInDays=Carbon::parse($cdds['dateFin'])->diffInDays(Carbon::now());
//                     $forfait=Forfaits::where('id',$cdds['forfait'])->where('soft_deleted',0)->first();
                    $local_CDI=Offre::where('id',$cdis['local_id'])->where('soft_deleted',0)->first();
            }
            // if($diffInDays < 5 ){
            //     $user=Auth::user()->email;
            //      Mail::send('contrats.email.show', (array) $cdds, function ($message) use ($clients){
            //         $message->from('Classlamp196@gmail.com', 'Admin Lamp');
            //         $message->sender('Classlamp196@gmail.com', 'Admin Lamp');
            //         $message->to(Auth::user()->email,$clients['name'] );
            //         $message->subject('Subject');
            //         $message->priority(3);
            //         $message->attach('/public/img/l1.png');
            //     });
            // }
        // dd(Carbon::parse($cdds['dateFin'])->diffInDays(Carbon::parse(date("Y-m-d"))));
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
