<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DD-M.A. | Charges patronales </title>

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


    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

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

    <div class="menu-body">
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                
                <div>
                    <div class="fw-bold">Nom</div>
                    <small class="text-muted">Poste</small>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
           
                <a href="/logout" class="dropdown-item d-flex align-items-center text-danger"
                  >
                    <i class="bi bi-box-arrow-right dropdown-item-icon"></i> deconnexion
                </a>
            </div>
        </div>
        <ul>
            <li class="menu-divider">Gestionnaire de paie</li>
            <li>
                <a  class="active"
                    href="/">
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
            <a href="/" class="logo">
                <img width="100" src="https://vetra.DDMA Solution.com/assets/images/logo.svg" alt="logo">
            </a>
            <!-- ./ Logo -->
            <div class="page-title">Liste des charges patronales</div>
           

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
                <div class="col-lg-12 bd-content">





                    <div class="card">
                        <div class="card-body">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                <tr>
                                        <th>Matricule</th>
                                        <th>Poste</th>
                                        <th>Numero de compte</th>
                                        <th>Salaire annuel</th>
                                        <th>Retenue CNSS</th>
                                        <th>Retenue IRPP</th>
                                        <th>Charge patronale</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($listemp as $listemp)
                                    <tr>
                                        <td>{{$listemp->matricule}}</td>
                                        <td>{{$listemp->poste}}</td>
                                        <td>{{$listemp->n_compte}}</td>
                                        <td>{{$listemp->sab*12}}</td>
                                        <td>{{$listemp->cnss}}</td>
                                        <td>{{$listemp->irpp}}</td>
                                        <td>{{$listemp->charp}}</td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Matricule</th>
                                        <th>Poste</th>
                                        <th>Numero de compte</th>
                                        <th>Salaire annuel</th>
                                        <th>Retenue CNSS</th>
                                        <th>Retenue IRPP</th>
                                        <th>Charge patronale</th>
                                        
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <a href="javascript:history.back()" class="btn bg-white">Retour</a>

        </div>

        <footer class="content-footer">
            <div>© 2021 .. - <a href="https://DDMA Solution.com/" target="_blank">Mr Julien</a></div>
           
        </footer>
        <!-- ./ content-footer -->

    </div>

    <script src="../../dist/js/app.min.js"></script>
    <script src="../../libs/prism/prism.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>

 
</body>

</html>