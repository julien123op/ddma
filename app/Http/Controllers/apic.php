<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class apic extends Controller
{
    function get($id){

        $data=DB::table('employe')
        ->select('sab','primeA','primeL','ifd', 'nbEnf')
        ->where('matricule',$id)
        ->get();
        foreach($data as $data){
            $salairebrut= $data->primeA+$data->sab+$data->primeL+$data->ifd;
            $retCnss = $salairebrut*4/100;
            $charp = $salairebrut*17.5/100;
            if($data->nbEnf>6){
                 $charp=6*10000;
            }
           // dd( $retCnss,$partPartro, $salairebrut, $charp);
        //    $acalc=$salairebrut-($data->ifd+$charp);
        //    $salaire=$acalc*12;
           $salaire=$data->sab;
           $irpp=0;
           
           if ((0<$salaire)<=900000){
            $irpp=($salaire-0)*5/100;
            $irpp=$irpp;
           }
            if ((900001<$salaire)<=4000000){
                $irpp=($salaire-900001)*7/100;
                $irpp=$irpp+4500;}
            
            if ((4000001<$salaire)<=6000000){
                $irpp=($salaire-4000001)*15/100;
                $irpp=$irpp+4500+216999.93;
            }
            
            if ((6000001<$salaire)<=10000000){
                $irpp=($salaire-6000001)*25/100;
                $irpp=$irpp+4500+216999.93+299999.85;
            }
            if ((10000001<$salaire)<=15000000){
                $irpp=($salaire-10000001)*30/100;
                $irpp=$irpp+4500+216999.93+299999.85+999999.75;
            }
            if ($salaire>15000001){
                $irpp=($salaire-15000001)*35/100;
                $irpp=$irpp+4500+216999.93+299999.85+999999.75+1749999.65;
            }  
            // $retirpp = $irpp/12;
            // if ($retirpp<3000){ 
            //     $retirpp=3000;  
            // } 
            
            $nap = $salairebrut-$retCnss-$irpp;
            return response()
            ->json([
                'emp'=>$nap,
                'status'=>1
            ],200
            );

        }
    }
    function grade($id){
        $data=DB::table('employe')
        ->select('sab','primeA','primeL','ifd')
        ->where('matricule',$id)
        ->get();
        foreach($data as $data){
            if ($data->grade='GRADE 1'){
                $data->sab=150000;
                $data->primeL=25000;
                $data->ifd=30000;
            }
        
        
        }
    }
}
