<?php
// Incluimos el modelo de Administrador
require_once('Models/administrador.php');

class AdministradorController {

  // Acción para crear un nuevo administrador
  public function crear() {
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
      require('views/administrador/crear.php');
    }
  }

  // Acción para listar todos los administradores
  public function listar() {
    // Recuperamos todos los administradores de la base de datos
    $administradores = Administrador::listar();

    // Mostramos la vista con la lista de administradores
    require('views/administrador/listar.php');
  }

  // Acción para editar un administrador
  public function editar() {
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
      require('views/administrador/editar.php');
    }
  }

  // Acción para eliminar un administrador
  public function eliminar() {
    // Recogemos el id del administrador a eliminar
    $id = $_GET['id'];

    // Eliminamos el administrador de la base de datos
    Administrador::eliminar($id);

    // Redireccionamos a la lista de administradores
    header('Location: index.php?controller=administrador&action=listar');
    exit;
  }
}
?>