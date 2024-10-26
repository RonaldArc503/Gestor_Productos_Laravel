<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index() {
        // Obtener todos los productos y pasarlos a la vista
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create() {
        // Mostrar el formulario de creación de un nuevo producto
        return view('productos.create');
    }

    public function store(Request $request) {
        // Validar la solicitud
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'categoria' => 'required',
            'cantidad_stock' => 'required|integer',
        ]);

        // Crear un nuevo producto
        Producto::create($request->all());

        // Redirigir a la lista de productos con un mensaje de éxito
        return redirect()->route('productos.index')->with('success', 'Producto añadido con éxito');
    }

    public function edit(Producto $producto) {
        // Mostrar el formulario de edición con los datos del producto existente
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto) {
        // Validar la solicitud
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'categoria' => 'required',
            'cantidad_stock' => 'required|integer',
        ]);

        // Actualizar los datos del producto
        $producto->update($request->all());

        // Redirigir a la lista de productos con un mensaje de éxito
        return redirect()->route('productos.index')->with('success', 'Producto actualizado con éxito');
    }

    public function destroy(Producto $producto) {
        // Eliminar el producto
        $producto->delete();

        // Redirigir a la lista de productos con un mensaje de éxito
        return redirect()->route('productos.index')->with('success', 'Producto eliminado con éxito');
    }
}
