@extends('Layout.master')
@section('content')
    <title> PGI-PAYE | CNSS </title>
            <!-- ./ Logo -->@endsection

@section('contenu')
            <div class="page-title">Liste CNSS</div>
        

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
                                        <th>CNSS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cnssemp as $cnssemp)
                                    <tr>
                                        <td>{{$cnssemp->matricule}}</td>
                                        <td>{{$cnssemp->nom}}</td>
                                        <td>{{$cnssemp->prenom}}</td>
                                        <td>{{$cnssemp->poste}}</td>
                                        <td>{{$cnssemp->n_compte}}</td>
                                        <td>{{$cnssemp->cnss}}</td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                               
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            @endsection