<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class employe_cont extends Controller
{
    function ajouter(Request $req ){
        $emp =DB::table('employe')->insert([
        
            'matricule' =>$req->mat,
            'nom' =>$req->nom,
            'prenom' =>$req->prenom,
            'sexe' =>$req->sexe,
            'poste' =>$req->poste,
            'sab' =>$req->sab,
            'email'=>$req->email,
            'primeA' =>$req->primea,
            'primeL' =>$req->primel,
            'ifd' =>$req->ifd,
            'dateT' =>$req->date,
            'sm' =>$req->sm,
            'nbEnf' =>$req->nbenfant,
            'anciennete' =>$req->anciennete,
            'n_cnss' =>$req->ncnss, 
            'n_fiscal'=>$req->nfiscal,
            'domiciliation' =>$req->domicile,
            'n_compte'=>$req->ncompte,
            'contrat'=>$req->contrat
            
        ]);

        if($emp){
            return back()->with('sucess','employer ajouter avec success');
        }else{
            return back()->with('echec','echec lors e l\'enregistrement');
        }



    }

    function lire(){
        $see=DB::table('employe')->get();
        return view('user-list',compact('see'));


    }

    function supprimer($id){
        $sup=DB::table('employe')->where('id',$id)->delete();
        return back();


    }
    
}
