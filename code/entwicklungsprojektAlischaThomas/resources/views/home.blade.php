@extends('layouts.app')
@extends('auth.layoutAuth')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}">

<div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <nav>
                    <ul>
                        <li class="button special big"  ><a style="color: white"  href="/scripts">Drehbuch erstellen</a></li>
                    </ul>
                        <ul>
                            <li><a href="/starten">Home</a></li>
                        </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
