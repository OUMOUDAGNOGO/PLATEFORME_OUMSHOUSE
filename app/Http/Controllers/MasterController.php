<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
       

    {  $user =  Auth::user();
        //dd($user);
        if($user->status == 'Administrateurs'){
            return view('layouts.dashbord');
        } else if ($user->status == 'boutique'){
            // $administrateurs = administrateurs::where('user', $user->id)->first();
            return view('layouts.produitdash');
        } else{
            return view('home');
        }
        // else if ($user-> status == 'commissaire'){
        //     $agents = Agent::count();
        //     return view('commissaria.dashboard2',compact('agents'));
         
        
        
        
        $categorie =category::all();
        $produit = Produit::all(); 
        $nombreproduit = count($produit);
        $nombrecategorie = count($categorie);
         
        {
            
            return view('produitdash', compact('Produit','nombreboutique','categorie','nombrecategorie'));
            

        }    
    }
    public function welcome(){
        
        return view('welcome');
    }

    public function register(){
        
        return view('auth.register');
    }

    public function login(){
        
        return view('auth.login');
    }
    public function dashboard()
    {     
        $categorie =category::all();
        $produit = Produit::all();

       return view('master',compact('produit'));
        
        // Nous allons compter 

        $nombreproduit = count($produit);
        $nombrecategorie = count($categorie);

        


        return view('produitdash', compact('Produit','nombreproduit','categorie','nombrecategorie'));
    }

    
}
