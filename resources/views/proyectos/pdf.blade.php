<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Proyectos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 16px;
            text-align: left;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Gobierno de El Salvador</h1>
    <p>Fecha: {{ date('d-m-Y') }}</p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre de la Institución</th>  <!-- Nuevo campo agregado aquí -->
                <th>Nombre del Proyecto</th>
                <th>Fuente de Fondos</th>
                <th>Monto Planificado</th>
                <th>Monto Patrocinado</th>
                <th>Monto Fondos Propios</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyectos as $proyecto)
                <tr>
                    <td>{{ $proyecto->id }}</td>
                    <td>{{ $proyecto->NombreInstitucion }}</td>  <!-- Mostrar solo en el PDF -->
                    <td>{{ $proyecto->NombreProyecto }}</td>
                    <td>{{ $proyecto->fuenteFondos }}</td>
                    <td>${{ number_format($proyecto->MontoPlanificado, 2) }}</td>
                    <td>${{ number_format($proyecto->MontoPatrocinado, 2) }}</td>
                    <td>${{ number_format($proyecto->MontoFondosPropios, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
