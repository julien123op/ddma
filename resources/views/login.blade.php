<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PGI-PAYE | Connexion </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png"/>

    <!-- Themify icons -->
    <link rel="stylesheet" href="../../dist/icons/themify-icons/themify-icons.css" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="../../dist/css/app.min.css" type="text/css">


</head>
<body style="background-color:rgb(11, 13, 150)  " class="auth">
    <div class="form-wrapper">
        <div class="container">
            <div class="card">
                <div class="row g-0">
                    <div class="col">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                {{-- <div class="d-block d-lg-none text-center text-lg-start">
                                    <img width="120" src="https://vetra.DDMA Solution.com/assets/images/logo.svg" alt="logo">
                                </div> --}}
                                <div class="my-5 text-center text-lg-start">
                                    <h1 class="display-8">Connexion</h1>
                                </div>

                                {{-- @if (Session::get('error'))
                                <div class=" alert alert-danger">
                                    <p>{{Session::get('error')}}</p>
                                </div>
                                    @endif --}}
                                <form class="mb-5" action="/log" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <input style="border-color:rgb(11, 13, 150) " type="text" name="nom" class="form-control" placeholder="Entrez votre nom"
                                               required>
                                    </div>
                                    <div class="mb-3">
                                        <input style="border-color:rgb(11, 13, 150) "  type="password" name="mdp" class="form-control" placeholder="Entrez votre mot de passe"
                                               required>
                                    </div>
                                    <div class="text-center ">
                                        <button style="background-color:rgb(11, 13, 150) ;border-color:rgb(11, 13, 150)" type="submit" class="btn btn-primary">Se connecter</button>
                                    </div>
                                </form>
                                <div class="text-center">
                                    
                                    <a href="/login-employe">
                                        
                                        <button style="box-align: center; background-color:rgb(11, 13, 150)  ;border-color:rgb(11, 13, 150); text-decoration-color: blue" type="submit" class="btn btn-primary"><span>Se connecter en tant qu'utilisateur</button>
                                        {{-- <i class="bi bi-box-arrow-right dropdown-item-icon"></i> deconnexion --}}
                                    </a>
                    </div>
                            </div>
                        </div>
                    </div>
                 
                    <div class="col d-none d-lg-flex border-start align-items-center justify-content-between flex-column text-center">
                        <div class="logo">
                        </div>

                        <div>
                            <a href="/" class="logo">
                                <img src="{{ asset('logo.pgipaie.png') }}" alt="pgipaie" width="400" height="200">
                            </a>
                        </div>
:                            
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                              <a  href="/ajouter-employer">Ajouter un utilisateur</a>
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
                              <a  href="/liste-des-employes">Liste des utilisateurs</a>
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
                    <a  href="/parametre">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Parametres</span>
                    </a>
                </li> --}}
                
               
            @endif


<!-- Bundle scripts -->

<!-- Main Javascript file -->
<script src="../../dist/js/app.min.js"></script>

<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

</body>

</html>
