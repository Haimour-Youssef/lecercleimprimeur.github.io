<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $statCommandes = array(
            'enAttente' => Commande::where('statu', 'En attente')->count(),
            'enCours' => Commande::where('statu', 'En cours')->count(),
            'livre' => Commande::where('statu', 'Livré')->count(),
            'annule' => Commande::where('statu', 'Annulé')->count(),
        );
        return view('home', ['statCommandes' => $statCommandes, 'commandes' => Commande::latest()->paginate(10)]);
    }
    public function indexClient()
    {
        return view("welcome");
    }
}
