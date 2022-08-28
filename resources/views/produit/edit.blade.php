 @extends('boutiquier.home')

@section('Papus')
<style>
  .uper {
    margin-top: 40px;
    width: 45%;
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
    width: 100%;
    justify-content: center;
  }

  .btn{
    margin-left: 40%;
    color: white;
    font-weight: bold;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Modifier une Categorie
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

      <form method="post" action="{{ route('produit.edit') }}">
         @csrf
          <div class="form-group">
              <label for="nom_produit">Nom categorie</label>
              <input type="text" class="form-control" name="nom_produit" >
          </div>
          <div class="form-group">
              <label for="type_produit">Abreviation</label>
              <input type="text" class="form-control" name="type_produit" />
          </div>

          <div class="form-group">
              <label for="description">stock</label>
              <input type="text" class="form-control" name="description"/>

          </div>
          
          <div class="form-group">
              <label for="prix">stock</label>
              <input type="text" class="form-control" name="prix" />

          </div>
          
          <button type="submit" class="btn btn-primary">Enregistrer</button>
      </form>
  </div>
</div>
@endsection 
