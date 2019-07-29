@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('E-Mail Adresse verifizieren') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Ein Verifizierungslink wurde an Ihre E-Mail Adresse versendet.') }}
                        </div>
                    @endif

                    {{ __('Bevor Sie fortfahren überprüfen Sie Ihren Posteingang auf die Verifikations-E-Mail.') }}
                    {{ __('Wenn sie die Verifikations-E-Mail nicht bekommen haben') }}, <a href="{{ route('verification.resend') }}">{{ __('Klicken Sie bitte hier um eine neue Verifikations-E-Mail zu bekommen.') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
