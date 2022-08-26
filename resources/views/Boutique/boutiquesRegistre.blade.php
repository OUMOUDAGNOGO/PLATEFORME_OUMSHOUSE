@extends('layouts.dashbord')

@section('Dilly')
<link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="css/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
<style>
  .uper {
    margin-top: 60px;
    width: 48%;
    margin-left: 25%;
    margin-bottom: 5%;
    color: black;
  }

  .card-header{
    text-align: center;
    text-transform: uppercase;
    font-weight: bold;
    color: white;
    background-color: #4e73df;
  }

  form{
    width: 200%;
    justify-content: center;
  }

  .btn{
    margin-left: 30%;
    color: white;
    font-weight: bold;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Ajouter une boutique
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('boutique.store') }}">
         @csrf
          <div class="form-group">
              <label for="nom_complet">Nom complet</label>
              <input type="text" class="form-control" name="nom_complet" placeholder="Veuillez entrer le nom complet"/>
          </div>
          <div class="form-group">
              <label for="nom_boutique">Nom boutique</label>
              <input type="text" class="form-control" name="nom_boutique" placeholder="Veuillez entrer le nom boutique"/>
          </div>

          <div class="form-group">
              <label for="adresse_boutique">Adresse boutique</label>
              <input type="text" class="form-control" name="adresse_boutique" placeholder="Veuillez entrer l'adresse boutique"/>
          </div>
          <div class="form-group">
              <label for="telephone_boutique">Telephone boutique</label>
              <input type="text" class="form-control" name="telephone_boutique" placeholder="Veuillez entrer le telephone"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" placeholder="Veuillez entrer email"/>
          </div>
          <div class="form-group">
              <label for="password">Mot de passe</label>
              <input type="text" class="form-control" name="password" placeholder="Veuillez entrer le mot de passe"/>
          </div>
          <div class="container">
              <label class="form-label text-white" style="font-weight: bold;" for="doa">users</label>
              <select class="form-select" style="color: #41A7A5" aria-label="Default select example" name="userId">
                 @foreach ($user as $User)
                    <option value="{{$User->id}}">{{$User->id}}</option>
                 @endforeach
                </select>
          </div>
          <div class="container">
              <label class="form-label text-white" style="font-weight: bold;" for="doa">Id type_boutique</label>
              <select class="form-select" style="color: #41A7A5" aria-label="Default select example" name="type_boutiqueId">
                 @foreach ($typeb as $type_boutique )
                    <option value="{{$type_boutique->id}}">{{$type_boutique->id}}</option>
                 @endforeach
                </select>
           </div>
          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
      
  </div>
</div>
 
@endsection
