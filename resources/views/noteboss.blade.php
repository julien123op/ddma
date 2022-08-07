@extends('Layout.master')
@section('content')
    <title> PGI-PAYE | Evaluation  </title>
    @endsection

    @section('contenu')

    <SCRIPT LANGUAGE="JavaScript">
        function confirmation() {
        var msg = "Êtes-ce bien la note que vous voulez attribuer à cet utilisateur ?";
        if (confirm(msg))
        location.replace(tonscript.php);
        }
        </SCRIPT> 
    
<div class="page-title">Evaluation</div>
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
                            <form class="row g-3" method="POST" action="/addnoteoff">
                                @csrf
                                
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">Utilisateur</label>
                                    <select required name="employe_id" id="inputState" class="form-select">
                                        <option selected>choisir...</option>
                                        @foreach ($notebossemp as $notebossemp)
                                        <option value="{{$notebossemp->employe_matricule}}"> {{$notebossemp->employe_matricule}} {{$notebossemp->employe_nom}} {{$notebossemp->employe_prenom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                               
                                
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Note</label>
                                    <input name="notef" type="number" class="form-control" id="inputEmail4"> 
                                </div>
                                
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" onClick="confirmation()" >Proposer note</button>
                                </div>
                                

                            </form>
                        </div>
                    </div>
                </div>
        <!-- ./ content -->
        @endsection
    