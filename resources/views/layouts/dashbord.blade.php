@extends('home')
@section('contenus')
<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title center">
                              <h2>Tableau de bord</h2>
                           </div>
                        </div>
                    </div>
                     <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Boutique</div>
                                           
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">
                            <div class="table table-bordered">
                                <!-- Card Header - Dropdown -->
                                
                                <!-- Card Body -->
                                <h1  style="text-align:center;">Liste des Boutiques</h1>

                                <div class="d-flex justify-content-end mb-2"><a type="button" class="btn btn-secondary" href="{{('/Boutique/create')}}">Ajouter une boutique</a></div>
        
                                        <table class="table table-bordered table-hover" style="color:black; font-size: 0.8rem; margin-left:3%;">

                                            <thead  class="table table-success">
                                                <tr>
                                                <td>ID</td>
                                                <td scope="col">Nom Complet</td>
                                                <td scope="col">Nom Boutique</td>
                                                <td scope="col">Adresse boutique</td>
                                                <td scope="col">telephone boutique</td>
                                                <td scope="col">email</td>
                                                <td colspan="3">Actions</td>
                                                
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($boutique as $boutique)
                                                <tr>
                                                <td>{{$boutique->id}}</td>
                                                    <td>{{$boutique->nom_complet}}</td>
                                                    <td>{{$boutique->nom_boutique}}</td>
                                                    <td>{{$boutique->adresse_boutique}}</td>
                                                    <td>{{$boutique->telephone_boutique}}</td>
                                                    <td>{{$boutique->email}}</td>
                                                    <td><a href="{{ route('Boutique.edit', $boutique->id)}}" class="btn btn-primary">Modifier</a></td>
                                                    <td><a href="{{ route('Boutique.show', $boutique->id)}}" class="btn btn-info">Details</a></td>
                                                    <td>
                                                       <form action="{{ route('Boutique.destroy', $boutique->id)}}" method="post">
                                                             @csrf
                                                             @method('DELETE')
                                                             <button class="btn btn-danger" type="submit">Supprimer</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                     <!-- graph -->
                     <div class="row column2 graph margin_bottom_30">
                        <div class="col-md-l2 col-lg-12">
                           <div class="white_shd full">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Statistique</h2>
                                 </div>
                              </div>
                              <div class="full graph_revenue">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="content">
                                          <div class="area_chart">
                                             <canvas height="120" id="canvas"></canvas>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end graph -->
                     <div class="row column3">
                       
                        <!-- progress bar -->
                        <div class="col-md-6">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Progress Barre</h2>
                                 </div>
                              </div>
                              <div class="full progress_bar_inner">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="progress_bar">
                                          <!-- Skill Bars -->
                                          <span class="skill" style="width:73%;">Boutique <span class="info_valume">73%</span></span>                  
                                          <div class="progress skill-bar ">
                                             <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%;">
                                             </div>
                                          </div>
                                          <span class="skill" style="width:62%;">Client<span class="info_valume">62%</span></span>   
                                          <div class="progress skill-bar">
                                             <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;">
                                             </div>
                                          </div>
                                          
                                         
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end progress bar -->
                     </div>
                    <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2022 Designed par Oumshouse.<br><br>
                           <a href="oumshouse.ml">Oumshouse</a>
                        </p>
                     </div>
                  </div>
@endsection