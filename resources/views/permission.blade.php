@extends('Layout.master') 
@section('content')
<title>PGI-PAYE| Demande de permission</title>
@endsection

@section('contenu')   <!-- ./ Logo -->
            <div class="page-title">Effectuer une demande de permission</div>
          

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
                <div class="order-2 order-lg-1 col-lg-9 bd-content">


                    <h4>Informations</h4>

                    <div class="card">
                        <div class="card-body">
                            @if(Session::get('echec'))
                            <div class="alert alert-danger">
                                    <p>{{Session::get('echec')}}</p>
                            </div>
                            @endif
                            <form class="row g-3" method="POST" action="/addaskp">
                                @csrf
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Votre matricule</label>
                                    <input name="mat" type="number" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Nom</label>
                                    <input name="nom" type="text" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Prenom</label>
                                    <input name="prenom" type="text" class="form-control" id="inputPassword4">
                                </div>
                                {{-- <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">E-mail</label>
                                    <input name="email" type="email" class="form-control" id="inputEmail4">
                                </div> --}}
                                {{-- <div class="col-md-6">
                                    <label for="inputState" class="form-label">Type de congés</label>
                                    <select required name="type" id="inputState" class="form-select">
                                        <option selected>choisir...</option>
                                        <option value="annuel">Annuel</option>
                                        <option value="maternite/paternite">Maternité/Paternité</option>
                                        <option value="formation">Formation</option>
                                        <option value="maladie">Maladie</option>
                                        <option value="circonstance">Circonstances</option>
                                        <option value="autre">Autre</option>
                                    </select>
                                </div> --}}
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Motif de la demande</label>
                                    <input name="motif" type="text" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Date de debut</label>
                                    <input name="dd" type="time"  value="22:00" class="form-control" id="inputPassword4">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">date de fin</label>
                                    <input name="df" type="time" class="form-control" id="inputEmail4">
                                </div>
                               
                                {{-- <form method="post" action="mailto:julien123op@gmail.com"> --}}
                                <div class="text-center ">
                                    
                                    <button type="submit" class="btn btn-primary"> <b> Envoyer la demande</b></button>
                                        
                                    
                                </div>
                                {{-- </form> --}}
                                
                              
                            </form>
                        </div>
                    </div>



                    @endsection