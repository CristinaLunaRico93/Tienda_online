<?php
// Incluimos el modelo de Producto
require_once('Models/producto.php');

class ProductoController {

  public function __construct(){}

  // Acción para crear un nuevo producto
  public function create() {
    // Si se ha enviado el formulario
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Recogemos los datos del formulario
      $id = $_POST['id'];
      $nombre = $_POST['nombre'];
      $precio = $_POST['precio'];
      $categoria = $_POST['categoria'];
      $unidadesStock = $_POST['unidadesStock'];

      // Creamos el objeto Producto
      $producto = new Producto($id, $nombre, $precio, $categoria, $unidadesStock);

      // Guardamos el producto en la base de datos
      $producto->guardar();

      // Redireccionamos a la lista de productos
      header('Location: index.php?controller=producto&action=list');
      exit;
    } else {
      // Mostramos el formulario de creación
      require('views/producto/create.php');
    }
  }

  // Acción para listar todos los productos
  public function list() {
    // Recuperamos todos los productos de la base de datos
    $productos = Producto::listar();

    // Mostramos la vista con la lista de productos
  }

}