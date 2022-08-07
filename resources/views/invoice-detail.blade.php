@extends('Layout.master')
@section('content')
    <title id="pageTitle">PGI-PAYE | Bulletin</title>

    @endsection

    @section('contenu')
            <!-- ./ Logo -->
            {{-- <div style="align-items: center"> --}}
            <div class="content ">
                <div class="row">
                         {{-- <div class="card">: --}}
                                <div style="text-align: center" class="col-lg-12 bd-content">
                                    {{-- <div class="text-center"> --}}
<h2>Bulletin de paie</h2>
                                    </table></div></div></div>
                                {{-- </div> --}}
                                {{-- </div></div> --}}

         
           
        </div>
        <!-- ./ header -->
        
        
        
        <!-- content -->
        @foreach($user as $user)
        
        
        <div class="content ">
                        <div class="row">
                            {{-- <div   class="col-lg-12 bd-content"> --}}
                                 <div class="card">
                                    <div class="card-body">
                                        <div class="col-lg-12 bd-content">
                                            <table id="datatable" class="table table-striped table-bordered nowrap">
                                              {{-- <td>
                                                    <h2><strong>DD MANAGEMENT APPLICATION SOLUTION</strong></h2>

                                                <td> --}}

                                           
                                                    <tr>
                                                    <td>Matricule : <td>{{$user->matricule}}</td></td>
                                                    <td>Situation matrimoniale : <td>{{$user->sm}}</td></td>

                                                </tr>
                                               

                                               
                                                <tr>
                                                    <td>Nom : <td>{{$user->nom}}</td></td>
                                                    <td>Nombre d'enfants : <td>{{$user->nbEnf}}</td></td>

                                                </tr>
                                                <tr>
                                                    <td>Prenom : <td>{{$user->prenom}}</td></td>
                                                    <td>N°CNSS : <td>{{$user->n_cnss}}</td></td>

                                                </tr>
                                                <tr>
                                                    <td>Sexe : <td>{{$user->sexe}}</td></td>
                                                    <td>N°Fiscal : <td>{{$user->n_fiscal}}</td></td>


                                                </tr>
                                                <tr>
                                                    <td>Grade : <td>{{$user->grade}}</td></td>
                                                    <td>Domiciliation : <td>{{$user->domiciliation}}</td></td>

                                                </tr>
                                                <tr>
                                                    <td>Poste : <td>{{$user->poste}}</td></td>
                                                    <td>N° de compte : <td>{{$user->n_compte}}</td></td>


                                                </tr>
                                                <tr>
                                                    <td>Contrat : <td>{{$user->contrat}}</td></td>

                                                </tr>
                                            

                                        </td>
                                    </td>
                                  
                                          </table>
                                            
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
        </div>
        <div style="text-align: center">
  {{--       <div class="content "> --}}
            <div class="row">
                <div class="col-lg-12 bd-content">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-striped table-bordered nowrap">
                                                <div style="background-color: cadetblue">              
                                <tr>
                                    <td>Rubriques </td>
                                    <td>Gains</td>
                                    <td>Retenues</td>
                                    <td>Base</td>
                                    <td>Taux</td>
                                    <td>Charge patronale</td>
                                </tr></div>
                                <tr>
                                    <td>Salaire/M</td>
                                    <td>{{$user->salaire}}</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Prime-A</td>
                                    <td>{{$user->primeA}}</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Prime-L</td>
                                    <td>{{$user->primeL}}</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>                                                                          
                                </tr>
                                <tr>
                                    <td>Indemnité</td>
                                    <td>{{$user->ifd}}</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Salaire</td>
                                    <td>{{$user->salaire+$user->primeA+$user->primeL+$user->ifd}}</td>
                                    <td>-</td>
                                    <td>{{$user->salaire+$user->primeA+$user->primeL+$user->ifd}}</td>
                                    <td>17,5%</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>CNSS</td>
                                    <td>-</td>
                                    <td>{{$user->cnss}}</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>IRPP</td>
                                    <td>-</td>
                                    <td>{{$user->irpp}}</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>{{$user->charp}}</td>
                                </tr>
                                                   
                                       
                                    </table>   
                                </table>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="text-align: right" class="content ">
                    <div class="row">
                        <div class="col-lg-4 bd-content">
                            {{-- <div class="card">
                                <div class="card-body"> --}}
                                    <table id="exemple" class="table table-striped table-bordered nowrap">

                
                    <tr><td><i>NET A PAYER<td>{{$user->salaire+$user->primeA+$user->primeL+$user->ifd-$user->irpp-$user->cnss}} <strong><i>FCFA</i></strong></td></i></td></tr>
                
                                    </table></div></div></div></div></div></div>
                                {{-- </div></div> --}}
        @endforeach
        

        

        @endsection