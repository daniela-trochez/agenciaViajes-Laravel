<h1>Editar Viaje</h1>

<form action="{{ route('viajes.update', $viaje) }}" method="POST">
    @csrf
    @method('put')

    <div>
        <label>Numero de Plazas:
            <input type="text" name="numeroPlazas" value="{{viaje->numeroPlazas}}">
        </label>
    </div>

    <div>
        <label>Fecha:
            <input type="date" name="fecha" value="{{viaje->fecha}}">
        </label>
    </div>
    <div>
        <label>Otros Datos:
            <input type="text" name="otrosDatos" value="{{viaje->otrosDatos}}">
        </label>
    </div>
    <div>
        <label>Viajero</label>
        <select name="viajero_id" id="">
            <option value="">Elige una opción</option>
            @foreach ($viajeros as $viajero)
                <option value="{{ $viajero->id }}">{{ $viajero->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label>Destino</label>
        <select name="destino_id" id="">
            <option value="">Elige una opción</option>
            @foreach ($destinos as $destino)
                <option value="{{ $destino->id }}">{{ $destino->name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label>Origen</label>
        <select name="origen_id" id="">
            <option value="">Elige una opción</option>
            @foreach ($origens as $origen)
                <option value="{{ $origen->id }}">{{ $origen->name }}</option>
            @endforeach
        </select>
    </div>
    <br><br>
    <button>Actualizar</button>

</form>
