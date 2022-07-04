<!doctype html>
<html lang="en">

<!-- Mirrored from vetra.DDMA Solution.com/demos/default/invoice-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jan 2022 15:53:01 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> DD-M.A. | Bulletin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../public/logo.png" />

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="../../dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css" type="text/css">
    <!-- Bootstrap Docs -->
    <link rel="stylesheet" href="../../dist/css/bootstrap-docs.css" type="text/css">



    <!-- Prism -->
    <link rel="stylesheet" href="../../libs/prism/prism.css" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="../../dist/css/app.min.css" type="text/css">


    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">


</head>

<body>




    <div style="background: rgb(11, 13, 150) " class="_li" id="u_0_3_Nw">
        <div style="background: rgb(11, 13, 150) " id="pagelet_bluebar" data-referrer="pagelet_bluebar">
            <div style="background: rgb(11, 13, 150) " id="blueBarDOMInspector">
                <div style="background: rgb(11, 13, 150) " class="_53jh">
                    <div class="loggedout_menubar_container">
                         {{-- <b><h3>DD.MA Solution</h3></b> --}}
                        <div class="clearfix loggedout_menubar">
                           
                            <div  class="menu_login_container rfloat _ohf" data-testid="royal_login_form">
                                
                                       </div></div></div></div></div> </div></div>
          
<div  class="menu">
    <div class="menu-header">
        <a href="/" class="logo">
            <img width="260" src="http://ddmatg.com/images/logo-2.png" alt="ddma">
        </a>
        
    </div>

        <div class="menu-body">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">

                    <div>
                        <div class="fw-bold">Nom</div>
                        <small class="text-muted">Poste</small>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">

                    <a href="/logout" class="dropdown-item d-flex align-items-center text-danger">
                        <i class="bi bi-box-arrow-right dropdown-item-icon"></i> deconnexion
                    </a>
                </div>
            </div>
            <ul>
                <li class="menu-divider">Gestionnaire de paie</li>
                <li>
                    <a class="active" href="/">
                        <span class="nav-link-icon">
                            <i class="bi bi-bar-chart"></i>
                        </span>
                        <span>Acceuil</span>
                    </a>
                </li>
                @if(Session::get('sessionRHC'))
                <li>
                    <a href="/detail-bulletin">
                        <span class="nav-link-icon">
                            <i class="bi bi-person-circle"></i>
                        </span>
                        <span>Mon bulletin de paie</span>
                    </a>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-person-circle"></i>
                        </span>
                        <span>Etat recapitulatif</span>
                    </a>
                    <ul>
                        <li><a  href="/liste-des-charge-patronale">Charge patronal</a></li>
                        <li><a  href="/liste-des-cnss">CNSS</a></li>
                        <li><a  href="/liste-des-irpp">IRRP</a></li>
                        
                    </ul>
    
                    <a href="/demande-conge">
                        <span class="nav-link-icon">
                            <i class="bi bi-person-circle"></i>
                        </span>
                        <span>Demande de congé</span>
                    </a>
                </li>
                <li>
                    <a href="/logout" class="dropdown-item d-flex align-items-center ">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Déconnexion</span>
                        {{-- <i class="bi bi-box-arrow-right dropdown-item-icon"></i> deconnexion --}}
                    </a>
                </li>
              
                @endif
    
                @if(Session::get('sessionDRH'))
                
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-person-badge "></i>
                        </span>
                        <span>Employé</span>
                    </a>
                    <ul>
                        <li>
                              <li><a  href="liste-des-charge-patronale">Charge patronale</a></li>
    
                              <li>
                              <a  href="/liste-des-employes">Liste des employes</a>
                              </li>
    
                              
                              <li>
                              <a  href="/ajouter-employer">ajouter des employes</a>
                              </li>
                           
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i class="bi bi-person-circle"></i>
                                </span>
                                <span>Conge</span>
                            </a>
                            <ul>
                                <li><a  href="/liste-des-demandes-de-conges">Liste des demandes</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a  href="/bulletin">
                        <span class="nav-link-icon">
                            <i class="bi bi-receipt"></i>
                        </span>
                        <span>Bulletin de paie</span>
                    </a>  <ul>
                        <li><a  href="/liste-des-bulletins">Liste des bulletins de paies</a></li>
    
                        {{-- <li>
                            <a href="invoice-detail.html"
                               >Detail</a>
                        </li> --}}
                    </ul>
                </li>
                <a  href="/liste-personnel">
                    <span class="nav-link-icon">
                        <i class="bi bi-receipt"></i>
                    </span>
                    <span>Liste du personnel</span>
                </a>
                <li>
                    <a href="/logout" class="dropdown-item d-flex align-items-center ">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Déconnexion</span>
                        {{-- <i class="bi bi-box-arrow-right dropdown-item-icon"></i> deconnexion --}}
                    </a>
                </li>
                @endif    
    
                @if (Session::get('sessionemp'))
                <li>
                    <a  href="/detail-bulletin">
                        <span class="nav-link-icon">
                            <i class="bi bi-receipt"></i>
                        </span>
                        <span>Bulletin de paie</span>
                    </a>
                </li>
                <li>
                        <a  href="/demande-conge">
                            <span class="nav-link-icon">
                                <i class="bi bi-receipt"></i>
                            </span>
                            <span>Demande de congé</span>
                        </a>
                    </li>
                    <li>
                        <a href="/logout" class="dropdown-item d-flex align-items-center ">
                            <span class="nav-link-icon">
                                <i class="bi bi-gear"></i>
                            </span>
                            <span>Déconnexion</span>
                            {{-- <i class="bi bi-box-arrow-right dropdown-item-icon"></i> deconnexion --}}
                        </a>
                    </li>
                @endif
            @if(Session::get('sessionRootall'))
            <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-person-circle"></i>
                        </span>
                        <span>Etat recapitulatif</span>
                    </a>
                    <ul>
                        <li><a  href="/liste-des-charge-patronale">Charge patronal</a></li>
                        <li><a  href="/liste-des-cnss">CNSS</a></li>
                        <li><a  href="/liste-des-irpp">IRRP</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-person-badge "></i>
                        </span>
                        <span>Employé</span>
                    </a>
                    <ul>
                        <li>
                              <a  href="/liste-des-employes">Liste des employes</a>
                              </li>
                              <li>
                              <a  href="/ajouter-employer">Ajouter des employes</a>
                              </li>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i class="bi bi-person-circle"></i>
                                </span>
                                <span>Conge</span>
                            </a>
                            <ul>
                                <li><a  href="/liste-des-demandes-de-conges">Liste des demandes</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a  href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Personnel</span>
                    </a>
                    <ul>
                        <li>
                              <a  href="/liste-personnel">Liste du personnel</a>
                              </li>
                              <li>
                              <a  href="/ajouter-personnel">Ajouter du personnel</a>
                              </li>
                        </li>
                    </ul>
                </li>
               
                {{-- <li>
                    <a  href="/parametre">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Parametres</span>
                    </a>
                </li> --}}
                <li>
                    <a href="/logout" class="dropdown-item d-flex align-items-center ">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Déconnexion</span>
                        {{-- <i class="bi bi-box-arrow-right dropdown-item-icon"></i> deconnexion --}}
                    </a>
                </li>
                  
                    
                
            @endif
               



            </ul>
        </div>
    </div>
    <!-- ./  menu -->

    <!-- layout-wrapper -->
    <div class="layout-wrapper">

        <!-- header -->
        <div class="header">
            <div class="menu-toggle-btn">
                <!-- Menu close button for mobile devices -->
                <a href="#">
                    <i class="bi bi-list"></i>
                </a>
            </div>
            <!-- Logo -->
            <a href="index.html" class="logo">
                <img width="100" src="/image/sans-titre(1).png" alt="logo">
            </a>
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
             <tr> <td> NIF Employé:......................</td></tr>
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
       <tr><td>-Autres indémnités, Primes, rétributions non imposables</td></tr>
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
    <tr><td>-Autres indémnités, Primes, rétributions non imposables: <td>{{$seer->irpp*12}}</td></td></tr><td>
        <tr>
    <tr><td><strong>Total A:  <td>{{$seer->irpp*12}}<strong>FCFA</strong></td></strong></td></tr></td></tr>
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
        <tr><td>   <td>Total B:{{$seer->cnss*12}}<strong>FCFA</strong></td></td></tr>
        <tr><td>Différence (Total A-Total B)........................... <td>Total C:{{($seer->irpp*12)-($seer->cnss*12)}}<strong>FCFA</strong></td></td></tr>
        <tr><td>_________________________________________________________________</td></tr>

        <tr><td>Forfait au titre des frais professionnels(28%*10 000 000)............<td>Total D:{{($seer->ifd*0.28)*12}}<strong>FCFA</strong></td></tr>
        <tr><td>_________________________________________________________________</td></tr>

        <tr><td>Total semi-Net (Total C- Total D):<td>Total E:{{( $seer->irpp*12)-($seer->cnss*12) -($seer->ifd*0.28)*12}}<strong>FCFA</strong></td></tr>
        <tr><td>_________________________________________________________________</td></tr>

        <tr><td>Charges de famille</td></tr>
        <tr><td></td></tr>
        <tr><td><strong>Net taxable" <td>{{($seer->irpp*12)-($seer->cnss*12) -($seer->ifd*0.28)*12}} <strong>FCFA</strong></strong></td></tr>
        <tr><td>_________________________________________________________________</td></tr>

        <tr><td>a)Retrait complémentaire(limité à 6% du net taxable)</td></tr>
        <tr><td>b)Intérets sur pret immobilier(habitation principale)</td></tr>
        <tr><td>c)Pension ou Rente viagère</td></tr>
        <tr><td>d)Assurance-vie</td></tr>
        <tr><td></td></tr>
        <tr><td><strong> Net imposable :<td>{{($seer->irpp*12)-($seer->cnss*12) -($seer->ifd*28)*12}}<strong>FCFA</strong></strong></td></tr>
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
        <tr><td><strong> Total retenus: <td>{{$seer->irpp*12}} <strong>FCFA</strong> </td></strong></td></tr>



     </table>
                    </div>
                 </div>
            </div>
        </div>

        @endforeach
     
        

        
        <!-- ./ content -->

        <!-- content-footer -->
        <footer class="content-footer">
            <button type="button" class="btn btn-success" value="Imprimer" onclick="window.print();" >Imprimer la fiche</button>

            <div>© 2022 - <a href="https://ddmatg.com/" target="_blank">DD Management Solution</a></div>
          
        </footer>

    </div>
    
    {{-- <script src="../../libs/bundle.js"></script>
    <script src="../../dist/js/app.min.js"></script>

    <script>
        $(document).ready(function() {
        $('#example').DataTable();
    } );
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
     --}}
     <script src="../../dist/js/app.min.js"></script>
    <script src="../../libs/prism/prism.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>

        
    
    
</body>


</html>