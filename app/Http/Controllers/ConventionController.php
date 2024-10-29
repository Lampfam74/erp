<?php

namespace App\Http\Controllers;

use App\Models\Conventions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConventionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'date'=>['required'],
           "filename" => 'required|mimes:pdf|max:5120',
            'client_id'=>['required'],
            'categorie'=>['required'],
        ]);
        $convention=new Conventions();
        $fil= $request->filename;
        // dd($fil);
        $extension =$fil->getClientOriginalExtension();
        // dd($extension);
        $filename= time(). '.' .$extension;
        $fil->storeAs(
            'convention',
            $filename,
            'public'
        );
       
            $convention['date']=$request->date;
            $convention['filename']=$filename;
            $convention['categorie']=$request->categorie;
            $convention['client_id']=$request->client_id;
            $convention['user_id']=Auth::user()->id;
            $convention->save();
            return back()->with('success','ajout effectuer ');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if($id==null)
            return 0;
        $client_id=$id;
        return view('convention.show',['client_id'=>$client_id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
