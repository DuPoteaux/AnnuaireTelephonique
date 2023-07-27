@extends('layouts.app')

@section('title', 'Ajouter un contact')

@section('main')

<section class="section">
    <div class="section-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3 mx-auto">
          <div class="card">
            <div class="card-header">
              <h4>{{ __('Les informations du contact') }}</h4>
            </div>
            <form action="{{ route('contacts.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                      <label for="nom">{{ __('Nom') }}</label>
                      <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" placeholder="Nom" required value="{{ old('nom') }}">
                    @error('nom')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label for="prenom">{{ __('Prenom') }}</label>
                      <input type="text" id="prenom" name="prenom" class="form-control @error('prenom') is-invalid @enderror" required placeholder="Prenom" value="{{ old('prenom') }}" >
                    @error('prenom')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label for="telephone">{{ __('Téléphone') }}</label>
                      <input type="text" id="telephone" name="telephone" class="form-control @error('telephone') is-invalid @enderror" required placeholder="Téléphone" value="{{ old('telephone') }}">
                    @error('adresse')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label for="email">{{ __('E-mail') }}</label>
                      <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" required placeholder="Email" value="{{ old('email') }}">
                    @error('email')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label for="adresse">{{ __('Adresse') }}</label>
                      <input type="text" id="adresse" required name="adresse" class="form-control @error('adresse') is-invalid @enderror" placeholder="Adresse" value="{{ old('adresse') }}">
                    @error('adresse')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">{{ __('Enregistrer') }}</button>
                  </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>

@endsection
