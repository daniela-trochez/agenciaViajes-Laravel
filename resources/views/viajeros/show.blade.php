<h1>Detalles</h1>

<p><strong>id: </strong>{{$viajero->id}}</p>
<p><strong>Nombre: </strong>{{$viajero->name}}</p>
<p><strong>Direccion: </strong>{{$viajero->direccion}}</p>
<p><strong>Telefono: </strong>{{$viajero->telefono}}</p>

<a href="{{route('viajeros.edit', $viajero->id)}}">Editar</a>
<br><br>
<form action="{{route('viajeros.destroy', $viajero)}}" method="POST">
    @csrf
    @method('Delete') 
    <button>Eliminar</button>
</form>

<br><br>
<a href="{{route('viajes.index')}}">Volver a index</a>
