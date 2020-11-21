<div class="container">
    <table class="table table-bordered">
        <tr>
            <td>Szenennr</td>
            <td>Einstellungsnr</td>
            <td>Bildbeschreibung</td>
            <td>Kamera</td>
            <td>Ort</td>
            <td>Ton</td>
            <td>Effekt</td>
            <td>Erstellungsdatum</td>
            <th width="350px">Action</th>
        </tr>
        @foreach ($scripts as $script)
        @if (Auth::id() == $script->user_id)
        <tr id="{{$script->id}}">
            <td>{{ $script->Szenennr }}</td>
            <td>{{ $script->Einstellungsnr }}</td>
            <td>{{ $script->Bildbeschreibung }}</td>
            <td>{{ $script->Kamera }}</td>
            <td>{{ $script->Ort }}</td>
            <td>{{ $script->Ton }}</td>
            <td>{{ $script->Effekt }}</td>
            <td>{{ $script->created_at }}</td>
            <td>
                <form action="{{ route('scripts.destroy',$script->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('scripts.show',$script->id) }}">Anzeigen</a>
                    <a class="btn btn-primary"  href="{{ route('scripts.edit',$script->id) }}">Bearbeiten</a>
                    @csrf
                    <a class="btn btn-info" href="javascript:void(0)" onclick="deleteScript({{$script->id}})">Löschen</a>
                </form>
            </td>
        </tr>
        @endif
        @endforeach
    </table>
    {{$scripts->links() }}
    <div>
        <div class="btnExportBottom">
            <a class="btn btn-primary btnExportBottom" href="/export"> Drehbuch Exportieren als Excel</a>
        </div>
    </div>
</div>
</div>
