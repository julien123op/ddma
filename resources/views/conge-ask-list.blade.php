@extends('Layout.master')
@section('content')
    <title>PGI-PAYE | Liste des demandes de congés </title>
    @endsection
    @section('contenu')
    <div class="page-title">Liste des demandes de congés</div>
    <form class="search-form">
        <div class="input-group">
            <button class="btn btn-outline-light" type="button" id="button-addon1">
                <i class="bi bi-search"></i>
            </button>
            <input type="text" class="form-control" placeholder="Search..."
                   aria-label="Example text with button addon" aria-describedby="button-addon1">
            <a href="#" class="btn btn-outline-light close-header-search-bar">
                <i class="bi bi-x"></i>
            </a>
        </div>
    </form>
    <!-- Header mobile buttons -->
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
                    <div class="card">
                        <div class="card-body">
                    {{-- <div class="order-2 order-lg-1 col-lg-9 bd-content">
                        <h4>Informations</h4>
                        <div class="card">
                            <div class="card-body"> --}}
                                @if(Session::get('echec'))
                                <div class="alert alert-danger">
                                        <p>{{Session::get('echec')}}</p>
                                </div>
                                @endif
                            <table id="datatable" class="table"  >
                                <div class="col-xs-2">
                                     <thead>
                                    
                                    <tr>               
                                            <th>Identifiant</th>                     
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Type</th>
                                            <th>Motif</th>
                                            <th>Choix</th>
                                    </tr>
                                    </thead>
                                    {{-- <ol reversed> --}}
                                    <tbody>
                                        @foreach($conemp as $conemp)
                                        <form class="row g-2" method="post" action="/addchoice">
                                            @csrf
                                            
                                       
                                        
                                        <tr>
                                            

                                           
                                            <td><input name="employe_id" value="{{$conemp->employe_matricule}}" size="4"></td>                         
                                            <td><input name="nom" value="{{$conemp->nomp}}" size="5" ></td>
                                            <td><input name="prenom" value="{{$conemp->prenomp}}" size="5" ></td>
                                            <td><input name="type" value="{{$conemp->type}}" size="4" ></td>
                                            <td><input name="motif" value="{{$conemp->motif}}" size="5" ></td>
                                                                <td>
                                                <select name="choix"  id="inputState" class="form-select">
                                                    <option selected>choisir...</option>
                                                    <option value="Validé">Validé</option>
                                                    <option value="Reporté">Reporté</option>
                                                    <option value="Rejeté">Rejeté</option>
                                                    {{-- <option selected> {{$notebossemp->nom}}{{$notebossemp->prenom}}</option> --}}
                                                </select>
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-primary">Envoyer réponse</button>
                                            </td>
                                        
                                        </tr>
                                        
                                       
                                        </form>
                                        @endforeach
                                    </tbody>
                                {{-- </ol> --}}
                                    </tfoot>
                                </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endsection