@extends('Layout.master')
@section('content')
    <title>PGI-PAYE | Liste des utilisateurs</title>
    @endsection
    
    @section('contenu')   <!-- ./ Logo -->
            <div class="page-title">Liste des utilisateurs</div>
           

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
                            <table id="datatable" class="table table-striped table-bordered nowrap">
                                
                                <thead>
                                <tr>
                                        <th>Matricule</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Sexe</th> 
                                        <th>Poste</th>   
                                        <th>Salaire </th>  
                                        {{-- <th>N°cnss</th>
                                        <th>CNSS</th> 
                                        <th>IRPP</th> 
                                        <th>Prime L</th> 
                                        <th>Contrat</th>  --}}
                                        <th>Option</th>  
                                        {{-- <th>Option</th>    --}}
                                         
                                </thead>
                                <tbody>
                                    {{--  --}}
                                    
                                       
                                    
                                    @foreach($empemp as $empemp)
                                    @if(Session::get('echec')) 
                                    <div class="alert alert-danger">
                                            <p>{{Session::get('echec')}}</p>
                                    </div>
                                    @endif
                                    <tr>

                                    <form class="row g-3" method="POST" action="/sup">
                                        @csrf
                                       
                                        <td>{{$empemp->matricule}}</td>
                                        <td>{{$empemp->nom}}</td>
                                        <td>{{$empemp->prenom}}</td>
                                        <td>{{$empemp->sexe}}</td>
                                        <td>{{$empemp->poste}}</td>
                                        <td>{{$empemp->salaire}}</td>
                                        {{-- <td>{{$empemp->n_cnss}}</td>
                                        <td>{{$empemp->cnss}}</td>
                                        <td>{{$empemp->irpp}}</td>
                                        <td>{{$empemp->primeL}}</td>
                                        <td>{{$empemp->contrat}}</td> --}}
                                        <td><button class="btn btn-danger" type="submit" onclick="confirmation()">Supprimer</button></td>
                        </form>
                    </tr>


                                    {{-- <td><a href="/modif-user" >Modifier</a></td>  --}}
                                    

                                    
                                    @endforeach
                                
                                
                                </tbody>
                                
                            </table>
                           
                        </div>

                    </div>
                </div>
            </div>
            
                
            @endsection