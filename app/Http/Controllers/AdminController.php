<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrateurs;
use App\Models\User;

class AdminController extends Controller
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
        $users = User::all();
        return view('admin.adminregistre', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $verification = $request->validate(
            [
                'nom'=> ['required', 'string', "max:250"],
                'prenom'=> ['required', 'string', "max:250"],
                'telephone'=>['required','string',"max:250"],
                'email'=>['required','string',"max:250"],
                'password'
            ]
            );
             if ($verification)
                $user = User ::create(
                [
                    'name' =>  $request['nom'],
                    'email' => $request['email'],
                    'password' =>bcrypt($request['password']),
                    'statut' => 'Administrateurs',
                ]
             );
    
             if ($user)
            {
              Administrateurs::create(
               [
                   'nom'=>  $request['nom'],
                   'prenom' =>  $request['prenom'],
                   'telephone' => $request['telephone'],
                   'email' => $request['email'],
                   'password' =>bcrypt($request['password']),
                   'userId' => $user->id,
                 
                   
               ]
              );
            }
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
