<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class connection_cont extends Controller
{
    function connection(Request $req)
    {
        $user = DB::table('personnel')->where([ 
            'nom' => $req->nom 
        ])->first();
        if ($user) {
            if (Hash::check($req->mdp, $user->mdp)) {
                if ($user->role == "RH" || $user->role == "Comptable") {  
                    $req->session()->put('sessionRHC', $user->id);
                    return view('index', compact('user')); 
                } 
                if ($user->role == "root") {
                    $req->session()->put('sessionRootall', $user->id);
                    return view('index', compact('user'));
                }
                if ($user->role == "DRH") {
                    $req->session()->put('sessionDRH', $user->id);
                    return view('index', compact('user'));
                }
                $req->session()->put('sessionok', $user->id);

                $user = DB::table('personnel')->where([ 
                    'nom' => $req->nom])->get();
                return view('index', compact('user'));
            } else {
                return back()->with('error', 'mot de passe incorrect ou invalide');
            }
        } else {
            return back()->with('error', 'le nom existe pas');
        }
    }
    function deconnexion()
    {
        if (session()->has('sessionRHC') || session()->has('sessionRootall') || session()->has('sessionDRH') || session()->has('sessionemp')) {
            session()->pull('sessionRHC');
            session()->pull('sessionRootall');
            session()->pull('sessionDRH');
            session()->pull('sessionemmp');
            return redirect('/login');
        }
    }

    function vs()
    {
        $vc = session()->all();
        return response()->json($vc);
    }
    function connemp(Request $req){
        $user = DB::table('bulletins')->where([ 
            'nom' => $req->nom 
        ])->first();
        if ($user) {
            if ($user) {
                $req->session()->put('sessionemp', $user->nom);
                $user = DB::table('bulletins')->where([ 
                    'nom' => $req->nom 
                ])->get();
                return view('invoice-detail', compact('user'));
            }
            else {
                    return back()->with('error', 'le nom existe pas');
                }

    }
    
}

}

