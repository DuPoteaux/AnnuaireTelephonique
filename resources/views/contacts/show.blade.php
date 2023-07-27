@extends('layouts.app')

@section('title', 'Affichage Contact')

@push('style')
    <!-- CSS Libraries -->

@endpush

@section('main')
<section class="section">
    <div class="section-header">
        <h1>{{ __('Détail du Contact') }}</h1>
    </div>
    <div class="section-body">
        <h2 class="section-title">{{__('Le contact de')}} {{ $contact->prenom }} {{ $contact->nom }}</h2>
        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card profile-widget">
                    <div class="profile-widget-header">
                        <img alt="image"
                            src="{{ asset('assets/img/avatar/avatar-1.png') }}"
                            class="rounded-circle profile-widget-picture">
                        <div class="profile-widget-items">
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">{{__('Téléphone')}}</div>
                                <div class="profile-widget-item-value">{{ $contact->telephone }}</div>
                            </div>
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">{{__('E-mail')}}</div>
                                <div class="profile-widget-item-value">{{ $contact->email }}</div>
                            </div>
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">{{__('Adresse')}}</div>
                                <div class="profile-widget-item-value">{{ $contact->adresse }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-widget-description">
                        <div class="profile-widget-name">{{ $contact->prenom }} {{ $contact->nom }}<div
                                class="text-muted d-inline font-weight-normal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('owl.carousel/dist/owl.carousel.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/components-user.js') }}"></script>
@endpush
