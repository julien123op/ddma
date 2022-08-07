@extends('Layout.master')
@section('content')
    <title>PGI-PAYE | Liste du personnel </title>
    @endsection

    @section('contenu')
    <div class="page-title">Liste du personnel</div>

    {{-- <form class="search-form">
        <div class="input-group">
            <button class="btn btn-outline-light" type="button" id="button-addon1">
                <i class="bi bi-search"></i>
            </button>
            <input type="text" class="form-control" placeholder="Recherche..."
                   aria-label="Example text with button addon" aria-describedby="button-addon1">
            <a href="#" class="btn btn-outline-light close-header-search-bar">
                <i class="bi bi-x"></i>
            </a>
        </div>
    </form> --}}
    {{-- <div class="sidebar" id="search">  
         <div class="sidebar-header">
            Recherche:
            <button data-sidebar-close>
                <i class="bi bi-arrow-right"></i>
            </button>
        </div>
        <div class="sidebar-content">
            <form class="mb-4">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" aria-describedby="button-search-addon">
                    <button class="btn btn-outline-light" type="button" id="button-search-addon">
                        <i class="bi bi-search"></i>
                    </button>
                </div> 
            </form> --}} 
            
            {{-- <div class="header-mobile-buttons">
                <a href="#" class="search-bar-btn">
                    <i class="bi bi-search"></i>
                </a>
                <a href="#" class="actions-btn">
                    <i class="bi bi-three-dots"></i>
                </a>
            </div> --}}
                
            {{-- </div></div>
                --}}
            </div> 
        
    <!-- Header mobile buttons -->
   
    <!-- ./ Header mobile buttons -->

    <!-- ./ header -->

    <!-- content -->
    <div class="content ">
        <div class="row">
            <div class="col-lg-12 bd-content">
                <div class="card">
                    <div class="card-body">
                        <table id="datatable-example" class="table table-striped table-bordered nowrap">
                            
                                    <thead>
                                    <tr>
                                            <th>Identifiant</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Numero de telephone</th>
                                            <th>Numero de cni</th>
                                            <th>Role</th>
                                            <th>Option</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($peremp as $peremp)
                                        
                                            @if(Session::get('echec')) 
                                    <div class="alert alert-danger">
                                            <p>{{Session::get('echec')}}</p>
                                    </div>
                                    @endif
                                    <form class="row g-3" method="POST" action="/supp">
                                        @csrf
                                        <tr>

                                            <td>{{$peremp->id}}</td>
                                            <td>{{$peremp->nom}}</td>
                                            <td>{{$peremp->prenom}}</td>
                                            <td>{{$peremp->n_tel}}</td>
                                            <td>{{$peremp->n_cni}}</td>
                                            <td>{{$peremp->role}}</td> 
                                            {{-- <th class="sorting dtr-hidden" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="E-mail: activate to sort column ascending"> --}}
                                            {{-- <td><form action="/supp" method="post"><button class=" btn btn-danger" onclick="confirmation()">Supprimer</button></form></td> --}}
                                            <td><a href="/supp" onclick="confirmation()">Supprimer</button></td>
                                        </tr>
                                    </form>
                                    
                                   
                                        @endforeach
                                       
                                    </tbody>
                                   
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
                @endsection