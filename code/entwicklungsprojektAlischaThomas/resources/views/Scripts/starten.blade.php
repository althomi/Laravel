@extends('layouts.app')
@section ('content')
<body class="landing">
<section id="banner">
    <h2>Drehbuch Ersteller</h2>
    <h3>Herzlich Willkommen beim Drehbuch Ersteller.</h3>
        <section>
            <ul class="actions">
                <li><a href="/home" class="button special big">Registrieren/Login zum Starten</a></li>
            </ul>
        </section>
    <h2>So funktionerts:</h2>
    <h3>Schritt 1</h3>
    <p>Logge dich in dein Nutzerkonto ein.</p>
    <h3>Schritt 2</h3>
    <p>Lege Einträge für dein Drehbuch an.</p>
    <h3>Schritt 3</h3>
    <p>Exportiere dein Drehbuch als Excel Datei.</p>
    <ul class="actions">
        <li><a href="/home" class="button special big">Registrieren/Login</a></li>
    </ul>
</section>
</body>
@endsection
