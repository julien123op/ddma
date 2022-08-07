@extends('Layout.master')
@section('content')
    <title>PGI-PAYE | Notes personnelles des utilisateurs</title>
    @endsection
    
    @section('contenu')   <!-- ./ Logo -->
   {{-- @php
        if(isset($_POST['view'])){
            $query = $con->prepare("SELECT * 
                FROM evaluation 
                ORDER BY id DESC 
                LIMIT 5");
            $result = $query->execute;
            $output = '';
 
 
            if($result->RowCount() > 0){
                while($row = $result->fetch()){
                    $output  .=  '
                        <li>
                            <a href="#">
                                <strong>'.$row["id"].'</strong><br />
                                <small><em>'.$row["note"].'</em></small>
                            </a>
                        </li>
                ';
                }
            }else{
                $output .= '<li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
            }
 
 
            $status_query = $con->prepare("SELECT * 
                FROM evaluation 
            WHERE id = ?");
            $result_query = $status_query->executre(array(0));
            $count = $result_query->RowCount();
            $data  =  array(
                'notification'  =>  $output,
                'unseen_notification'  =>  $count
            );
        echo  json_encode($data);
    }
   @endphp --}}
   
  
            <div class="page-title">Notes personnelles des utilisateurs</div>
           

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
                                        <th>Note</th>    
                                         
                                </thead>
                                <tbody>
                                    {{--  --}}
                                    
                                       
                                    
                                    @foreach($note as $note)
                                    {{-- @if(Session::get('echec')) 
                                    <div class="alert alert-danger">
                                            <p>{{Session::get('echec')}}</p>
                                    </div>
                                    @endif
                                    <tr><form class="row g-3" method="POST" action="/sup">
                                        @csrf --}}
                                        <td>{{$note->employe_matricule}}</td>
                                        <td>{{$note->employe_nom}}</td>
                                        <td>{{$note->employe_prenom}}</td>
                                        <td>{{$note->note}}</td>
                                        
                                    </tr>
                                    @endforeach
                                
                                
                                </tbody>
                                
                            </table>
                           
                        </div>

                    </div>
                </div>
            </div>
            
                
            @endsection