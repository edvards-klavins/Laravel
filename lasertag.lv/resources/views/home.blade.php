@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <a>
                        <h3 class=".text-dark">Niks: {{ Auth::user()->name }}</h3> 
                    </a>

                    <h3 class=".text-dark">Bilance: {{ Auth::user()->balance }}</h3>

                    


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
