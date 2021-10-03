@extends('layouts.app')

@section('content')
<body class="bacck">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ielogoties') }}</div> <!-- Ielogities (vidus) -->

                <div class="card-body ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row"> <!-- Epasts (vidus) -->
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Ēpasts') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row"> <!-- Parole (vidus) -->
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Parole') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row"> <!-- Atcereties (apaksa) -->
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Atcerēties mani') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0"> <!-- Ienakt (apaksa) -->
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ienākt') }}
                                </button>

                                @if (Route::has('password.request')) <!-- Aizmirsi paroli (apaksa) -->
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Aizmirsi paroli?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</div>
@endsection
