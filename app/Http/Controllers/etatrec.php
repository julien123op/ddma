<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class etatrec extends Controller
{
function cnss(){
    $cnssemp = DB::table('cnsses')
        
    ->get();
    
    //dd($cnssemp);
    //create VIEW cnss as select matricule ,sexe,poste,contrat,domiciliation,n_compte as numero_compte ,((primeA+sab+primeL+ifd)*4/100) as cnss from employe
    return view('user-list-cnss',compact('cnssemp'));

}
function chapatro(){
    $cpaemp = DB::table('charpatrs')
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
    $irppemp = DB::table('irpps')
    ->get();
    return view('user-list-irpp',compact('irppemp'));

    
    //select matricule ,sexe,poste,contrat,domiciliation,n_compte as numero_compte ,((primeA+sab+primeL+ifd)*17.5/100) as cnss from employe
}
function emp(){
    $empemp= DB::table('bulletins')
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
function permission(){
    $conemp= DB::table('permission')
    ->get();
    return view('permission-ask-list', compact('conemp'));
}
function bulletin(Request $req){
    
    $seer= DB::table('bulletins')
    ->where('matricule',1)
    ->get();
    return view('fichepaie', compact('seer')); 
}
function bulletins(Request $req){
    $user = DB::table('bulletins')->where(
        'nom', $req->nom
    )->first();
    if($user){
        // $req->session()->put('sessionemp', $user->nom);
        $user = DB::table('bulletins')->where(
            'nom', $req->nom
        )->get();
        return view('invoice-detail', compact('user'));;
    }
    else {
        return back()->with('error', 'Echec');
    }

}
function listbulletin(){
    $listemp=DB::table('bulletins')
    ->get();
    return view('user-list-bull', compact('listemp'));
}
function choice(Request $req){
    // $choix=DB::table('valide')
        $choix=DB::table('valide')->insert([
            'employe_id'=>$req->employe_id,
            'choix' =>$req->choix,
            'nom' =>$req->nom,
            'prenom' =>$req->prenom,
            'type' =>$req->type,
            'motif' =>$req->motif
        ]);
        if($choix){
            if($req->choix == "Validé"){
                    $okemp=DB::table('ok')->get();
                    return view('ok', compact('okemp'));
                }
            if($req->choix == "Rejeté"){
                
                    $noemp=DB::table('no')->get();
                    return view('no', compact('noemp'));
                }
            if($req->choix == "Reporté"){
                    $repemp=DB::table('report')->get();
                    return view('report', compact('repemp'));
        }else{
            return back()->with('échec','Réponse non envoyée');
        }
    }
}
function choicep(Request $req){
    // $choix=DB::table('valide')
        $choix=DB::table('validep')->insert([
            'employe_id'=>$req->employe_id,
            'choix' =>$req->choix,
            'nom' =>$req->nom,
            'prenom' =>$req->prenom,
            'motif' =>$req->motif,
            'h_debut'=>$req->debut,
            'h_fin'=>$req->fin,

        ]);
        if($choix){
            if($req->choix == "Validé"){
                    $okemp=DB::table('yes')->get();
                    return view('yes', compact('okemp'));
                }
            if($req->choix == "Rejeté"){
                
                    $noemp=DB::table('non')->get();
                    return view('non', compact('noemp'));
                }
            if($req->choix == "Reporté"){
                    $repemp=DB::table('rep')->get();
                    return view('rep', compact('repemp'));
        }else{
            return back()->with('échec','Réponse non envoyée');
        }
    }
}
    function cv(Request $req){
        $cvemp=DB::table('cv')->get();
        return view('user-list-cv', compact('cvemp'));

    }
    function note(Request $req){
        
            $noteemp = DB::table('employe')->get();
        return view('note', compact('noteemp'));
          
            
    }
    function noteboss(Request $req){
        $notebossemp=DB::table('evaluation')->get();
        return view('noteboss', compact('notebossemp'));

    }
    function noteu(Request $req){
        $note=DB::table('evaluation')->get();
        return view('user-note-list', compact('note'));

    } 
    function noteb(Request $req){
        $noteboss=DB::table('noteboss')->get();
        return view('user-note-boss-list', compact('noteboss'));

    }
    function ok(Request $req){
        $okemp=DB::table('ok')->get();
        return view('ok', compact('okemp'));

    }
    function yes(Request $req){
        $okemp=DB::table('yes')->get();
        return view('yes', compact('okemp'));

    }
    
    function no(Request $req){
        $noemp=DB::table('no')->get();
        return view('no', compact('noemp'));

    }
    function non(Request $req){
        $noemp=DB::table('non')->get();
        return view('non', compact('noemp'));

    }
    function report(Request $req){
        $repemp=DB::table('report')->get();
        return view('report', compact('repemp'));

    }
    function rep(Request $req){
        $repemp=DB::table('rep')->get();
        return view('rep', compact('repemp'));

    }
function resultat(Request $req){
    $resemp=DB::table('valide')->where([
        'id'=>$req->id
    ])->first();
    if($resemp){
        $resemp=DB::table('valide')->get();
        return view('resultat', compact('resemp'));

    }
 
}
       
       
}