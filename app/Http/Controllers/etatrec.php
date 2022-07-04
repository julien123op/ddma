<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class etatrec extends Controller
{
function cnss(){
    $cnssemp = DB::table('cnss')
        
    ->get();
    
    //dd($cnssemp);
    //create VIEW cnss as select matricule ,sexe,poste,contrat,domiciliation,n_compte as numero_compte ,((primeA+sab+primeL+ifd)*4/100) as cnss from employe
    return view('user-list-cnss',compact('cnssemp'));

}
function chapatro(){
    $cpaemp = DB::table('charpatr')
    ->get();
    return view('user-list-charp',compact('cpaemp'));
    //select matricule ,sexe,poste,contrat,domiciliation,n_compte as numero_compte ,((primeA+sab+primeL+ifd)*17.5/100) as cnss from employe
}

function det($id){
    $detemp = DB::table('personnel')->select('nom', 'prenom','role')->where('id',$id)
    ->get();
    return view('index',compact('detemp'));
    //select matricule ,sexe,poste,contrat,domiciliation,n_compte as numero_compte ,((primeA+sab+primeL+ifd)*17.5/100) as cnss from employe
}
function irpp(){
    $irppemp = DB::table('irpp')
    ->get();
    return view('user-list-irpp',compact('irppemp'));

    
    //select matricule ,sexe,poste,contrat,domiciliation,n_compte as numero_compte ,((primeA+sab+primeL+ifd)*17.5/100) as cnss from employe
}
function emp(){
    $empemp= DB::table('employe')
    ->get();
    return view('user-list', compact('empemp'));
}
function per(){
    $peremp= DB::table('personnel')
    ->get();
    return view('user-list-personnel', compact('peremp'));
}
function conge(){
    $conemp= DB::table('conge')
    ->get();
    return view('conge-ask-list', compact('conemp'));
}
function bulletin(){
    
    $seer= DB::table('bulletin')
    ->select()
    ->where('matricule', 3415)
    ->get();
    return view('fichepaie', compact('seer')); 
}
// function bulletins(){
    
//     $seer= DB::table('bulletin')
//     ->select()
//     ->where('matricule', 3415)
//     ->get();
//     return view('invoice-detail', compact('seer')); 
// }
function listbulletin(){
    $listemp=DB::table('bulletin')
    ->get();
    return view('user-list-bull', compact('listemp'));
}
function choice(Request $re){
    // $choix=DB::table('valide')
        DB::table('valide')->insert([
            'choix' =>$re->choix,
        ]);
    }
       
}