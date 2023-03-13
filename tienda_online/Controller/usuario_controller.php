<?php

require_once 'Models/usuario.php';

class UsuarioController {
    private $model;

    public function __construct() {
        $this->model = new UsuarioModel();
    }

    public function listar() {
        $usuarios = $this->model->listarUsuarios();
        require_once 'views/usuario/listar.php';
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario = new Usuario($_POST['usuario'], $_POST['clave'], $_POST['nombre'], $_POST['apellidos']);
            $this->model->crearUsuario($usuario);
            header('Location: index.php?controller=usuario&action=listar');
        } else {
            require_once 'views/usuario/crear.php';
        }
    }

    public function actualizar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario = new Usuario($_POST['usuario'], $_POST['clave'], $_POST['nombre'], $_POST['apellidos'], $_POST['id']);
            $this->model->actualizarUsuario($usuario);
            header('Location: index.php?controller=usuario&action=listar');
        } else {
            $id = $_GET['id'];
            $usuario = $this->model->obtenerUsuario($id);
            require_once 'views/usuario/actualizar.php';
        }
    }

    public function eliminar() {
        $id = $_GET['id'];
        $this->model->eliminarUsuario($id);
        header('Location: index.php?controller=usuario&action=listar');
    }
}

?>