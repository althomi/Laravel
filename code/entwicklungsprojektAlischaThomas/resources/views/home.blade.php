@extends('layouts.app')
@extends('auth.layoutAuth')

@section('content')
<nav id="nav">
    <ul>
        <li><a href="/starten">Home</a></li>
    </ul>
</nav>
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
                <a class="nav-link" href="#"</a>

            </div>
        </div>
    </div>
</div>
@endsection
