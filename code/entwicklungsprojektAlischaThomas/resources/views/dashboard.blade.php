@extends('layouts.app')
@section('content')
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
                    {{ __('You are logged in')}} {{ Auth::user()->name }} {{ __('!')}}
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <a href="/scripts" class="button special big dashboardBtn">Drehbuch erstellen</a>
</div>
@endsection
