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
        $produit = Produit::all();
        return view('produit.index' ,compact('produit'));
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
              $produit = Produit::create($verification);
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
        $produit = Produit::findOrFail($id);
        return view('produit.show', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $produit = Produit::findOrFail($id);
         return view('produit.edit', compact('produit'));
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
        $validatedData = $request->validate([
            'nom_produit'=> ['required', 'string', "max:250"],
            'type_produit'=> ['required', 'string', "max:250"],
            'description'=> ['required', 'string', "max:250"],
            'categorie_produit'=> ['required', 'string', "max:250"],
            'prix'=> ['required', 'integer', "max:250"],
            
        ]);
    
        Produit::whereId($id)->update($validatedData);
    
        return redirect('/Produit')->with('success', 'produit mise à jour avec succèss');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = Produit::findOrFail($id);
        $produit->delete();
    
        return redirect('/produit')->with('success', 'produit supprimer avec succèss');
    }
}
