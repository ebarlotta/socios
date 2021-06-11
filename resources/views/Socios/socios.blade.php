<div style="display: grid; width:50%">

    <label for="nombre">Nombre</label>
    <input type="text" namDNIre>

    <label for="dni">DNI</label>
    <input type="text" name=dni>

    <label for="direccion">Direccion</label>
    <input type="text" name=direccion>

    <label for="nacimiento">Nacimiento</label>
    <input type="date" name=nacimiento>

    <label for="email">E-Mail</label>
    <input type="text" name=email>

    <label for="telefono">Teléfono</label>
    <input type="text" name=telefono>

    <label for="url">Foto</label>
    <input type="file" name=url>

    <button onclick="{{ route('socios.create') }}">Guardar</button>
</div>