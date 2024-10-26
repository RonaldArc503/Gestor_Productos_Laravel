<?php

namespace App\Services;

use Kreait\Firebase\Factory;

class FirebaseService
{
    protected $database;

    public function __construct()
    {
        // Ajustar la ruta del archivo de credenciales de Firebase
        $factory = (new Factory)
            ->withServiceAccount(storage_path('app/forgedream-firebase-adminsdk-1jxfy-ba1ad72f1f.json')); // Ajustar la ruta al archivo JSON

        $this->database = $factory->createDatabase();
    }

    // Método para obtener los productos
    public function getProductos()
    {
        // Retorna todos los productos de la referencia 'productos' en Firebase
        return $this->database->getReference('productos')->getValue();
    }

    // Método para agregar un producto con un ID
    public function addProducto($id, $producto)
    {
        // Inserta o actualiza un producto en 'productos/{id}' en Firebase
        $this->database->getReference('productos/' . $id)->set($producto);
    }

    // Método para actualizar un producto existente
    public function updateProducto($id, $data)
    {
        // Actualiza las propiedades de un producto específico
        $this->database->getReference('productos/' . $id)->update($data);
    }

    // Método para eliminar un producto
    public function deleteProducto($id)
    {
        // Elimina un producto de 'productos/{id}' en Firebase
        $this->database->getReference('productos/' . $id)->remove();
    }
}
