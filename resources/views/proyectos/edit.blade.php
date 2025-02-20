<h2>Editar Proyecto</h2>
<form action="{{ route('proyectos.update', $proyecto->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="NombreProyecto">Nombre del Proyecto:</label>
    <input type="text" name="NombreProyecto" value="{{ $proyecto->NombreProyecto }}" required>

    <label for="fuenteFondos">Fuente de Fondos:</label>
    <input type="text" name="fuenteFondos" value="{{ $proyecto->fuenteFondos }}" required>

    <label for="MontoPlanificado">Monto Planificado:</label>
    <input type="number" name="MontoPlanificado" value="{{ $proyecto->MontoPlanificado }}" step="0.01" required>

    <label for="MontoPatrocinado">Monto Patrocinado:</label>
    <input type="number" name="MontoPatrocinado" value="{{ $proyecto->MontoPatrocinado }}" step="0.01" required>

    <label for="MontoFondosPropios">Monto Fondos Propios:</label>
    <input type="number" name="MontoFondosPropios" value="{{ $proyecto->MontoFondosPropios }}" step="0.01" required>

    <button type="submit">Actualizar Proyecto</button>
</form>
