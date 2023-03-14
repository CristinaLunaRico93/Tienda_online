<?php

require_once('../Models/cliente.php');

class ClienteController {
  public function __construct(){}

  public function index(){
    require_once('views/Usuarios/registro.php');
  }

  public function register(){
    if(isset($_POST['submit'])){
            // Recuperar los datos del formulario
      $usuario = $_POST['usuario'];
      $clave = password_hash($_POST['clave'], PASSWORD_DEFAULT);
      $nombre = $_POST['nombre']; 
      $apellidos = $_POST['apellidos'];
      $genero = $_POST['genero'];
      $fechaNacimiento = $_POST['fechaNacimiento'];
      $telefono = $_POST['telefono'];
      $email = $_POST['email'];
      $direccion = $_POST['direccion'];
      $tipoIdentificador = $_POST['tipoIdentificador'];
      $identificador = $_POST['identificador'];

            // Validación de datos
      if(empty($usuario) || empty($clave) || empty($nombre) || empty($apellidos) || empty($email)){
        $error = "Debe completar todos los campos obligatorios (*)";
        require_once('../views/Usuarios/registro.php'); 
      } else {
                // Crear un objeto de la clase Cliente
        $cliente = new Cliente($usuario, $clave, $nombre, $apellidos, $genero, $fechaNacimiento, $telefono, $email, $direccion, $tipoIdentificador, $identificador);

                // Guardar el cliente en la base de datos
        $guardado = $cliente->guardar();

                // Verificar si el cliente se guardó correctamente
        if($guardado){
          $mensaje = "¡El cliente se ha registrado correctamente!";
          require_once('../views/Usuarios/registro.php');
        } else {
          $error = "Error al registrar el cliente. Intente de nuevo más tarde.";
          require_once('../views/Usuarios/registro.php');
        }
      }
    } else {
      require_once('../views/Usuarios/registro.php');
    }
  }

  public function update(){
    if(isset($_POST['submit'])){
            // Recuperar los datos del formulario
      $id = $_POST['id'];
      $usuario = $_POST['usuario'];
      $clave = password_hash($_POST['clave'], PASSWORD_DEFAULT);
      $nombre = $_POST['nombre']; 
      $apellidos = $_POST['apellidos'];
      $genero = $_POST['genero'];
      $fechaNacimiento = $_POST['fechaNacimiento'];
      $telefono = $_POST['telefono'];
      $email = $_POST['email'];
      $direccion = $_POST['direccion'];
      $tipoIdentificador = $_POST['tipoIdentificador'];
      $identificador = $_POST['identificador'];

            // Validación de datos
      if(empty($id) || empty($usuario) || empty($clave) || empty($nombre) || empty($apellidos) || empty($email)){
        $error = "Debe completar todos los campos obligatorios (*)";
        require_once('../views/Usuarios/editar.php'); 
      } else {
                // Crear un objeto de la clase Cliente
        $cliente = new Cliente($usuario, $clave, $nombre, $apellidos, $genero, $fechaNacimiento, $telefono, $email, $direccion, $tipoIdentificador, $identificador);
        $cliente->setId($id);

                // Actualizar el cliente en la base de datos
        $actualizado = $cliente->actualizar();

                // Verificar si el cliente se actualizó correctamente
        if($actualizado){
          $mensaje = "¡El cliente se ha actualizado correctamente!";
          require_once('../views/Usuarios/editar.php');
        } else {
          $error = "Error al actualizar el cliente. Intente de nuevo más tarde.";
          require_once('../views/Usuarios/editar.php');
        }
      }
    } else {
// Obtener el ID del cliente a actualizar
      $id = $_GET['id'];
 // Obtener los datos del cliente de la base de datos
      $cliente = Cliente::buscarPorId($id);

        // Verificar si el cliente existe
      if($cliente){
            // Mostrar el formulario de edición con los datos del cliente
        require_once('../views/Usuarios/editar.php');
      } else {
            // Mostrar un mensaje de error
        $error = "El cliente no existe";
        require_once('../views/Usuarios/error.php');
      }
    }
  }
 public function delete(){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $cliente = new Cliente();
        $cliente->setId($id);
        $eliminado = $cliente->eliminar();

        if($eliminado){
            $mensaje = "¡El cliente se ha eliminado correctamente!";
            require_once('../views/Usuarios/index.php');
        } else {
            $error = "Error al eliminar el cliente. Intente de nuevo más tarde.";
            require_once('../views/Usuarios/index.php');
        }
    } else {
        require_once('../views/Usuarios/index.php');
    }
}
  public function error(){
    require_once('../views/Usuario/error.php');
  }
}

?>
