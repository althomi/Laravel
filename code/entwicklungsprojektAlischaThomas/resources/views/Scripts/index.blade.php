@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="drehbuchErstellen" >
            <h2>Drehbuch erstellen</h2>
        </div>
    </div>
        <div class="pull-right eintragErstellen">
            <button type="button" class="button special big" data-toggle="modal" data-target="#scriptmodal">
                Script Eintrag erstellen
            </button>
            <div class="btnExportTop">
                <a class="btn btn-primary btnExport" href="/export">Drehbuch Exportieren als Excel</a>
            </div>
        </div>
    </div>
</div>

@include('includes.modal')
@include('includes.table')

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

<script>
    function deleteScript(id){
        if(confirm("Willst du diesen Eintrag wirklich aus dem Drehbuch löschen?"))
        {
            $.ajax({
                url:/scripts/ + id,
                type:'DELETE',
                data:{
                    _token: $("input[name=_token]").val()
                },
                success:function(response){
                    $(id).remove();
                }
                }
            );
        }
    }
</script>
@endsection

