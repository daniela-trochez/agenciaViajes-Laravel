<h1>Detalles</h1>

<p><strong>id: </strong>{{$viajero->id}}</p>
<p><strong>Nombre: </strong>{{$viajero->name}}</p>
<p><strong>Direccion: </strong>{{$viajero->direccion}}</p>
<p><strong>Telefono: </strong>{{$viajero->telefono}}</p>

<a href="{{route('viajeros.edit', $viajero->id)}}">Editar</a>

<form action="{{route('viajeros.destroy', $viajero)}}" method="POST">
    @csrf
    @method('Delete') <br>
    <button>Eliminar</button>
</form>
