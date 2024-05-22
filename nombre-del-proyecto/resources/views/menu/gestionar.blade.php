<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Tablas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Gestionar Tablas</h3>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Cerrar sesión</button>
        </form>
    </div>
    <div class="card">
        <div class="card-header">
            <h3>Lista de Tablas</h3>
        </div>
        <div class="card-body">
            <!-- Aquí puedes agregar el contenido para gestionar las tablas -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre de la Tabla</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tables as $table)
                        <tr>
                            <td>{{ $table }}</td>
                            <td>
                                <a href="{{ route('table.edit', ['table' => $table]) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('table.delete', ['table' => $table]) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('menu.index') }}" class="btn btn-secondary">Volver al Menú</a>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>