<?php

namespace App\Http\Controllers;



use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class conge_cont extends Controller
{
    function ajouter(Request $req)
    {
        DB::table('conge')->insert([

            'nomp' => $req->nom,
            'prenomp' => $req->prenom,
            'motif' => $req->motif,
            'email' => $req->email,
            'datedebut' => $req->dd,
            'datefin' => $req->df,


        ]);
        return back();
    }
}
