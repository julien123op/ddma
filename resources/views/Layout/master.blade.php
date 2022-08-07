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



<div  class="menu">
    <div class="menu-header">
        <a href="/" class="logo">
            <img width="200" src="{{ asset('logo.pgipaie.png') }}" alt="pgipaie">
        </a>
    



  
    
        </div>
        <div class="menu-body">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                    <div>
                    {{-- @foreach ($user as $user)

                        <div class="fw-bold"><strong>Nom:</strong> {{$user->nom}}</div>
                        <small class="text-muted"><strong>Prenom:</strong> {{$user->prenom}}</small>
                        @endforeach
                     --}}
                    </div>
                </a>
                
            </div>
            <ul>
                <li class="menu-divider">Gestionnaire de paie</li>
                <li>
                    <a                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             href="/">
                       Acceuil
                    </a>
                </li>
                @if(Session::get('sessionRHC'))
        <li><a  href="/liste-des-bulletins">Etat recapitulatif</a></li>
        <li><a  href="/liste-des-charge-patronale">Charge patronal</a></li>
        <li><a  href="/liste-des-cnss">CNSS</a></li>
        <li><a  href="/liste-des-irpp">IRRP</a></li>
        <li><a  href="/demande-conge">Demande de congé</a></li>
        <li><a  href="/permission">Demande de permission</a></li>
        <li><a  href="/note">Evaluation</a></li>
        <li><a  href="/resultat">Résultats</a></li>
              
                @endif
            
                @if(Session::get('sessionDRH'))

        <li><a  href="/liste-des-bulletins">Bulletins de paie</a></li>
        <li><a  href="/liste-des-charge-patronale">Charge patronale</a></li>
        <li><a  href="/liste-des-cnss">CNSS</a></li>
        <li><a  href="/liste-des-irpp">IRRP</a></li>
        <li><a  href="/liste-des-employes">Liste des utilisateurs</a></li>
        <li><a  href="/liste-des-cv">Liste des CV</a></li>
        <li><a  href="/ajouter-employer">Ajouter un utilisateur</a></li>
        <li><a  href="/noteboss">Evaluation</a></li>
        <li><a  href="/liste-des-notes-personnelles-de-l-utilisateur" data-notification="!" class="notifications">Notes personnelles de l'utilisateur</a></li>
        <li><a  href="/liste-des-notes-attribuees-a-l-utilisateur">Notes attribuées</a></li>
        <li><a  href="/liste-des-demandes-de-conges">Liste des demandes de congés</a></li>
        <li><a  href="/valide">congés validés</a></li> 
        <li><a  href="/refus">congés refusés</a></li> 
        <li><a  href="/report">congés reportés</a></li> 
        <li><a  href="/liste-des-demandes-de-permissions">Liste des demandes de permissions</a></li>
        <li><a  href="/permission-valide">Permissions validées</a></li> 
        <li><a  href="/permission-refus">Permissions refusées</a></li> 
        <li><a  href="/permission-report">Permissions reportées</a></li> 
        <li><a  href="/liste-personnel">Liste du personnel</a></li>
                @endif    
                @if (Session::get('sessionemp'))
        <li><a  href="/bulletin">Bulletin de paie</a></li>
        <li><a  href="/demande-conge">Demande de congé</a></li>
        <li><a  href="/permission">Demande de permission</a></li>
        <li><a  href="/note">Evaluation</a></li>
            @endif
            @if(Session::get('sessionRootall'))
        <li><a  href="/liste-des-bulletins">Bulletins de paie</a></li>
        <li><a  href="/liste-des-charge-patronale">Charge patronale</a></li>
        <li><a  href="/liste-des-cnss">CNSS</a></li>
        <li><a  href="/liste-des-irpp">IRRP</a></li>
        <li><a  href="/liste-des-employes">Liste des utilisateurs</a></li>
        <li><a  href="/liste-des-cv">Liste des CV</a></li>
        <li><a  href="/ajouter-employer">Ajouter un utilisateur</a></li>
        <li><a  href="/noteboss">Evaluation</a></li>
        <li><a  href="/liste-des-notes-personnelles-de-l-utilisateur" data-notification="!" class="notifications">Notes personnelles de l'utilisateur</a></li>
        <li><a  href="/liste-des-notes-attribuees-a-l-utilisateur">Notes attribuées</a></li>
        <li><a  href="/liste-des-demandes-de-conges">Liste des demandes de congés</a></li>
        <li><a  href="/valide">congés validés</a></li> 
        <li><a  href="/refus">congés refusés</a></li> 
        <li><a  href="/report">congés reportés</a></li> 
        <li><a  href="/liste-des-demandes-de-permissions">Liste des demandes de permissions</a></li>
        <li><a  href="/permission-valide">Permissions validées</a></li> 
        <li><a  href="/permission-refus">Permissions refusées</a></li> 
        <li><a  href="/permission-report">Permissions reportées</a></li> 
        <li><a  href="/liste-personnel">Liste du personnel</a></li>
            @endif
        <li><a  href="/logout" class="dropdown-item d-flex align-items-center ">Déconnexion</a></li>
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
        {{-- <a href="javascript:history.back()" class="btn bg-white">Retour</a> --}}


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