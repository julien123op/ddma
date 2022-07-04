<!doctype html>
<html lang="en">

<!-- Mirrored from vetra.DDMA Solution.com/demos/default/forms-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jan 2022 15:53:18 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> DD-M.A. | Ajout d'employé </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />

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

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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





  
    <div class="menu">
        <div class="menu-header">
           
            <a href="/" class="btn btn-sm menu-close-btn">
                <i class="bi bi-x"></i>
            </a>
        </div>
        <div class="menu-body">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                    <div class="avatar me-3">
                        <img src="../../assets/images/user/man_avatar3.jpg" class="rounded-circle" alt="image">
                    </div>
                    <div>
                        <div class="fw-bold">Nom</div>
                        <small class="text-muted">Poste</small>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
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
              
                @endif
            
                @if(Session::get('sessionDRH'))
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
                    </a>
                    {{-- <ul>
                        <li><a  href="user-list.html">Liste des bulletins de paies</a></li>
            
                        <li>
                            <a href="invoice-detail.html"
                               >Detail</a>
                        </li>
                    </ul> --}}
                </li>
               <ul><a href="/liste-personnel">
                <span class="nav-link-icon">
                    <i class="bi bi-person-badge "></i>
                </span>
                <span>Liste du personnel</span>
            </a></ul>
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
                    <a  href="/parametre">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Parametres</span>
                    </a>
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
            
            <!-- ./ Logo -->
            <div class="page-title">Enregistrer un employé</div>
          

            <!-- Header mobile buttons -->
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

            <div class="row">
                <div class="order-2 order-lg-1 col-lg-9 bd-content">


                    <h4>Informations</h4>

                    <div class="card">
                        <div class="card-body">
                            @if(Session::get('echec'))
                            <div class="alert alert-danger">
                                    <p>{{Session::get('echec')}}</p>
                            </div>
                            @endif
                            <form class="row g-3" method="POST" action="/addemp">
                                @csrf
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Matricule</label>
                                    <input name="mat" type="number" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Nom</label>
                                    <input name="nom" type="text" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Prenom</label>
                                    <input name="prenom" type="text" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">sexe</label>
                                    <select required name="sexe" id="inputState" class="form-select">
                                        <option selected>choisir...</option>
                                        <option value="Masculin">Masculin</option>
                                        <option value="Feminin">Feminin</option>
                                    </select>
                                </div>
                                <div class="col-md-6">

                                    <label for="inputPassword4" class="form-label">E-mail</label>
                                    <input name="email" type="email" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">Poste</label>
                                    <input name="poste" type="text" class="form-control" id="inputAddress2">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">Contrat</label>
                                    <select required name="contrat" id="inputState" class="form-select">
                                        <option selected>choisir...</option>
                                        <option value="CDD">CDD</option>
                                        <option value="CDI">CDI</option>
                                        <option value="PRESTATAIRE">PRESTATAIRE</option>
                                        <option value="STAGIAIRE">STAGIAIRE</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">situation matrimoniale</label>
                                    <select required name="sm" id="inputState" class="form-select">
                                        <option selected>choisir...</option>
                                        <option value="celibataire sans enfants">Célibataire sans enfants</option>
                                        <option value="celibataire avec enfants">Célibataire avec enfants</option>
                                        <option value="Marié">Marié</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Nombre d'enfant</label>
                                    <input name="nbenfant" type="number" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Date de prise de fonction</label>
                                    <input name="date" type="date" class="form-control" id="inputPassword4">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Numero fiscal</label>
                                    <input name="nfiscal" type="number" class="form-control" id="inputPassword4">
                                </div>
                                
                                
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Domiciliation</label>
                                    <input name="domicile" type="text" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputAddress" class="form-label">Numero du compte</label>
                                    <input name="ncompte" type="number" class="form-control" id="inputAddress">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputAddress" class="form-label">Numero CNSS</label>
                                    <input name="ncnss" type="number" class="form-control" id="inputAddress">
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Indemnité forfaitaire</label>
                                    <input name="ifd" type="Number" class="form-control" id="inputAddress2">
                                </div>
                               
                                
                                <div class="row mt-5">
                                    <div class="col-sm-4">
                                        <input name="sab" type="number" class="form-control" placeholder="Salaire mensuel de base" aria-label="City">
                                    </div>
                                    <div class="col-sm-4">
                                        <input name="primea" type="number" class="form-control" placeholder="Prime d'anciennete" aria-label="State">
                                    </div>
                                    <div class="col-sm-4">
                                        <input name="primel" type="number" class="form-control" placeholder="Prime de Logement " aria-label="Zip">
                                    </div>
                                    

                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                    </div>








                </div>
                <div class="order-1 order-lg-2 col-lg-3">
                    <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">

                        <nav id="TableOfContents"></nav>
                    </div>
                </div>
            </div>

        </div>
        <!-- ./ content -->

        <!-- content-footer -->
        <footer class="content-footer">
            <div>© 2021 Vetra - <a href="https://ddmatg.com/" target="_blank">DDMA Solution</a></div>
           
        </footer>
        <!-- ./ content-footer -->

    </div>
    <!-- ./ layout-wrapper -->

    <!-- Bundle scripts -->

    <!-- Prism -->
    <script src="../../libs/prism/prism.js"></script>

    <!-- Main Javascript file -->
    <script src="../../dist/js/app.min.js"></script>
</body>

<!-- Mirrored from vetra.DDMA Solution.com/demos/default/forms-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jan 2022 15:53:18 GMT -->

</html>