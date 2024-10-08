<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.index',
    ['users'=>User::all()]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=new User();
        $user = User::find($id);
        if ($user == null) {
            return back('', ['user'=> $user]);
        }else{
          if ($user->statut == true) {
            $user->statut=false;
            $user->save();
            return back()->with('message','Compte Utilisateur Activer');
            }if($user->statut == false){
                $user->statut=true;
                $user->save();
                return back()->with('message','Compte Utilisateur Desactive');
            }
    }
       
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
