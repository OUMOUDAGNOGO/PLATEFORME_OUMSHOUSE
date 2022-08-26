@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('categorie.store') }}">
                        @csrf
                       
                        <!-- nom categorie-->
                        
                        <div class="row mb-3">
                            <label for="nom_categorie" class="col-md-4 col-form-label text-md-end">{{ __('nom_categorie') }}</label>

                            <div class="col-md-6">
                                <input id="nom_categorie" type="text" class="form-control @error('nom_categorie') is-invalid @enderror" name="nom_categorie" value="{{ old('nom_categorie') }}" required autocomplete="nom_categorie" autofocus>

                                @error('nom_categorie')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>
                        <!-- fin nom categorie -->

                       <!-- abreviation -->
                       <div class="row mb-3">
                            <label for="abreviation" class="col-md-4 col-form-label text-md-end">{{ __('abreviation') }}</label>

                            <div class="col-md-6">
                                <input id="abreviationi" type="abreviation" class="form-control @error('abreviation') is-invalid @enderror" name="abreviation" value="{{ old('abreviation') }}" required autocomplete="abreviation">

                                @error('abreviation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>
                        <!-- fin abreviation -->

                     <!-- stock -->
                     <div class="row mb-3">
                            <label for="stock" class="col-md-4 col-form-label text-md-end">{{ __('stock') }}</label>

                            <div class="col-md-6">
                                <input id="stock" type="text" class="form-control @error('stock') is-invalid @enderror" name="stock" required autocomplete="stock">

                                @error('stock')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                     <!-- fin stock -->

                       

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
