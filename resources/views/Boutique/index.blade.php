@extends('home')
@section('contenus')
<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

<!-- debut  -->

                  <div class="container">
                    <div class="row ">
                        <div class="col-md-9">
                           <div class="white_shd full">
                              <div class="full graph_head">
                                 <div class="margin-top:20%">
                                    <h2>Liste des boutiques</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info ">
                                 <div class="table-responsive-sm  ">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                               <th>Id</th>
                                              <th >Nom complet</th>
                                              <th >Nom boutique</th>
                                              <th >Adresse boutique</th>
                                              <th >Telephone boutique</th>
                                              <th >Actions</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                       @foreach($boutique as $Boutique)
                                          <tr>
                                          
                                             <td>{{$Boutique->id}}</td> 
                                              <td>{{$Boutique->nom_complet}}</td>
                                              <td>{{$Boutique->nom_boutique}}</td>
                                              <td>{{$Boutique->adresse_boutique}}</td>
                                              <td>{{$Boutique->telephone_boutique}}</td>
                                            
                                              <td><a href="{{ route('Boutique.edit', $Boutique->id)}}" class="btn btn-primary">Modifier</a></td>
                                              <td><a href="{{ route('Boutique.show', $Boutique->id)}}" class="btn btn-info">Details</a></td>
                                              <td>
                                                <form action="{{ route('Boutique.destroy', $Boutique->id)}}" method="post">
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
                        </div>
                    </div>
                  </div>
                  </div>
<!-- fin  -->

@endsection