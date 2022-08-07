@extends('Layout.master')
@section('content')
    <title>PGI-PAYE | Curriculum Vitae </title>
    @endsection

    @section('contenu')
            <!-- ./ Logo -->
            <div class="page-title">Liste des Curriculum Vitae</div>
           

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
                                        <th>Formation</th>
                                        <th>Connaissances informatiques</th>
                                        <th>Compétences</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cvemp as $cvemp)
                                    <tr>
                                        <td>{{$cvemp->employe_matricule}}</td>
                                        <td>{{$cvemp->formation}}</td>
                                        <td>{{$cvemp->connaissance_info}}</td>
                                        <td>{{$cvemp->competences}}</td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                                
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            @endsection