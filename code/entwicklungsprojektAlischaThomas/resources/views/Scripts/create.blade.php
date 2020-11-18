@extends('scripts.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Neuen Eintrag hinzufügen</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('scripts.index') }}"> Zurück zum Drehbuch</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('scripts.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Szenennr</strong>
                    <input type="text" name="szenennr" class="form-control" placeholder="Szenennr:z.B. 1">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Einstellungsnr</strong>
                    <input type="text" name="einstellungsnr" class="form-control" placeholder="Einstellungsnr z.B. 1">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bildbeschreibung</strong>
                    <textarea name="bildbeschreibung" class="form-control" style="height:150px" placeholder="Einstellungsnr"></textarea>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kameraeinstellung</strong>
                    <textarea name="kameraeinstellung" class="form-control" style="height:150px" placeholder="Kameraeinstellung"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ort</strong>
                    <textarea name="ort" class="form-control" style="height:150px" placeholder="Ort"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ton</strong>
                    <textarea name="ton" class="form-control" style="height:150px" placeholder="Ton"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Effekt</strong>
                    <textarea name="effekt" class="form-control" style="height:150px" placeholder="Effekt"></textarea>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
