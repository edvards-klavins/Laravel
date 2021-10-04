@extends('layouts.app')

@section('content')
<body class="bacck">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reģistrēties') }}</div> <!-- Reģistrēties (mid-Augsa) -->

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row"> <!--  (vards vidus) -->
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Vārds') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row"> <!--  (epasts vidus) -->
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Pasts') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row"> <!--  (vards sifreta vidus) -->
                            <label for="vards" class="col-md-4 col-form-label text-md-right">{{ __('Vārdsv2') }}</label>

                            <div class="col-md-6">
                                <input id="vards" type="text" class="form-control @error('vards') is-invalid @enderror" name="vards" value="{{ old('vards') }}" required autocomplete="vards" autofocus>

                                @error('vards')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                   

                        <div class="form-group row"> <!--  (Parole vidus) -->
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Parole') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row"> <!--  (dzimums vidus) -->
                            <label for="dzimums" class="col-md-4 col-form-label text-md-right">{{ __('Dzimums male/female') }}</label>

                            <div class="col-md-6">
                                <input id="dzimums" type="text" class="form-control @error('dzimums') is-invalid @enderror" name="dzimums" value="{{ old('dzimums') }}" required autocomplete="dzimums" autofocus>

                                @error('dzimums')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row"> <!--  (Parole2 vidus) -->
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Apstiprināt paroli') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reģistrēties') }} <!-- Reģistrēties (apaksa) -->
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
