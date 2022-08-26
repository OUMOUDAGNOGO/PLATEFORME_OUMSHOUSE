<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\User;

class ProduitController extends Controller
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
    { $users = User::all();
        return view('produit.produitRegistre', compact('users'));
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
                'nom_produit'=> ['required', 'string', "max:250"],
                'type_produit'=> ['required', 'string', "max:250"],
                'description'=> ['required', 'string', "max:250"],
                'categorie_produit'=> ['required', 'string', "max:250"],
                'prix'=> ['required', 'integer', "max:250"],
                
               
            ]
            );
             if ($verification)
                $user = User ::create(
                [
                    'name' =>  $request['nom_produit'],
                    'email' => $request['type_produit'],
                    'password' =>bcrypt($request['password']),
                    'statut' => 'Produit',
                ]
             );
    
             if ($user)
            {
              Produit::create(
               [
                   'nom_produit'=>  $request['nom_produit'],
                   'type_produit'=>  $request['type_produit'],
                   'description'=>  $request['description'],
                   'categorie_produit'=>  $request['categorie_produit'],
                   'prix' => $request['prix'],
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
