<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;



class personnel_cont extends Controller
{
    function ajouter(Request $req ){
        DB::table('personnel')->insert([
            
            'nom' =>$req->nom,
            'prenom' =>$req->prenom,
            'n_tel' =>$req->tel,
            'n_cni' =>$req->cni,
            'mdp' =>Hash::make($req->mdp),
            'role' => $req->rol
            
        ]);
        return back();
    }

    function lire(){
        $see=DB::table('personnel')->get();
        return view('user-list',compact('see'));

    }

    function supprimer(Request $req){
        $peremp=DB::table('personnel')->where(['id'=>$req->id])->first();
        if($peremp){
            $peremp=DB::table('personnel')
            ->delete();
            if($peremp){
                $peremp=DB::table('personnel')
                ->get();
                return view('user-list-personnel', compact('peremp'));
                // return back()->with('success', 'Supprimé avec succès'); 
            }
        


        }
    }
} 