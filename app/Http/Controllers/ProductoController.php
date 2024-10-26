<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FirebaseService;

class ProductoController extends Controller
{
    protected $firebaseService;

    public function __construct(FirebaseService $firebaseService)
    {
        $this->firebaseService = $firebaseService;
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'cantidad_stock' => 'required|integer',
        ]);

        // Obtener un ID único para el producto (puedes usar un UUID o algún otro método)
        $id = uniqid(); // Genera un ID único

        // Preparar los datos del producto
        $producto = [
            'nombre' => $request->input('nombre'),
            'categoria' => $request->input('categoria'),
            'precio' => $request->input('precio'),
            'cantidad_stock' => $request->input('cantidad_stock'),
        ];

        // Llamar al método para agregar el producto
        $this->firebaseService->addProducto($id, $producto);

        // Redirigir o retornar respuesta
        return redirect()->route('productos.index')->with('success', 'Producto agregado exitosamente.');
    }
}
