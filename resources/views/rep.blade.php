@extends('Layout.master')
@section('content')
    <title>PGI-PAYE | Permissions reportés </title>
    @endsection

    @section('contenu')
    <div class="page-title">Liste des permissions reportés</div>

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
                                @foreach($repemp as $repemp)
                                
                                <tr>
                                    <td>{{$repemp->employe_id}}</td>
                                    <td>{{$repemp->nom}}</td>
                                    <td>{{$repemp->prenom}}</td>
                                    <td>{{$repemp->motif}}</td>
                                    {{-- <td>{{$repemp->h_debut}}</td>
                                    <td>{{$repemp->h_fin}}</td> --}}
                                    <td>{{$repemp->choix}}</td> 

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