<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class employe_cont extends Controller
{
    function ajouter(Request $req ){
        
       
        $emp =DB::table('employe')->insert([
        
            // 'matricule' =>$req->mat,
            'nom' =>$req->nom,
            'prenom' =>$req->prenom,
            'sexe' =>$req->sexe,
            'poste' =>$req->poste,
            // 'sab' =>$req->sab,
            'email'=>$req->email,
            'primeA' =>$req->primea,
            // 'primeL' =>$req->primel,
            // 'ifd' =>$req->ifd,
            'dateT' =>$req->date,
            'sm' =>$req->sm,
            'nbEnf' =>$req->nbenfant,
            'anciennete' =>$req->anciennete,
            'n_cnss' =>$req->ncnss, 
            'n_fiscal'=>$req->nfiscal,
            'domiciliation' =>$req->domicile,
            'n_compte'=>$req->ncompte,
            'contrat'=>$req->contrat,
            'grade'=>$req->grade
            
        ]);

        if($emp){
            $empemp= DB::table('employe')
            ->get();
            return view('cv', compact('empemp'));        }
            else{
            return back()->with('echec','echec lors e l\'enregistrement');
        }
    }  
    function modif(Request $req){
        $modemp=DB::table('bulletins')->where([ 
            'matricule' => $req->matricule
        ])->first();
        if ($modemp) {
            $modemp=DB::table('bulletins')->where([ 
                'matricule' => $req->matricule
            ])->get();
            return view('edit-user', compact('modemp'));
        }
    }
    function update(Request $req, $id){
        $up=DB::table('employe')
        ->where(['matricule', $req->matricule])
        ->first()->update([
            // 'matricule' =>$req->mat,
            'nom' =>$req->nom,
            'prenom' =>$req->prenom,
            'sexe' =>$req->sexe,
            'poste' =>$req->poste,
            // 'sab' =>$req->sab,
            'email'=>$req->email,
            'primeA' =>$req->primea,
            // 'primeL' =>$req->primel,
            // 'ifd' =>$req->ifd,
            'dateT' =>$req->date,
            'sm' =>$req->sm,
            'nbEnf' =>$req->nbenfant,
            'anciennete' =>$req->anciennete,
            'n_cnss' =>$req->ncnss, 
            'n_fiscal'=>$req->nfiscal,
            'domiciliation' =>$req->domicile,
            'n_compte'=>$req->ncompte,
            'contrat'=>$req->contrat,
            'grade'=>$req->grade
        ]);
        // $up=DB::update('update bulletins set nom = ?,prenom=?,sexe=?,poste=? ,salaire=?,email=?,primeA=?,primeL=? ,ifd=?,date=?,sm=?,nbEnfant=?,anciennete=?,ncnss=?,nfiscal=? ,domicile=?,ncompte=?,contrat=?,grade=? ,cnss=?,irpp=?,charp=? where matricule = ?',[$nom,$prenom,$sexe,$poste,$date,$sm,$nbenfant,$ncnss,$nfiscal,$domicile,$ncompte,$contrat,$grade,$salaire,$ifd,$primel,$cnss,$irpp,$charp]);
        
            return back()->with('succès','Modifié avec succès');
        //      }else{
        //     return back()->with('echec','echec lors e l\'enregistrement');
        // }
                
    }
    function lire(){
        $see=DB::table('employe')->get();
        return view('user-list',compact('see')); 
    }

    function supprimer(Request $req){
        // $sup=DB::delete('DELETE FROM employe WHERE matricule = ?', [$id]); 
        $empemp=DB::table('employe')
        ->where('matricule', $req->matricule)
        ->first();
        if($empemp){
            $empemp->delete();
                return back()->with('success', 'Supprimé avec succès'); 
                }else{
                    return view('errors.404');
                }
    }
    function emp(){
        $empemp= DB::table('employe')
        ->get();
        return view('add_user', compact('empemp')); 
    }
    function ajoutercv(Request $req ){
        $empemp =DB::table('cv')->insert([
            // 'matricule' =>$req->mat,
            'employe_matricule' =>$req->empmat,
            'formation' =>$req->formation,
            'connaissance_info' =>$req->conninfo,
            'competences' =>$req->competences
        ]);
        if($empemp){
            $empemp=DB::table('bulletins')->get();
            return view('user-list', compact('empemp'));
        }
    }
        function ajouternote(Request $req ){
            // $emp = DB::table('employe')->where([ 
            //     'nom' => $req->nom 
            // ])->first();
            // $empp=DB::table('')
            $emp =DB::table('evaluation')->insert([
                'employe_matricule'=>$req->matricule,
                'employe_nom' =>$req->nom,
                'employe_prenom' =>$req->prenom,
                'note'=>$req->note
            ]);
        if($emp){
            
            return back()->with('succès','Note enregistrée avec succès... Un retour vous sera fait ultérieusement');
        }else{
            return back()->with('echec','echec lors e l\'enregistrement');
        }
    }
    function ajouternoteboss(Request $req )
    {

        $emp =DB::table('noteboss')->insert([ 
            'employe_id'=>$req->employe_id,
            'notefinale'=>$req->notef
        ]);
    if($req->notef>13 )
    {
        $empp =DB::table('employe')->where('matricule',$req->employe_id);
        $empp->update([ 
            'note'=>$req->note=$req->notef,
        ]);
        if($req->echelon=2){
            $empp->update([ 
                'echelon'=>$req->echelon=3
            ]);
        }
        if($req->echelon=3)
        {
            // $emppp=DB::table('bulletins')->where('matricule',$req->employe_id);
            // $emppp->update([ 
            //     'salaire'=>$req->salaire=($req->salaire*1.7)    
            //         ]);
            if($req->grade=3){
                $empp->update([ 
                    'grade'=>$req->grade=4,
                    'echelon'=>$req->echelon=(1)
                ]);
            }
            if($req->grade=2){
                $empp->update([ 
                    'grade'=>$req->grade=3,
                    'echelon'=>$req->echelon=(1)
                ]);
                }
                if($req->grade=4){
                    $empp->update([ 
                        'grade'=>$req->grade=4,
                        'echelon'=>$req->echelon=(3)
                    ]);
                }
                if($req->grade=1){
                    $empp->update([ 
                        'grade'=>$req->grade=2,
                        'echelon'=>$req->echelon=1
                    ]);
                    }
            // if($req->grade=4){
            //     $empp->update([ 
            //         'grade'=>$req->grade=4,
            //         'echelon'=>$req->echelon=(1+$req->echelon)
            //     ]);
            // }
            
        }
        
        if($req->echelon=1){
            $empp->update([ 
                'echelon'=>$req->echelon=2
            ]);
        }
    
        
        
        
        //     $emppp =DB::table('employe')->where('matricule',$req->employe_id);
            
        //     $emppp->update([ 
        //         'echelon'=>$req->echelon=(3+$req->echelon)
        //     ]);
        // }
        // if($req->echelon==3){
        //     $emppp =DB::table('employe')->where('matricule',$req->employe_id);
            
        //     $emppp->update([ 
        //         'grade'=>$req->grade=$req->grade+1,
        //         'echelon'=>$req->echelon=(1+$req->echelon)
        //     ]);
        // }
    // }
    //     if($req->notef>=14 & $req->echelon==1){
    //         $emppp =DB::table('employe')->where('matricule',$req->employe_id);
            
    //         $emppp->update([ 
    //             'echelon'=>$req->echelon=(2+$req->echelon)
    //         ]);
        // }
        
            // if($req->echelon==3){
            //     $empppp =DB::table('employer')->where('matricule',$req->employe_id)
            //     ->update([ 
            //         'grade'=>$req->grade=$req->grade+1,
            //         'salaire'=>$req->salaire=($req->salaire*1.7),
            //         'echelon'=>$req->echelon=1
            //     ]);
            // }
            // if($req->grade==4){
            //     $emppppp =DB::table('employer')->where('matricule',$req->employe_id)
            //     ->update([ 
            //         'grade'=>$req->grade=4
            //     ]);
            
       
        
                      
        return back()->with('succès','Note enregistrée avec succès');
    }else{
        return back()->with('echec','echec lors e l\'enregistrement');
    }
}}




