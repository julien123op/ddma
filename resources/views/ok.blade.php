@extends('Layout.master')
@section('content')
    <title>PGI-PAYE | Congés accordés </title>
    @endsection

    @section('contenu')
    <div class="page-title">Liste des congés accordés</div>

</div>

    <div class="content ">
        <div class="row">
            <div class="col-lg-12 bd-content">
                <div class="card">
                    <div class="card-body">
                        <table id="datatable-example" class="table">
                            
                            <thead>
                            <tr>
                                    <th>Identifiant</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Type de congés</th>
                                    <th>Motif</th>
                                    {{-- <th>Numero de cni</th> --}}
                                    <th>Choix</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($okemp as $okemp)
                                
                                <tr>
                                    <td>{{$okemp->employe_id}}</td>
                                    <td>{{$okemp->nom}}</td>
                                    <td>{{$okemp->prenom}}</td>
                                    <td>{{$okemp->type}}</td>
                                    <td>{{$okemp->motif}}</td>
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