@extends('scripts.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Eintrag bearbeiten</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('scripts.index') }}"> Zurück zum Drehbuch</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Hupsi :)</strong> Da stimmt etwas nicht mit deiner Eingabe.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('scripts.update',$script->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Szenensnummer</strong>
                <input type="text" name="szenennr" value="{{ $script->Szenennr }}" class="form-control" placeholder="Szenensnummer">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Einstellungsnummer</strong>
                <input type="text" name="einstellungsnr" value="{{ $script->Einstellungsnr }}" class="form-control" placeholder="Einstellungsnr">
            </div>
        </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Bildbeschreibung</strong>
            <input type="text" name="bildbeschreibung" value="{{ $script->Bildbeschreibung }}" class="form-control" placeholder="Bildbeschreibung">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kameraeinstellung</strong>
            <input type="text" name="kameraeinstellung" value="{{ $script->Kameraeinstellung }}" class="form-control" placeholder="Kameraeinstellung">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ort</strong>
            <input type="text" name="ort" value="{{ $script->Ort }}" class="form-control" placeholder="Ort">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ton</strong>
            <input type="text" name="ton" value="{{ $script->Ton }}" class="form-control" placeholder="Ton">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Effekt</strong>
            <input type="text" name="effekt" value="{{ $script->Effekt }}" class="form-control" placeholder="Effekt">
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Eintrag ändern</button>
        </div>
    </div>
</form>
</div>
@endsection
