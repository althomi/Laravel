@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @include('includes.backButton')
        <div class="eintragZeigen">
            <h2> Dein Eintrag</h2>
        </div>
    </div>
</div>
<div class="row eintragZeigen">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Szenennummer</strong>
            {{ $script->Szenennr }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Einstellungsnummer</strong>
            {{ $script->Einstellungsnr }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Bildbeschreibung</strong>
            {{ $script->Bildbeschreibung }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kamerasetting</strong>
            {{ $script->Kamera }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ort</strong>
            {{ $script->Ort }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ton</strong>
            {{ $script->Ton }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Effekt</strong>
            {{ $script->Effekt }}
        </div>
    </div>
    <a class="btn btn-primary btnDeinEintrag"  href="{{ route('scripts.edit',$script->id) }}">Bearbeiten</a>
</div>
@endsection
