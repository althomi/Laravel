@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @include('includes.BackButton')
        <div class="eintragBearbeiten">
            <h2>Eintrag bearbeiten</h2>
        </div>
    </div>
</div>

<form action="{{ route('scripts.update',$script->id) }}" method="POST" class="eintragBearbeiten" >
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Szenensnummer</strong>
                <input type="text" style="width: 50px" name="szenennr" value="{{ $script->Szenennr }}" class="form-control" placeholder="Szenensnummer">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Einstellungsnummer</strong>
                <input type="text" style="width: 50px" name="einstellungsnr" value="{{ $script->Einstellungsnr }}" class="form-control" placeholder="Einstellungsnr">
            </div>
        </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Bildbeschreibung</strong>
            <textarea type="text" style="width: 400px; height:150px" name="bildbeschreibung" value="{{ $script->Bildbeschreibung }}" class="form-control" placeholder="Bildbeschreibung"></textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kamerasetting</strong>
            <textarea type="text" style="width: 400px; height:150px" name="kamera" value="{{ $script->Kamera }}" class="form-control" placeholder="Kamerasetting"></textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ort</strong>
            <textarea type="text" style="width: 400px; height:150px" name="ort" value="{{ $script->Ort }}" class="form-control" placeholder="Ort"></textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ton</strong>
            <textarea type="text" style="width: 400px; height:150px" name="ton" value="{{ $script->Ton }}" class="form-control" placeholder="Ton"></textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Effekt</strong>
            <textarea type="text" style="width: 400px; height:150px" name="effekt" value="{{ $script->Effekt }}" class="form-control" placeholder="Effekt"></textarea>
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary btnBearbeiten">Eintrag ändern</button>
        </div>
    </div>
</form>
</div>
@endsection
