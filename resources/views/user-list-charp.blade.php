@extends('Layout.master')
@section('content')
    <title>PGI-PAYE | Charges patronales </title>
    @endsection

    @section('contenu')
            <!-- ./ Logo -->
            <div class="page-title">Liste des charges patronale</div>
           

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
                            <table id="datatable-example" class="table table-striped table-bordered nowrap">
                                
                                <thead>
                                <tr>
                                        <th>Matricule</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Poste</th>
                                        <th>Numero de compte</th>
                                        <th>Charge patronale</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cpaemp as $cpaemp)
                                    <tr>
                                        <td>{{$cpaemp->matricule}}</td>
                                        <td>{{$cpaemp->nom}}</td>
                                        <td>{{$cpaemp->prenom}}</td>
                                        <td>{{$cpaemp->poste}}</td>
                                        <td>{{$cpaemp->n_compte}}</td>
                                        <td>{{$cpaemp->charp}}</td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                                
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            @endsection