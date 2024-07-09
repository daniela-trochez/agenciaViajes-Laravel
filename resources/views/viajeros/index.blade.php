<h1>Registro de los viajeros</h1>
<a href="{{route('viajeros.create')}}">crear viajero</a>
<br>
<ul>
    @foreach ($viajeros as $viajero)

    <li>
        <a href="{{ route('viajeros.show', $viajero->id) }}">{{ $viajero->name }}</a>
    </li>

    @endforeach
</ul>


