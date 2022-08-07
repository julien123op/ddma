@extends('Layout.master')
@section('content')
<title> PGI-PAYE | Ajout de personnel </title>
@endsection
@section('contenu')
<div class="page-title">Enregistrer du personnel</div>
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
                            <form class="row g-3" method="POST" action="/addper">
                                @csrf
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Nom</label>
                                    <input name="nom" type="text" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Prenom</label>
                                    <input name="prenom" type="text" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Numero de téléphone</label>
                                    <input name="tel" type="number" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Numero de carte d'identité nationale</label>
                                    <input name="cni" type="number" class="form-control" id="inputPassword4">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Mot de passe</label>
                                    <input name="mdp" type="text" class="form-control" id="inputEmail4">
                                </div>
                               <div class="col-md-4">
                                    <label for="inputState" class="form-label">Role</label>
                                    <select required name="rol" id="inputState" class="form-select">
                                        <option selected>choisir...</option>
                                        <option value="employe">utilisateur</option>
                                        <option value="RH">RH</option>
                                        <option value="DRH">DRH</option>
                                        <option value="Comptable">Comptable</option>
                                        
                                    </select>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        <!-- ./ content -->
        @endsection