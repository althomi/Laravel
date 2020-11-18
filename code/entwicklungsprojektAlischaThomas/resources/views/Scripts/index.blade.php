@extends('scripts.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Drehbuch Ersteller</h2>
        </div>
        <nav id="nav">
            <ul>
                <li><a href="/starten">Home</a></li>
            </ul>
        </nav>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('scripts.create') }}"> Create New Product</a>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="/export"> Export</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <td>Szenennr</td>
        <td>Einstellungsnr</td>
        <td>Bildbeschreibung</td>
        <td>Kameraeinstellung</td>
        <td>Ort</td>
        <td>Ton</td>
        <td>Effekt</td>
        <th width="280px">Action</th>
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

                <a class="btn btn-info" class="floatRight" href="{{ route('scripts.show',$script->id) }}">Show</a>

                <a class="btn btn-primary"  href="{{ route('scripts.edit',$script->id) }}">Edit</a>
                @csrf
                @method('DELETE')

                <button type="submit"  class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $scripts ?? ''->links() !!}

@endsection
