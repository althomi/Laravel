@extends('scripts.layout')

@section ('content')
<body class="landing">
<header id="header" class="alt">
    <h1><strong><a href="index.html">Webapplikation</a></strong> by Alischa Thomas</h1>
    <nav id="nav">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="generic.html">Generic</a></li>
            <li><a href="elements.html">Elements</a></li>
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
    <p>Leg dein Drehbuch an und gib ihm einen Namen.</p>
    <h3>Schritt 3</h3>
    <p>Füge die Standardwerte hinzu, die du schon für die Drehbucheinträge vorliegen hast. Zum Beispiel weißt du, dass du zwei Protagonisten hast. Deren Namen kannst du bereits anlegen.</p>
    <h3>Schritt 4</h3>
    <p>Erstelle Drehbucheinträge indem du dir die eben angelegten Werte zusammenklickst. Deine gemachten Änderungen kannst du live verfolgen.</p>
    <ul class="actions">
        <li><a href="/loginProcess" class="button special big">Login zum Starten</a></li>
    </ul>
</section>
</body>
@endsection
