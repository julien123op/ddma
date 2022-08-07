@extends('Layout.master')
@section('content')
    <title> PGI-PAYE | Evaluation  </title>
    @endsection
    <SCRIPT LANGUAGE="JavaScript">
        function confirmationn() {
        var msg = "Êtes-ce bien la note que vous voulez vous attribuer ?";
        if (confirm(msg))
        location.replace(tonscript.php);
        }
        </script>
{{-- <script>
    function notifyMe() {
  // Let's check if the browser supports notifications
  if (!("Notification" in window)) {
    alert("This browser does not support desktop notification");
  }

  // Let's check whether notification permissions have already been granted
  else if (Notification.permission === "granted") {
    // If it's okay let's create a notification
    let notification = new Notification("!");
  }

  // Otherwise, we need to ask the user for permission
  else if (Notification.permission !== "denied") {
    Notification.requestPermission().then(function (permission) {
      // If the user accepts, let's create a notification
      if (permission === "granted") {
        let notification = new Notification("!");
      }
    });
  }-
} --}}

   </script>
                 {{-- <script>
                    $(document).ready(function(){
                    // Mettre à jour la vue avec les notifications en utilisant ajaxfunction load_unseen_notification(view = ''){
                        $.ajax({
                            url:"/liste-des-notes-personnelles-de-l-utilisateur",
                            method:"POST",
                            data:{view:view},
                            dataType:"json",
                            success:function(data){
                                $('.dropdown-menu').html(data.notification);
                                if(data.unseen_notification > 0){
                                    $('.count').html(data.unseen_notification);
                                }
                            }
                        });
                    }
             
                load_unseen_notification();
                    // Soumettre le formulaire et obtenir de nouveaux enregistrements
                    $('#note').on('submit',  function(event){
                        event.preventDefault();
                        if($('#id').val()  !=  ''  &&  $('#note').val()  !=  ''){
                            var  form_data  =  $(this).serialize();
                            $.ajax({
                                url:"note",
                                method:"POST",
                                data:form_data,
                                success:function(data){
                                    $('#note')[0].reset();
                                    load_unseen_notification();
                                }
                            });
                        }else{
                            alert("Les deux champs sont obligatoires");
                        }
                });
             
            // Chargement des nouvelles notifications
                $(document).on('click',  '.dropdown-toggle',  function(){
                        $('.count').html('');
                        load_unseen_notification('yes');
                });
                setInterval(function(){
                        load_unseen_notification();;
                        },  5000);
                }); 
            </script> --}}
    @section('contenu')
<div class="page-title">Evaluation personnelle</div>
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
                            <form class="row g-3" method="POST" action="/addnote">
                                @csrf
                                 {{-- <div class="col-md-6"> --}}

                        {{-- <select required name="employe_matricule"id="inputState" class="form-select">
                            <select required  name="employe_nom" id="inputState" class="form-select"> --}}
                                <label for="inputEmail4" class="form-label">Vous êtes: </label>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Matricule</label>
                                    <input name="matricule" type="number" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">Nom</label>
                                    <input name="nom" type="text" class="form-control" id="inputAddress2">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Prénom</label>
                                    <input name="prenom" type="text" class="form-control" id="inputPassword4">
                                </div>
                                {{-- <select required name="employe_matricule" id="inputState" class="form-select">
                                        <option value="employe_matricule" value="employe_nom" value="employe_prenom">Choisir</option>
                                        @foreach($noteemp as $noteemp)
                                        <option selected>{{$noteemp->matricule}} {{$noteemp->nom}} {{$noteemp->prenom}}</option>
                                        @endforeach
                                    </select>
                            </select></select>
                                    
                                </div> --}}
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Quelle note vous donneriez vous sur 20 </label>
                                    <input name="note" type="number" class="form-control" id="inputEmail4">
                                </div>
                                
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" onClick="NotifyMe()">Proposer note</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        <!-- ./ content -->
        @endsection
 