
//aufgabe3
use App\Http\Controllers\testController;

<html>

<link href="../css/aufgabe6.css" rel="stylesheet">
    <body>


        @foreach ($array as $key => $value)
        @if ($value<=3)
          <p class="red"> {{ $value }}</p>
        @else
        <p class="blue"> {{ $value }}</p>
        @endif
        @endforeach




    </body>
</html>
