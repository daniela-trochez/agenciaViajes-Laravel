<h1>Crear</h1>
<form action="{{route('viajeros.store')}}" method="POST">

    @csrf


    <div>
        <label >Nombre: </label>
        <input type="text" name="name" >
    </div>
    <div>
        <label >Dirección: </label>
        <input type="text" name="direccion" >
    </div>
    <div>
        <label >Telefono: </label>
        <input type="text" name="telefono" >
    </div>

    <button>Enviar</button>
</form>