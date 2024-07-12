Detalles
<p><strong>id: </strong>{{$viaje->id}}</p>
<p><strong>Numero de Plazas: </strong>{{$viaje->numeroPlazas}}</p>
<p><strong>Fecha: </strong>{{$viaje->fecha}}</p>
<p><strong>Otros Datos: </strong>{{$viaje->otroDatos}}</p>
<p><strong>Viajero: </strong>{{$viaje->viajero->name}}</p>
<p><strong>Destino: </strong>{{$viaje->destino->name}}</p>
<p><strong>Origen: </strong>{{$viaje->origen->name}}</p>
<br>
<a href="{{route('viajes.edit', $viaje)}}">Editar</a>
<br><br>
<form action="{{route('viajes.destroy',$viaje)}}" method="POST">
    @csrf
    @method('Delete')
    <button>Eliminar</button>
</form>
 <br><br>
<a href="{{route('viajes.index')}}">volver</a>