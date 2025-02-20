<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Proyectos</title>
</head>
<body>

    <h2>Lista de Proyectos</h2>

    @if ($proyectos->isEmpty())
        <p>No hay proyectos registrados.</p>
    @else

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    </a>

        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
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
                        <td>{{ $proyecto->NombreProyecto }}</td>
                        <td>{{ $proyecto->fuenteFondos }}</td>
                        <td>${{ number_format($proyecto->MontoPlanificado, 2) }}</td>
                        <td>${{ number_format($proyecto->MontoPatrocinado, 2) }}</td>
                        <td>${{ number_format($proyecto->MontoFondosPropios, 2) }}</td>
                        <td>
                            <button>
                                <a href="{{ route('proyectos.edit', $proyecto->id) }}">Editar</a>
                            </button>
                        </td> 
                        <td>
                            <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('¿Estás seguro de eliminar este proyecto?')">
                                    Eliminar
                                </button>
                            </form>
                        </td>
  
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <a href="{{ route('proyectos.pdf') }}" target="_blank">
            <button>Descargar Informe PDF</button>
        </a>

    @endif
    
    <hr><br>
    
    <a href="{{ route('proyectos.create') }}">
         <button>Agregar Nuevo Proyecto</button>
    </a>    

</body>
</html>
