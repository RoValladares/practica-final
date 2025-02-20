<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Proyecto</title>
</head>
<body>
    <h2>Crear Nuevo Proyecto</h2>

    <form action="{{ route('proyectos.store') }}" method="POST">
        @csrf
        <label for="NombreInstitucion">Nombre de la Institución:</label>
        <input type="text" name="NombreInstitucion"><br>

        <label for="NombreProyecto">Nombre del Proyecto:</label>
        <input type="text" name="NombreProyecto" required><br>

        <label for="fuenteFondos">Fuente de Fondos:</label>
        <input type="text" name="fuenteFondos" required><br>

        <label for="MontoPlanificado">Monto Planificado:</label>
        <input type="number" name="MontoPlanificado" step="0.01" required><br>

        <label for="MontoPatrocinado">Monto Patrocinado:</label>
        <input type="number" name="MontoPatrocinado" step="0.01" required><br>

        <label for="MontoFondossPropios">Monto Fondos Propios:</label>
        <input type="number" name="MontoFondosPropios" step="0.01" required><br>

        <button type="submit">Guardar Proyecto</button>
    </form>

    <br>
    <a href="{{ route('proyectos.index') }}">Regresar a la Lista de Proyectos</a>
</body>
</html>
