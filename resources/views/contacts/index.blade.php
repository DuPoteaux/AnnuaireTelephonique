@extends('layouts.app')

@section('title', 'Liste des contacts')

@section('main')

<section class="section">
    <div class="section-header">
        <h1>{{ __('Les informations du contact') }}</h1>
    </div>
    <div class="section-body">
        <h2 class="section-title">{{ __('Liste des contacts') }}</h2>

        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="float-right">
                            <form id="sort_users" action="" method="GET">
                                <div class="input-group">
                                    <input type="text"
                                        class="form-control"
                                        id="search" name="search" @isset($sort_search) value="{{ $sort_search }}" @endisset placeholder="{{ __('Taper & Entrer') }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="clearfix mb-3"></div>

                        <div class="table-responsive">
                            <table class="table-striped table">
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('Nom') }}</th>
                                    <th>{{ __('Prénom') }}</th>
                                    <th width="10%">{{ __('Options') }}</th>
                                </tr>
                                @foreach($contacts as $key => $contact)
                                    <tr>
                                    <td>{{ ($key+1) + ($contacts->currentPage() - 1)*$contacts->perPage() }}</td>
                                    <td>{{  $contact->nom }}</td>
                                    <td>{{ $contact->prenom }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                            {{ __(' Options') }}
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{route('contacts.show', encrypt($contact->id))}}">{{ __('Afficher') }}</a>
                                                <a class="dropdown-item" href="{{route('contacts.edit', encrypt( $contact->id))}}">{{ __('Editer') }}</a>
                                                <a class="dropdown-item" onclick="confirm_modal('{{route('contacts.destroy',  $contact->id)}}');">{{ __('Suprimer') }}</a>
                                            </div>

                                        </div>

                                    </td>
                                    </td>
                                </tr>
                                @endforeach


                            </table>
                        </div>
                        <div class="float-right">
                            <nav>
                                <ul class="pagination">
                                    {{ $contacts->appends(request()->input())->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
