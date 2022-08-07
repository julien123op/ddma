@extends('Layout.master')
@section('content')
    <title>PGI-PAYE | Bulletins </title>
    @endsection

    @section('contenu')
    <script>
function submitter(btn) {
    var data = $('#example').DataTable().row('.selected').data();
    var param = btn.parentElement.parentElement.id;
    var myForm = document.forms["myForm"];
    myForm.elements["param"].value = param;
    myForm.submit();
}
    </script>

    
            <!-- ./ Logo -->
            <div class="page-title">Liste des bulletins annuels</div>
           

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
                                        <th>Prenom</th>
                                        <th>Sexe</th>
                                        <th>Poste</th>
                                        <th>Grade</th>
                                        <th>Type de contrat</th>
                                        <th>Salaire annuel</th>
                                        <th>Prime d'ancienneté</th>
                                        <th>Prise de fonction</th>
                                        <th>Situation matrimoniale</th>
                                        <th>Nombre d'enfants</th>
                                        <th>Ancienneté</th>
                                        <th>Numero de compte</th>
                                        <th>Numero CNSS</th>
                                        <th>Numero fiscal</th>
                                        <th>Domiciliation</th>
                                        <th>Indémnité forfétaire</th>
                                        <th>CNSS</th>
                                        <th>IRPP</th>
                                        <th>Charge patronale</th>

                                        {{-- <th>Retenue IRPP</th>
                                        <th>Charge patronale</th> --}}
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($listemp as $listemp)
                                    <tr>
                                        <td>{{$listemp->matricule}}</td>
                                        <td>{{$listemp->nom}}</td>
                                        <td>{{$listemp->sexe}}</td>
                                        <td>{{$listemp->prenom}}</td>
                                        <td>{{$listemp->poste}}</td>
                                        <td>{{$listemp->grade}}</td>
                                        <td>{{$listemp->contrat}}</td>
                                        <td>{{($listemp->salaire+$listemp->primeA+$listemp->primeL+$listemp->ifd)*12}}</td>
                                        <td>{{$listemp->primeA}}</td>
                                        <td>{{$listemp->dateT}}</td>
                                        <td>{{$listemp->sm}}</td>
                                        <td>{{$listemp->nbEnf}}</td>
                                        <td>{{$listemp->anciennete}}</td>
                                        <td>{{$listemp->n_compte}}</td>
                                        <td>{{$listemp->n_cnss}}</td>
                                        <td>{{$listemp->n_fiscal}}</td>
                                        <td>{{$listemp->domiciliation}}</td>
                                        <td>{{$listemp->ifd}}</td>
                                        <td>{{$listemp->cnss}}</td>
                                        <td>{{$listemp->irpp}}</td>
                                        <td>{{$listemp->charp}}</td>

                                        {{-- <td><a href="bulletin" onclick="submitter()">Détails</a></td> --}}
                                        {{-- <td>{{$listemp->irpp*12}}</td>
                                        <td>{{$listemp->charp*12}}</td> --}}
                                    </tr></a>
                                    @endforeach
                                   
                                </tbody>
                                
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            @endsection