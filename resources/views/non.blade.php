@extends('Layout.master')
@section('content')
    <title>PGI-PAYE | Permissions refusés </title>
    @endsection

    @section('contenu')
    <div class="page-title">Liste des permissions refusés</div>

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
                                        @foreach($noemp as $noemp)
                                        
                                        <tr>
                                            <td>{{$noemp->employe_id}}</td>
                                            <td>{{$noemp->nom}}</td>
                                            <td>{{$noemp->prenom}}</td>
                                            <td>{{$noemp->motif}}</td>
                                            {{-- <td>{{$noemp->h_debut}}</td>
                                            <td>{{$noemp->h_fin}}</td> --}}
                                            <td>{{$noemp->choix}}</td> 

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
                @endsection