@extends('Layout.master')
@section('content')
    <title> PGI-PAYE | Bulletin</title><!-- Favicon -->
    @endsection

    @section('contenu') 
            <!-- ./ Logo -->
            <div class="page-title">Bulettin de paie</div>

         
           
        </div>
        <!-- ./ header -->

        <!-- content -->
        @foreach($seer as $seer)
        <strong><div style="text-align: center"><strong><h1>Bulletin de paie détaillé</h1></strong></div></strong>
        <strong>I-Identité</strong>
        <div class="content ">
            <div class="row">
                <div class="col-lg-12 bd-content">
                     <div class="card">
                        <div class="card-body">
        <table style="flex-direction: column">
          <thead>
            <tr><th>
            <td><td>
                <tr><td>Nom:  <td>{{$seer->nom, $seer->prenom}}</td></td></tr>
                <tr> <td>Prénom:  <td>{{$seer->prenom}}</td></td></tr>
                <tr> <td>Profession ou qualités:  <td>{{$seer->poste}}</td></td></tr>
                <tr>  <td>Adresse:..................</td></tr>
                <tr> <td>Quartier:...................</td></tr>
                <tr>   <td>Ville:  LOME</td></tr>
           </td> 
        </tr>
        <tr>

           <td>
             <tr> <td> NIF Employeur:....................</td></tr>
             <tr> <td> NIF utilisateur:......................</td></tr>
             <tr> <td> N°CNSS:...........................</td></tr>

         </td></td>
         </th></tr>
        </thead>
     </td></tr>
           
        </table>

    </div>
                     </div></div></div></div>
     <strong> II- Stiuation familiale de  1 Janvier 2023</strong>
     <div class="content ">
        <div class="row">
            <div class="col-lg-12 bd-content">
                 <div class="card">
                    <div class="card-body">
     <table>
        <tr><td>Célibataire-Marié(e)-Veuf(ve)-Divorcé(e)-Séparé(e) (entourée de la mention utile)________________________________________</td> </tr>
        <tr><td>Noms et Prénoms du (des) conjoint(s)_______________________________________________________________________</td></tr>
        <tr><td>_________________________________________________________________________________________________</td></tr>
        <tr><td>Le(s/La) conjoint(e/es/s) exerce(nt) t-il une(des) profession(s)? Non/Oui.Laquelle?_________________________________________</td></tr>
        <tr><td>Nom(s), prénom(s) et N°immatriculation du(de la/des) conjoint(e/es/s)________________________________________________</td></tr>
        <tr><td>_________________________________________________________________________________________________</td></tr>
        <tr><td>Nombre d'enfants en charge/__/__/Bénéficiaire d'une pension d'invalidité? Oui/Non. Nature__________________________________</td></tr>
        <tr><td>______________________________________________________________________________________Taux:/___/___/ %</td></tr>

     </table>
                    </div>
                 </div>
            </div>
        </div>
     </div>
     <strong> III-Rémunérations</strong>

     
     1-Calcule Catégoriel, Sursalaire, prime d'ancienneté

     <div class="content ">
        <div class="row">
            <div class="col-lg-12 bd-content">
                 <div class="card">
                    <div class="card-body">
     <table>
       <tr><td>-Gratification-interessements</td></tr>
       <tr><td>-Indemnité d'Expatriement, de Dépaysement, d'Eloignement, de Départ à la retraite(après déduction de 50% du montant alloué</td></tr>
       <tr><td>-Autres indémnités, Primes, rétributions non imposalaireles</td></tr>
       <tr>
        <td>
            -Avantages à la nature<td>
         <table>
            <tr><td>--Logement</td></tr>
            <tr><td>--Eau</td></tr>
            <tr><td>--Electricité</td></tr>
            <tr><td>--Autres avantages:Vehicule, personnel domestique</td></tr>
        </table>
    </td>
    </tr>
    </table>
    <tr><td>-Autres indémnités, Primes, rétributions non imposalaireles: <td>{{$seer->irpp*12}}</td></td></tr><td>
        <tr>
    <tr><td><td><strong>Total A:  <td>{{$seer->irpp*12}}</td><strong>FCFA</strong></td></strong></td></tr></td></tr>
    <tr><td>______________________________________________________________________________________________________________________________________</td></tr>

    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>

                    </div>
                 </div>
            </div>
        </div>
     </div>

2-Déductions

     <div class="content ">
        <div class="row">
            <div class="col-lg-12 bd-content">
                 <div class="card">
                    <div class="card-body">
     <table>
        <tr><td>Retenues pour la Constitution de la pension de retraite(CNSS): <td>{{$seer->cnss*12}}</td></td></tr>
        <tr><td>Avantages en nature concédés</td></tr>
        <tr><td>   <td><strong>Total B:{{$seer->cnss*12}}FCFA</strong></td></td></tr>
        <tr><td>Différence (Total A-Total B)........................................................................................ <td><strong>Total C:{{($seer->irpp*12)-($seer->cnss*12)}}FCFA</strong></td></td></tr>
        <tr><td>_________________________________________________________________</td></tr>

        <tr><td>Forfait au titre des frais professionnels(28%*10 000 000)............<td><strong>Total D:{{($seer->ifd*0.28)*12}}FCFA</strong></td></tr>
        <tr><td>_________________________________________________________________</td></tr>

        <tr><td>Total semi-Net (Total C- Total D):<td><strong>Total E:{{( $seer->irpp*12)-($seer->cnss*12) -($seer->ifd*0.28)*12}}FCFA</strong></td></tr>
        <tr><td>_________________________________________________________________</td></tr>

        <tr><td>Charges de famille</td></tr>
        <tr><td></td></tr>
        <tr><td><strong>Net taxable" <td><strong>{{($seer->irpp*12)-($seer->cnss*12) -($seer->ifd*0.28)*12}} FCFA</strong></strong></td></tr>
        <tr><td>_________________________________________________________________</td></tr>

        <tr><td>a)Retrait complémentaire(limité à 6% du net taxable)</td></tr>
        <tr><td>b)Intérets sur pret immobilier(habitation principale)</td></tr>
        <tr><td>c)Pension ou Rente viagère</td></tr>
        <tr><td>d)Assurance-vie</td></tr>
        <tr><td></td></tr>
        <tr><td><strong> Net imposalairele :<td><strong>{{($seer->irpp*12)-($seer->cnss*12) -($seer->ifd*0.28)*12}}FCFA</strong></strong></td></tr>
        <tr><td>_________________________________________________________________</td></tr>
     </table>
                    </div>
                 </div>
            </div>
        </div>
     </div>
     3-Retenues fiscales éffectuées
     <div class="content ">
        <div class="row">
            <div class="col-lg-12 bd-content">
                 <div class="card">
                    <div class="card-body">
     <table>
        <tr><td>Impots sur Revenu des Personnes Physiques(IRPP): <td>{{$seer->irpp*12}}</td></tr>
        <tr><td>Taxe complémentaire sur salaires TCS</td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td><strong> Total retenus: <td><strong>{{$seer->irpp*12}} FCFA</strong> </td></strong></td></tr>



     </table>
                    </div>
                 </div>
            </div>
        </div>

        @endforeach
        @endsection