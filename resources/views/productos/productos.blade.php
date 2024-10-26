<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestión de Inventario - E-Commerce</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Gestión de Inventario</h1>
            <nav>
                <ul>
                    <li><a href="{{ route('productos.index') }}">Productos</a></li>
              
                </ul>
            </nav>
        </header>

        <main>
            <section id="productos">
                <h2>Catálogo de Productos</h2>
                <a href="{{ route('productos.create') }}" class="btn btn-primary">Añadir Producto</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Categoría</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <td>{{ $producto->nombre }}</td>
                                <td>{{ $producto->categoria }}</td>
                                <td>{{ number_format($producto->precio, 2, ',', '.') }} €</td> <!-- Formato de precio -->
                                <td>{{ $producto->cantidad_stock }}</td>
                                <td>
                                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-secondary">Editar</a>
                                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este producto?');">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </main>

        <footer>
            <p>&copy; 2024 Tu Tienda - Sistema de Gestión de Inventario</p>
        </footer>
    </div>
</body>
</html>
