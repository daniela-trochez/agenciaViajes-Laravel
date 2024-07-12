<h1>Registro de Viajes</h1>
<a href="{{route('viajes.create')}}">Crear Viajes</a>

<a href="crear viaje"></a> <br>
<ul>
    @foreach ($viajes as $viaje )
    <li>
        <a href="{{route('viajes.show' , $viaje)}}">{{$viaje->destino->name}}</a>
    </li>
        
    @endforeach
</ul>
