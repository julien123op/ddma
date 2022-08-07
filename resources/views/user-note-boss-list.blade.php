@extends('Layout.master')
@section('content')
    <title>PGI-PAYE | Notes attribuées</title>
    @endsection
    
    @section('contenu')   <!-- ./ Logo -->
            <div class="page-title">Notes attribuées</div>
           

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
                                        <th>Note donnée</th>    
                                         
                                </thead>
                                <tbody>
                                    {{--  --}}
                                    
                                       
                                    
                                    @foreach($noteboss as $noteboss)
                                    {{-- @if(Session::get('echec')) 
                                    <div class="alert alert-danger">
                                            <p>{{Session::get('echec')}}</p>
                                    </div>
                                    @endif
                                    <tr><form class="row g-3" method="POST" action="/sup">
                                        @csrf --}}
                                        <td>{{$noteboss->employe_id}}</td>
                                        <td>{{$noteboss->notefinale}}</td>
                                        
                                    </tr>
                                    @endforeach
                                
                                
                                </tbody>
                                
                            </table>
                           
                        </div>

                    </div>
                </div>
            </div>
            
                
            @endsection