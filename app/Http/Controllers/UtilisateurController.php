<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use WeakMap;

class UtilisateurController extends Controller
{
    public function index(){

     $user = Utilisateur::all();
     dd($user);
     return view(view:'welcome');
    }
}
