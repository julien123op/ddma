@extends('Layout.master')
@section('content')
    <title> PGI-PAYE - CV  </title>
    @endsection

    @section('contenu')
    <div class="page-title">Enregistrer un cv</div>
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
    <form class="row g-3" method="POST" action="/addcv">
        @csrf

        <div class="col-md-6">
            <label for="inputState" class="form-label">Utilisateur</label>
            <select required name="empmat" id="inputState" class="form-select">
                <option selected>choisir...</option>
                @foreach ($empemp as $empemp)
                <option value="{{$empemp->matricule}}">{{$empemp->nom}} {{$empemp->prenom}}</option>
                {{-- <option selected> {{$empemp->nom}}{{$empemp->prenom}}</option> --}}
                @endforeach 
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Formations</label>
            <input name="formation" type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputAddress" class="form-label">Connaissances informatiques</label>
            <input name="conninfo" type="text" class="form-control" id="inputAddress">
        </div>
        <div class="col-md-6">
            <label for="inputAddress" class="form-label">Compétences</label>
            <input name="competences" type="text" class="form-control" id="inputAddress">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </form>
    @endsection