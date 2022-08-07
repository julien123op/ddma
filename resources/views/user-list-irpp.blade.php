@extends('Layout.master')
@section('content')
    <title> PGI-PAYE | IRPP </title>
    @endsection

    @section('contenu')   <!-- ./ Logo -->
            <div class="page-title">Liste des irpp</div>
        
@section('search')
@endsection
           
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
                                        <th>irpp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($irppemp as $irppemp)
                                    <tr>
                                        <td>{{$irppemp->matricule}}</td>
                                        <td>{{$irppemp->nom}}</td>
                                        <td>{{$irppemp->prenom}}</td>
                                        <td>{{$irppemp->poste}}</td>
                                        <td>{{$irppemp->numero_compte}}</td>
                                        <td>{{$irppemp->irpp}}</td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                                
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            @endsection