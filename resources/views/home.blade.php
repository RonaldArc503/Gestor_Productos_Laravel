<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background: #35424a;
            color: #ffffff;
            padding: 10px 20px;
            text-align: center;
        }
        h1 {
            margin: 0;
        }
        nav {
            margin: 20px 0;
            text-align: center; /* Center the navigation links */
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #35424a;
            font-weight: bold;
        }
        nav a:hover {
            color: #e8491d;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        footer {
            text-align: center;
            padding: 10px 0;
            background: #35424a;
            color: #ffffff;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
 
    <nav>
        <a href="/"><i class="fas fa-home"></i> Home</a>
        <a href="productos">Productos</a>
        <a href="#">Especialidades</a>
        <a href="/login"><i class="fas fa-sign-in-alt"></i> Login</a>
    </nav>

    <div class="container">
        <p>Esta es la página principal después de iniciar sesión.</p>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Tu Aplicación. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
