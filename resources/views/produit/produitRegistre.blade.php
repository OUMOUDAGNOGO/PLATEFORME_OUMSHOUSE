@extends('boutiquier.home')

@section('Papus')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('produit.store') }}">
                        @csrf

                        <!-- nom_produit -->
                        <div class="row mb-3">
                            <label for="nom_produit" class="col-md-4 col-form-label text-md-end">{{ __('nom_produit') }}</label>

                            <div class="col-md-6">
                                <input id="nom_produit" type="text" class="form-control @error('nom_produit') is-invalid @enderror" name="nom_produit" value="{{ old('nom_produit') }}" required autocomplete="nom_produit" autofocus>

                                @error('nom_produit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>
                        <!-- fin nom_produit -->

                        <!-- type_produit -->
                        <div class="row mb-3">
                            <label for="type_produit" class="col-md-4 col-form-label text-md-end">{{ __('type_produit') }}</label>

                            <div class="col-md-6">
                                <input id="type_produit" type="text" class="form-control @error('type_produit') is-invalid @enderror" name="type_produit" value="{{ old('type_produit') }}" required autocomplete="type_produit" autofocus>

                                @error('type_produit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>
                        <!-- fin type_produit -->

                        <!-- description -->
                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('type_produit') }}" required autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>
                         <!-- fin description -->

                         <!-- categorie_produit -->
                         <div class="row mb-3">
                            <label for="categorie_produit" class="col-md-4 col-form-label text-md-end">{{ __('categorie_produit') }}</label>

                            <div class="col-md-6">
                                <input id="categorie_produit" type="text" class="form-control @error('categorie_produit') is-invalid @enderror" name="categorie_produit" value="{{ old('categorie_produit') }}" required autocomplete="categorie_produit" autofocus>

                                @error('categorie_produit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>
                         <!-- fin categorie_produit -->

                         <!-- prix -->
                         <div class="row mb-3">
                            <label for="prix" class="col-md-4 col-form-label text-md-end">{{ __('prix') }}</label>

                            <div class="col-md-6">
                                <input id="prix" type="text" class="form-control @error('prix') is-invalid @enderror" name="prix" value="{{ old('prix') }}" required autocomplete="prix" autofocus>

                                @error('prix')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>
                         <!-- fin prix -->

                        <!-- userid -->
                        <div class="row mb-3">
                            <label for="userId" class="col-md-4 col-form-label text-md-end">{{ __('user id') }}</label>

                            <div class="col-md-6">
                              
                                <select name="userId" id="">
                                    @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->nom}}</option>
                                    @endforeach
                                </select>
                                @error('userId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>
                        <!-- fin userid -->

                        

                       

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
