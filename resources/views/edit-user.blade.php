@extends('Layout.master')
@section('content')
    <title> PGI-PAYE | Modifier un utilisateur </title>
    @endsection
    @section('contenu')
            <!-- ./ Logo -->
            <div class="page-title">Modifier un utilisateur</div>
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
                            @foreach($modemp as $modemp)
                            <form class="row g-3" method="POST" action="/mod">
                                @csrf
                               
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Nom</label>
                                    <input name="nom" type="text" class="form-control" id="inputEmail4" value="{{$modemp->nom}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Prenom</label>
                                    <input name="prenom" type="text" class="form-control" id="inputPassword4" value="{{$modemp->prenom}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">Sexe</label>
                                    <select required name="sexe" id="inputState" class="form-select">
                                        <option selected>{{$modemp->sexe}}</option>
                                        <option value="Masculin">Masculin</option>
                                        <option value="Feminin">Feminin</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">E-mail</label>
                                    <input name="email" type="email" class="form-control" id="inputPassword4" value="{{$modemp->email}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">Poste</label>
                                    <input name="poste" type="text" class="form-control" id="inputAddress2" value="{{$modemp->poste}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">Contrat</label>
                                    <select required name="contrat" id="inputState" class="form-select" >
                                        <option selected>{{$modemp->contrat}}</option>
                                        <option value="CDD">CDD</option>
                                        <option value="CDI">CDI</option>
                                        <option value="PRESTATAIRE">PRESTATAIRE</option>
                                        <option value="STAGIAIRE">STAGIAIRE</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">situation matrimoniale</label>
                                    <select required name="sm" id="inputState" class="form-select">
                                        
                                        <option selected>{{$modemp->sm}}</option>
                                        <option value="celibataire sans enfants">Célibataire sans enfants</option>
                                        <option value="celibataire avec enfants">Célibataire avec enfants</option>
                                        <option value="Marié">Marié</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Nombre d'enfant</label>
                                    <input name="nbenfant" type="number" class="form-control" id="inputEmail4" value="{{$modemp->nbenfant}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Date de prise de fonction</label>
                                    <input name="date" type="date" class="form-control" id="inputPassword4" value="{{$modemp->date}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Numero fiscal</label>
                                    <input name="nfiscal" type="number" class="form-control" id="inputPassword4" value="{{$modemp->nfiscal}}">
                                </div>
                                 <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Domiciliation</label>
                                    <input name="domicile" type="text" class="form-control" id="inputPassword4" value="{{$modemp->domicile}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputAddress" class="form-label">Numero du compte</label>
                                    <input name="ncompte" type="number" class="form-control" id="inputAddress" value="{{$modemp->ncompte}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputAddress" class="form-label">Numero CNSS</label>
                                    <input name="ncnss" type="number" class="form-control" id="inputAddress" value="{{$modemp->ncnss}}">
                                </div>
                            
        {{-- @foreach($data as $data){
            if ($data->grade='GRADE 1'){

                $data->sab=150000;
                $data->primeL=25000;
                $data->ifd=30000;
            }}
            <script>
                if (test=="two") {
                    document.write("two!");
                }
                </script> --}}
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">Grade </label>
                                    <select required name="grade" id="inputState" class="form-select">
                                        
                                        <option selected>{{$modemp->grade}}</option>
                                        <option value="1">Grade 1</option>
                                        <option value="2">Grade 2</option>
                                        <option value="3">Grade 3</option>
                                        <option value="4">Grade 4</option>
                                    </select>
                                </div>
                                {{-- <script>
                                    if (grade=="GRADE 1") {
                                        document.write("two!");
                                    }
                                    </script> --}}
                                {{-- <div class="col-md-6">
                                    <label for="inputAddress2" class="form-label">Indemnité forfaitaire</label>
                                    <input name="ifd" type="Number" class="form-control" id="inputAddress2">
                                </div>
                                    <div class="col-md-6">
                                        <label for="inputAddress2" class="form-label">Salaire mensuel de base</label>
                                        <input name="sab" type="number" class="form-control"  aria-label="City">
                                    </div> --}}
                                    <div class="col-md-6">
                                        <label for="inputAddress2" class="form-label">Prime d'ancienneté</label>
                                        <input name="primea" type="number" class="form-control"  aria-label="State">
                                    </div>
                                    {{-- <div class="col-md-6">
                                        <label for="inputAddress2" class="form-label">Prime de logement</label>
                                        <input name="primel" type="number" class="form-control"  aria-label="Zip">
                                    </div> --}}
                                 </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" onclick="confirmations()">Modifier</button>
                                </div>
                            </form>
                            @endforeach
                            
                        </div>
                    </div>



@endsection



           