<h1>Editar</h1>
<form action="{{route('viajeros.update', $viajero->id)}}" method="POST">

    @csrf
    @method('put')

    <div>
        <label >Nombre: </label>
        <input type="text" name="name" value="{{$viajero->name}}">
    </div>
    <div>
        <label >Dirección: </label>
        <input type="text" name="direccion" value="{{$viajero->direccion}}">
    </div>
    <div>
        <label >Telefono: </label>
        <input type="text" name="telefono" value="{{$viajero->telefono}}">
    </div>

    <button>Actualizar</button>
</form>