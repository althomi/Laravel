@extends('scripts.layout')

@section ('content')
<body class="landing">
<header id="header" class="alt">
    <nav id="nav" class="navLeft">
        <ul>
            <li><a href="/starten">Home</a></li>
        </ul>
    </nav>
</header>
<section id="banner">
    <h2>Drehbuch Ersteller</h2>
    <h3>Herzlich Willkommen beim Drehbuch Ersteller.</h3>
        <section>
            <ul class="actions">
                <li><a href="/home" class="button special big">Login zum Starten</a></li>
            </ul>
        </section>
    <h2>So funktionerts:</h2>
    <h3>Schritt 1</h3>
    <p>Logge dich in dein Nutzerkonto ein.</p>
    <h3>Schritt 2</h3>
    <p>Lege Einträge für dein Drehbuch an.</p>
    <h3>Schritt 3</h3>
    <p>Exportiere den Drehbuch als Excel Datei.</p>
    <ul class="actions">
        <li><a href="/loginProcess" class="button special big">Login zum Starten</a></li>
    </ul>
</section>



</body>
@endsection
