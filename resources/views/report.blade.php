@extends('Layout.master')
@section('content')
    <title>PGI-PAYE | Congés reportés </title>
    @endsection

    @section('contenu')
    <div class="page-title">Liste des congés reportés</div>

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
                                @foreach($repemp as $repemp)
                                
                                <tr>
                                    <td>{{$repemp->employe_id}}</td>
                                    <td>{{$repemp->nom}}</td>
                                    <td>{{$repemp->prenom}}</td>
                                    <td>{{$repemp->type}}</td>
                                    <td>{{$repemp->motif}}</td>
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
                @endsection