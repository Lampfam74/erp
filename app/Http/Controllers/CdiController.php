<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cdis;
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
        //
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
         'montantencaisse'=>['required'],
          'pasDePorteEncaisse'=>['required'],
           'faciliteDePayment'=>['required'],
            'loyeRemise'=>['required'],
            'caution'=>['required'],
            'typepaiement'=>['required']
        ]);
        Cdis::create([
        'dateencaisse'=>$request['dateencaisse'],
                 'montantencaisse'=>$request['montantencaisse'],
                  'montantencaisse'=>$request['montantencaisse'],
                   'faciliteDePayment'=>$request['faciliteDePayment'],
                    'loyeRemise'=>$request['loyeRemise'],
                    'caution'=>$request['caution'],
                    'typepaiement'=>$request['typepaiement'],
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
