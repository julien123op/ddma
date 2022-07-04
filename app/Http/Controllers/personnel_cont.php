<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


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

    function supprimer($id){
        $sup=DB::table('personnel')->where('id',$id)->delete();
        return back();
    }
}