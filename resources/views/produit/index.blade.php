@extends('boutiquier.home')

@section('Papus')
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


<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
    <h2>LISTE DES PRODUITS</h2>
  <div class="d-flex justify-content-end mb-4"><a type="button" class="btn btn-primary" href="{{('/produit/create')}}">AJOUTER UN PRODUIT</a></div>
  <table class="table table-bordered table-hover" style="color:black; font-size: 0.8rem;">

    <thead>
        <tr>
          <td>Id</td>
          <td scope="col">Nom produit</td>
          <td scope="col">Type produit</td>
          <td scope="col">Description</td>
          <td scope="col"> Categorie</td>
          <td colspan="3">Actions</td>
        </tr>
    </thead>

    <tbody>
        @foreach($produit as $produit)
        <tr>
          <td>{{$produit->id}}</td>
          <td>{{$produit->nom_produit}}</td>
          <td>{{$produit->type_produit}}</td>
          <td>{{$produit->description}}</td>
          <td>{{$produit->categorie_produit}}</td>
         
          <td><a href="{{ route('produit/edit', $produit->id)}}" class="btn btn-primary">Modifier</a></td>
          <td><a href="{{ route('Produit.show', $produit->id)}}" class="btn btn-info">Details</a></td>
          <td>
            <form action="{{ route('Produit.destroy', $produit->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
          </td>
        </tr>
        
        @endforeach
    </tbody>
  </table>
  <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <!-- wow animation -->
      <script src="{{asset('js/animate.js')}}"></script>
      <!-- select country -->
      <script src="{{asset('js/bootstrap-select.js')}}"></script>
      <!-- owl carousel -->
      <script src="{{asset('js/owl.carousel.js')}}"></script> 
      <!-- chart js -->
      <script src="{{asset('js/Chart.min.js')}}"></script>
      <script src="{{asset('js/Chart.bundle.min.js')}}"></script>
      <script src="{{asset('js/utils.js')}}"></script>
      <script src="{{asset('js/analyser.js')}}"></script>
      <!-- nice scrollbar -->
      <script src="{{asset('js/perfect-scrollbar.min.js')}}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{asset('js/custom.js')}}"></script>
      <script src="{{asset('js/chart_custom_style1.js')}}"></script>
<div>

@endsection