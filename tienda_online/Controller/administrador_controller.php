<?php
// Incluimos el modelo de Administrador
require_once('Models/administrador.php');

class AdministradorController {

  public function __construct(){}

  // Acción para crear un nuevo administrador
  public function register() {
    // Si se ha enviado el formulario
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Recogemos los datos del formulario
      $codigoEmpleado = $_POST['codigoEmpleado'];
      $usuario = $_POST['usuario'];
      $clave = $_POST['clave'];
      $nombre = $_POST['nombre'];
      $apellidos = $_POST['apellidos'];

      // Creamos el objeto Administrador
      $admin = new Administrador($codigoEmpleado, $usuario, $clave, $nombre, $apellidos);

      // Guardamos el administrador en la base de datos
      $admin->guardar();

      // Redireccionamos a la lista de administradores
      header('Location: index.php?controller=administrador&action=listar');
      exit;
    } else {
      // Mostramos el formulario de creación
      require('views/administrador/register.php');
    }
  }

  // Acción para listar todos los administradores
  public function index() {
    // Recuperamos todos los administradores de la base de datos
    $administradores = Administrador::listar();

    // Mostramos la vista con la lista de administradores
    require('views/administrador/index.php');
  }

  // Acción para editar un administrador
  public function update() {
    // Recogemos el id del administrador a editar
    $id = $_GET['id'];

    // Si se ha enviado el formulario
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Recogemos los datos del formulario
      $codigoEmpleado = $_POST['codigoEmpleado'];
      $usuario = $_POST['usuario'];
      $clave = $_POST['clave'];
      $nombre = $_POST['nombre'];
      $apellidos = $_POST['apellidos'];

      // Creamos el objeto Administrador
      $admin = new Administrador($codigoEmpleado, $usuario, $clave, $nombre, $apellidos, $id);

      // Actualizamos el administrador en la base de datos
      $admin->actualizar();

      // Redireccionamos a la lista de administradores
      header('Location: index.php?controller=administrador&action=listar');
      exit;
    } else {
      // Recuperamos el administrador de la base de datos
      $admin = Administrador::buscarPorId($id);

      // Mostramos el formulario de edición
      require('views/administrador/update.php');
    }
  }

  // Acción para eliminar un administrador
  public function delete() {
    // Recogemos el id del administrador a eliminar
    $id = $_GET['id'];

    // Eliminamos el administrador de la base de datos
    Administrador::eliminar($id);

    // Redireccionamos a la lista de administradores
    header('Location: index.php?controller=administrador&action=listar');
    exit;
  }

  public function error(){
    require_once('views/administrador/error.php');
  }
}
