<?php

namespace App\Http\Controllers;

use App\Models\Administrateurs;
use Illuminate\Http\Request;
use App\Models\boutiques;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
       
    { $boutique = boutiques::all(); 
        $nombreboutique = count($boutique);
         
        {
            
            return view('home', compact('boutique','nombreboutique'));
            

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
        $boutique = boutiques::all();
       return view('index',compact('boutique'));
        
        // Nous allons compter tous les assurés inscrits 

        $nombreboutique = count($boutique);

        // Nous allons afficher la liste des assurés


        return view('home', compact('boutique','nombreboutique'));
    }
}


