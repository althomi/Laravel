@extends('scripts.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Drehbuch Ersteller</h2>
        </div>
    </div>
    <div>
        <nav id="nav">
            <ul>
                <li><a href="/starten">Home</a></li>
            </ul>
        </nav>
    </div>
        <div class="pull-right positioncenter">
            <button type="button" class="button special big" data-toggle="modal" data-target="#scriptmodal">
                Script Eintrag erstellen
            </button>
            <a class="btn btn-primary" href="/export"> Exportieren als Excel</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
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


<!-- Modal -->
<div class="modal fade" id="scriptmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Skript Eintrag erstellen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="addform" action="{{ route('scripts.store') }}" method="POST">
            <div class="modal-body">
                <div class="container">
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
                                <button type="submit" class="btn btn-primary" id="addform">Eintrag speichern</button>
                            </div>
                        </div>
                </div>
            </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Schließen</button>
            </div>
        </div>
    </div>
</div>

<!--form data-->
<div class="container">
<table class="table table-bordered">
    <tr>
        <td>Szenennr</td>
        <td>Einstellungsnr</td>
        <td>Bildbeschreibung</td>
        <td>Kameraeinstellung</td>
        <td>Ort</td>
        <td>Ton</td>
        <td>Effekt</td>
        <th width="350px">Action</th>
    </tr>
    @foreach ($scripts as $script)
    <tr>
        <td>{{ $script->Szenennr }}</td>
        <td>{{ $script->Einstellungsnr }}</td>
        <td>{{ $script->Bildbeschreibung }}</td>
        <td>{{ $script->Kameraeinstellung }}</td>
        <td>{{ $script->Ort }}</td>
        <td>{{ $script->Ton }}</td>
        <td>{{ $script->Effekt }}</td>
        <td>
            <form action="{{ route('scripts.destroy',$script->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('scripts.show',$script->id) }}">Anzeigen</a>
                <a class="btn btn-primary"  href="{{ route('scripts.edit',$script->id) }}">Bearbeiten</a>

                @csrf
                @method('DELETE')

                <button type="submit"  class="btn btn-danger delete-link">Löschen</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
</div>
{!! $scripts ?? ''->links() !!}

<script type="text/javascript">
    $(document).ready(function (){
        $('#addform').on('submit', function (e){
            e.preventDefault();
            $.ajax({
                type:"POST",
                url: "/ajaxadd",
                data: $('#addform').serialize(),
                success: function (response){
                    console.log(response)
                    $('#scriptmodal').modal.('hide')
                    alert("Data saved");
                },
                error:function (error){
                    console.log(error)
                    alert("Data not saved");
                }
            });
        });
        }
    )
</script>
@endsection
