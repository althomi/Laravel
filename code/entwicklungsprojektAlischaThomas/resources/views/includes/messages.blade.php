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

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
