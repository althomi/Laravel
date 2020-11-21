@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @include('includes.BackButton')
        <div class="eintragBearbeiten">
            <h2>Neuen Eintrag hinzufügen</h2>
        </div>
    </div>
</div>

<form action="{{ route('scripts.store') }}" method="POST">
    @csrf
    <div class="row eintragBearbeiten">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Szenennr</strong>
                    <input type="text" style="width: 200px" name="Szenennr" class="form-control" placeholder="Szenennr:z.B. 1">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Einstellungsnr</strong>
                    <input type="text" style="width: 200px" name="Einstellungsnr" class="form-control" placeholder="Einstellungsnr z.B. 1">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bildbeschreibung</strong>
                    <textarea name="Bildbeschreibung" style="width: 400px; height:150px" class="form-control" style="height:150px" placeholder="Bildbeschreibung"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kamerasetting</strong>
                    <textarea name="Kamera" style="width: 400px; height:150px" class="form-control" style="height:150px" placeholder="Kamerasetting"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ort</strong>
                    <textarea name="Ort"style="width: 400px; height:150px"  class="form-control" style="height:150px" placeholder="Ort"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ton</strong>
                    <textarea name="Ton"style="width: 400px; height:150px"  class="form-control" style="height:150px" placeholder="Ton"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Effekt</strong>
                    <textarea name="Effekt" style="width: 400px; height:150px" class="form-control" style="height:150px" placeholder="Effekt"></textarea>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary btnBearbeiten">Eintrag hinzufügen</button>
        </div>
    </div>
</form>
@endsection
