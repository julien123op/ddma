@extends('Layout.master')
@section('content')
    <title>PGI-PAYE | Permissions accordés </title>
    @endsection

    @section('contenu')
    <div class="page-title">Liste des permissions accordés</div>

    </div>
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
                                    <th>Motif</th>
                                    {{-- <th>Début</th>
                                    <th>Fin</th> --}}
                                    <th>Choix</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($okemp as $okemp)
                                
                                <tr>
                                    <td>{{$okemp->employe_id}}</td>
                                    <td>{{$okemp->nom}}</td>
                                    <td>{{$okemp->prenom}}</td>
                                    <td>{{$okemp->motif}}</td>
                                    {{-- <td>{{$okemp->h_debut}}</td>
                                    <td>{{$okemp->h_fin}}</td> --}}
                                    <td>{{$okemp->choix}}</td> 

                                </tr>
                           
                                @endforeach
                               
                            </tbody>
                           
                            </tfoot>
                        </table>
                    </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
                @endsection