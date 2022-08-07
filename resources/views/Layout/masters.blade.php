<!doctype html>
<html lang="en">

<!-- Mirrored from vetra.DDMA Solution.com/demos/default/forms-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jan 2022 15:53:18 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @yield('content')
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/cr-1.5.6/date-1.1.2/rr-1.2.8/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/sr-1.1.1/datatables.min.css"/>
 
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="../../dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css" type="text/css">
    <!-- Bootstrap Docs -->
    <link rel="stylesheet" href="../../dist/css/bootstrap-docs.css" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="../../libs/prism/prism.css" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="../../dist/css/app.min.css" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body >




    <div style="background: rgb(11, 13, 150) " class="_li" id="u_0_3_Nw">
        <div style="background: rgb(11, 13, 150) " id="pagelet_bluebar" data-referrer="pagelet_bluebar">
            <div style="background: rgb(11, 13, 150) " id="blueBarDOMInspector">
                <div style="background: rgb(11, 13, 150) " class="_53jh">
                    <div class="loggedout_menubar_container">
                        
                                        
                                            </div></div></div></div></div>
          
<div  class="menu">
    <div class="menu-header">
        <a href="/" class="logo">
            <img width="150" src="{{ asset('logo.pgipaie.png') }}" alt="pgipaie">
        </a>
    



  
    
        </div>
        <div class="menu-body">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                    {{-- @foreach ($user as $user)
                        
                    
                    <div>
                        <div class="fw-bold">{{$user->nom}}</div>
                        <small class="text-muted">{{$user->poste}}</small>
                    </div>
                    @endforeach --}}
                </a>
                {{-- <div class="dropdown-menu dropdown-menu-end">
                    <a href="#" class="dropdown-item d-flex align-items-center">
                        <i class="bi bi-person dropdown-item-icon"></i> Profile
                    </a>
                    <a href="#" class="dropdown-item d-flex align-items-center">
                        <i class="bi bi-envelope dropdown-item-icon"></i> Inbox
                    </a>
                    <a href="#" class="dropdown-item d-flex align-items-center" data-sidebar-target="#settings">
                        <i class="bi bi-gear dropdown-item-icon"></i> Settings
                    </a>
                    <a href="login.html" class="dropdown-item d-flex align-items-center text-danger" target="_blank">
                        <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
                    </a>
                </div> --}}
            </div>
            <ul>
                <li class="menu-divider">Gestionnaire de paie</li>
                <li>
                    <a                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             href="/">
                        <span class="nav-link-icon">
                            <i class="bi bi-bar-chart"></i>
                        </span>
                        <span>Acceuil</span>
                    </a>
                </li>
                @if(Session::get('sessionRHC'))
                <li>
                    <a href="/liste-des-bulletins">
                        <span class="nav-link-icon">
                            <i class="bi bi-person-badge "></i>
                        </span>
                        <span>Etat recapitulatif</span>
                    </a>
                        <li><a  href="/liste-des-charge-patronale">Charge patronal</a></li>
                        <li><a  href="/liste-des-cnss">CNSS</a></li>
                        <li><a  href="/liste-des-irpp">IRRP</a></li>
                        
                    <a href="/demande-conge">
                        <span class="nav-link-icon">
                            <i class="bi bi-person-circle"></i>
                        </span>
                        <span>Demande de congé</span>
                    </a>
                        <a  href="/permission">
                            <span class="nav-link-icon">
                                <i class="bi bi-gear"></i>
                            </span>
                            <span>Demande de permission</span>
                        </a>
                    <a href="/note">
                        <span class="nav-link-icon">
                            <i class="bi bi-person-circle"></i>
                        </span>
                        <span>Evaluation</span>
                    </a>
                    <a href="/resultat">
                        <span class="nav-link-icon">
                            <i class="bi bi-person-circle"></i>
                        </span>
                        <span>Résultats</span>
                    </a>
                    
                </li>
              
                @endif
            
                @if(Session::get('sessionDRH'))
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-receipt "></i>
                        </span>
                        <span>Etat récapitulatif</span>
                    </a>
                    <ul>
                        <li>
                              <li><a href="/liste-des-bulletins">Bulletins de paie</a></li>
                              <li><a  href="/liste-des-charge-patronale">Charge patronale</a></li>
                              <li><a  href="/liste-des-cnss">CNSS</a></li>
                              <li><a  href="/liste-des-irpp">IRRP</a></li>
                        
                        </li>
                    </ul></li><li>   
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-person-badge "></i>
                        </span>
                        <span>utilisateur</span>
                    </a>
                    <ul>
                        <li>
                              <li>
                              <a  href="/liste-des-employes">Liste des utilisateurs</a>
                              </li>
                              
                              <li>
                                <a  href="/liste-des-cv">Liste des CV</a>
                                </li>
            
                              
                              <li>
                              <a  href="/ajouter-employer">Ajouter un utilisateur</a>
                              </li>
                           
                        </li>
                        <li>
                            <a  href="/noteboss">
                                <span class="nav-link-icon">
                                    <i class="bi bi-gear"></i>
                                </span>
                                <span>Evaluation</span>
                            </a>
                        </li>
                        <li>
                            <a  href="/liste-des-notes-personnelles-de-l-utilisateur" data-notification="!" class="notifications">
                                <span class="nav-link-icon">
                                    <i class="bi bi-gear"></i>
                                </span>
                                <span>Notes personnelles de l'utilisateur</span>
                            </a>
                        </li>
                        <li>
                            <a  href="/liste-des-notes-attribuees-a-l-utilisateur">
                                <span class="nav-link-icon">
                                    <i class="bi bi-gear"></i>
                                </span>
                                <span>Notes attribuées</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i class="bi bi-receipt"></i>
                                </span>
                                <span>Conge</span>
                            </a>
                            <ul>
                                <li><a  href="/liste-des-demandes-de-conges">Liste des demandes</a></li>
                                 <li><a  href="/valide">Demandes validées</span></a></li> 
                                 <li><a  href="/refus">Demandes refusées</span></a></li> 
                                 <li><a  href="/report">Demandes reportées</span></a></li> 
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i class="bi bi-receipt"></i>
                                </span>
                                <span>Permissions</span>
                            </a>
                            <ul>
                                <li><a  href="/liste-des-demandes-de-permissions">Liste des demandes</a></li>
                                 <li><a  href="/valide">Demandes validées</span></a></li> 
                                 <li><a  href="/refus">Demandes refusées</span></a></li> 
                                 <li><a  href="/report">Demandes reportées</span></a></li> 
                                
                                <li><a  href="/liste-des-demandes-de-permissions">Liste des demandes de permissions</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                 
                </li>
               <li><a href="/liste-personnel">
                <span class="nav-link-icon">
                    <i class="bi bi-person-circle "></i>
                </span>
                <span>Liste du personnel</span>
            </a></li>
                @endif    
                @if (Session::get('sessionemp'))
                <li>
                    <a  href="/bulletin">
                        <span class="nav-link-icon">
                            <i class="bi bi-receipt"></i>
                        </span>
                        <span>Bulletin de paie</span>
                    </a>
                </li>
                
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
                    <a  href="/permission">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Demande de permission</span>
                    </a>
                </li>
                <li>
                    <a  href="/note">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Evaluation</span>
                    </a>
                </li>
            @endif
            @if(Session::get('sessionRootall'))
            <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-receipt"></i>
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
                        <span>utilisateur</span>
                    </a>
                    <ul>
                        <li>
                              <a  href="/liste-des-employes">Liste des utililsateurs</a>
                              </li>
                              
                              <li>
                                <a  href="/liste-des-cv">Liste des CV</a>
                                </li>
                              <li>
                              <a  href="/ajouter-employer">Ajouter des utilisateurs</a>
                              </li>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i class="bi bi-receipt"></i>
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
                            <i class="bi bi-person-circle"></i>
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
                    <a  href="/note">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Evaluation</span>
                    </a>
                </li>
                 <li>
                    <a  href="/noteboss">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Evaluation</span>
                    </a>
                </li>
                 <li>
                    <a  href="/valide">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Demandes validées</span>
                    </a>
                </li> 
                <li>
                    <a  href="/refus">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Demandes refusées</span>
                    </a>
                </li>
                <li>
                    <a  href="/report">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Demandes reportée</span>
                    </a>
                </li>
                <li>
                    <a  href="/resultat">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Résultats</span>
                    </a>
                </li>
                <li>
                    <a  href="/liste-des-demandes-de-permissions">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Liste des demandes de permissions</span>
                    </a>
                </li>
                <li>
                    <a  href="/permission">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Demande de permission</span>
                    </a>
                </li>
                --------------------------------------------------------------
                <li>
                    <a  href="/liste-des-cv">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Liste des CV</span>
                    </a>
                </li>
                 <li>
                    <a  href="/parametre">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Parametres</span>
                    </a>
                </li>
                 <li>
                    <a  href="/parametre">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Parametres</span>
                    </a>
                </li>
                <li>
                    <a  href="/parametre">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Parametres</span>
                    </a>
                </li>
                --}}
                
               
            @endif
            <li>
                <a href="/logout" class="dropdown-item d-flex align-items-center ">
                    <span class="nav-link-icon">
                        <i class="bi bi-gear"></i>
                    </span>
                    <span>Déconnexion</span>
                    {{-- <i class="bi bi-box-arrow-right dropdown-item-icon"></i> deconnexion --}}
                </a>
            </li>
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
                {{-- <img width="100" src="https://vetra.DDMA Solution.com/assets/images/logo.svg" alt="logo"> --}}
            </a>
            <!-- ./ Logo -->
            <SCRIPT LANGUAGE="JavaScript">
                function confirmation() {
                var msg = "Vous êtes sur le point de retirer cet utilisateur";
                if (confirm(msg))
                location.replace(tonscript.php);
                }
                </script>
                <SCRIPT LANGUAGE="JavaScript">
                    function confirmations() {
                    var msg = "Vous êtes sur le point de modifier cet utilisateur !";
                    if (confirm(msg))
                    location.replace(tonscript.php);
                    }
                    </script>

@yield('contenu')
            <div class="order-1 order-lg-2 col-lg-3">
                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">

                    <nav id="TableOfContents"></nav>
                </div>
            </div>
        </div>
        <a href="javascript:history.back()" class="btn bg-white">Retour</a>

    </div>

        <footer class="content-footer">
            <div>© 2022  - Déployé par <a href="https://ddmatg.com/" target="_blank">DD.MA Solution</a></div>
          
        </footer>

        <script src="../../libs/bundle.js"></script> 

    <!-- Datatable -->
    <script src="../../libs/dataTable/datatables.min.js"></script> 

    <!-- Examples -->
    <script src="../../dist/js/examples/datatable.js"></script> 

    <!-- Prism -->
    <script src="../../libs/prism/prism.js"></script> 

<!-- Main Javascript file -->
<script src="../../dist/js/app.min.js"></script>
        <!-- ./ content-footer -->

    </div>
   
  

 
</body>

</html>