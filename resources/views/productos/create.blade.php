<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir Producto - Gestión de Inventario</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <header class="mb-4">
            <h1>Añadir Nuevo Producto</h1>
            <nav>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('productos.index') }}">Volver al Catálogo de Productos</a>
                    </li>
                </ul>
            </nav>
        </header>

        <main>
            <section id="añadir-producto">
                <h2>Nuevo Producto</h2>

                <!-- Mostrar mensajes de error de validación -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Formulario para añadir un producto -->
                <form action="{{ route('productos.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre del Producto:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="categoria">Categoría:</label>
                        <input type="text" name="categoria" id="categoria" class="form-control" value="{{ old('categoria') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="precio">Precio:</label>
                        <input type="number" step="0.01" name="precio" id="precio" class="form-control" value="{{ old('precio') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="cantidad_stock">Cantidad en Stock:</label>
                        <input type="number" name="cantidad_stock" id="cantidad_stock" class="form-control" value="{{ old('cantidad_stock') }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Añadir Producto</button>
                </form>
            </section>
        </main>

        <footer class="mt-4">
            <p>&copy; 2024 Tu Tienda - Sistema de Gestión de Inventario</p>
        </footer>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
