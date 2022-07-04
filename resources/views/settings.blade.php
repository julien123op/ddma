<!doctype html>
<html lang="en">

<!-- Mirrored from vetra.DDMA Solution.com/demos/default/settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jan 2022 15:53:10 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> DD-M.A. - Settings </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="../../dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css" type="text/css">
    <!-- Bootstrap Docs -->
    <link rel="stylesheet" href="../../dist/css/bootstrap-docs.css" type="text/css">


    <!-- Main style file -->
    <link rel="stylesheet" href="../../dist/css/app.min.css" type="text/css">


</head>

<body>




    <div class="_li" id="u_0_3_Nw">
        <div id="pagelet_bluebar" data-referrer="pagelet_bluebar">
            <div id="blueBarDOMInspector">
                <div class="_53jh">
                    <div class="loggedout_menubar_container">
                        <div class="clearfix loggedout_menubar">
                            </div>
    
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>


  


    <!-- menu -->
    <div class="menu">
        <div class="menu-header">
            <a href="/" class="menu-header-logo">
                <img src="https://vetra.DDMA Solution.com/assets/images/logo.svg" alt="logo">
            </a>
            <a href="/" class="btn btn-sm menu-close-btn">
                <i class="bi bi-x"></i>
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
                        <span>Tableau de bord</span>
                    </a>
                </li>


                @if(Session::get('sessionRHC'))
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-person-circle"></i>
                        </span>
                        <span>Etat recapitulatif</span>
                    </a>
                    <ul>
                        <li><a href="/liste-des-charge-patronale">Charge patronal</a></li>
                        <li><a href="/liste-des-cnss">CNSS</a></li>
                        <li><a href="/liste-des-irpp">IRRP</a></li>

                    </ul>
                </li>

                @endif

                @if(Session::get('sessionDRH'))
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-person-badge "></i>
                        </span>
                        <span>Employer</span>
                    </a>
                    <ul>
                        <li>
                        <li><a href="/liste-des-charge-patronale">Charge patronal</a></li>

                        <li>
                            <a href="/liste-des-employes">Liste des employes</a>
                        </li>


                        <li>
                            <a href="/ajouter-employer">ajouter des employes</a>
                        </li>

                </li>

            </ul>
            </li>
            <li>
                <a href="customers.html">
                    <span class="nav-link-icon">
                        <i class="bi bi-receipt"></i>
                    </span>
                    <span>Bulletin de paie</span>
                </a>
                <ul>
                    <li><a href="/bulletin">Liste des bulletins de paies</a></li>

                    {{-- <li>
                        <a href="invoice-detail.html">Detail</a>
                    </li> --}}
                </ul>
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
                    <li><a href="/liste-des-charge-patronale">Charge patronal</a></li>
                    <li><a href="/liste-des-cnss">CNSS</a></li>
                    <li><a href="/liste-des-irpp">IRRP</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-person-badge "></i>
                    </span>
                    <span>Employer</span>
                </a>
                <ul>
                    <li>
                        <a href="/liste-des-employes">Liste des employes</a>
                    </li>
                    <li>
                        <a href="/ajouter-employer">ajouter des employes</a>
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
                <a href="/parametre">
                    <span class="nav-link-icon">
                        <i class="bi bi-gear"></i>
                    </span>
                    <span>Parametres</span>
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
            <a href="/" class="logo">
                <img width="100" src="https://vetra.DDMA Solution.com/assets/images/logo.svg" alt="logo">
            </a>
            <!-- ./ Logo -->
            <div class="page-title">Parametre</div>

            <div class="header-bar ms-auto">
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item">
                        <a href="#" class="nav-link nav-link-notify" data-count="2" data-sidebar-target="#notifications">
                            <i class="bi bi-bell icon-lg"></i>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="header-mobile-buttons">
                <a href="#" class="search-bar-btn">
                    <i class="bi bi-search"></i>
                </a>
                <a href="#" class="actions-btn">
                    <i class="bi bi-three-dots"></i>
                </a>
            </div>
            <!-- ./ Header mobile buttons -->
        </div>
        <!-- ./ header -->

        <!-- content -->
        <div class="content ">

            <div class="row flex-column-reverse flex-md-row">
                <div class="col-md-8">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="mb-4">

                                <div class="card-body">
                                    <form class="row g-3" method="POST" action="/addper">
                                        @csrf
                                        <div class="col-md-6">
                                            <label for="nom" class="form-label">Nom</label>
                                            <input name="nom" type="text" class="form-control" id="nom">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="prenom" class="form-label">Prenom</label>
                                            <input name="prenom" type="text" class="form-control" id="prenom">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">CNI</label>
                                            <input name="cni" type="text" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Telephone</label>
                                            <input name="tel" type="tel" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">Mot de passe</label>
                                            <input name="mdp" type="password" class="form-control" id="inputAddress">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="visually-hidden" for="autoSizingSelect">Role</label>
                                            <select name="rol" class="form-select" id="autoSizingSelect">
                                                <option selected>choisir...</option>
                                                <option value="Comptable">Comptable</option>
                                                <option value="DRH">DRH</option>
                                                <option value="RH">RH</option>
                                                <option value="employe">employe</option>
                                                <option value="root">root</option>
                                            </select>
                                        </div>

                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>


            </div>
        </div>

    </div>

    </div>
 
    <footer class="content-footer">
        <div>© 2021 DDMA - <a href="https://DDMA Solution.com/" target="_blank">DDMA Solution</a></div>
        
    </footer>



    <script src="../../dist/js/app.min.js"></script>
</body>


</html>