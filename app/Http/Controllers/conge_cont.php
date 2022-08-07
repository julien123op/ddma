<?php

namespace App\Http\Controllers;



use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class conge_cont extends Controller
{
    function ajouter(Request $req)
    {
        DB::table('conge')->insert([
            'employe_matricule'=>$req->mat,
            'nomp' => $req->nom,
            'prenomp' => $req->prenom,
            'motif' => $req->motif,
            'type'=>$req->type,
            'email' => $req->email,
            'datedebut' => $req->dd,
            'datefin' => $req->df,


        ]);
        return back();
    }
    function ajouterp(Request $req)
    {
        DB::table('permission')->insert([
            'employe_id'=>$req->mat,
            'nom' => $req->nom,
            'prenom' => $req->prenom,
            'motif' => $req->motif,
            // 'type'=>$req->type,
            // 'email' => $req->email,
            'h_debut' => $req->dd,
            'h_fin' => $req->df,


        ]);
        return back();
    }
}
