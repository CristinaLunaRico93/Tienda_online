<?php

require_once 'Models/cliente.php';

class ClienteController {
    
    // Método para mostrar todos los clientes
    public function index() {
        $clientes = Cliente::getAll();
        require_once 'view/cliente/index.php';
    }

    // Método para mostrar el formulario de creación de un nuevo cliente
    public function create() {
        require_once 'view/cliente/create.php';
    }

    // Método para almacenar un nuevo cliente en la base de datos
    public function store() {
        $cliente = new Cliente(
            $_POST['usuario'],
            $_POST['clave'],
            $_POST['nombre'],
            $_POST['apellidos'],
            $_POST['genero'],
            $_POST['fechaNacimiento'],
            $_POST['telefono'],
            $_POST['email'],
            $_POST['direccion'],
            $_POST['tipoIdentificador'],
            $_POST['identificador']
        );
        $cliente->save();
        header('Location: index.php?controller=cliente&action=index');
    }

    // Método para mostrar los detalles de un cliente específico
    public function show() {
        $cliente = Cliente::getById($_GET['id']);
        require_once 'view/cliente/show.php';
    }

    // Método para mostrar el formulario de edición de un cliente
    public function edit() {
        $cliente = Cliente::getById($_GET['id']);
        require_once 'view/cliente/edit.php';
    }

    // Método para actualizar los datos de un cliente en la base de datos
    public function update() {
        $cliente = new Cliente(
            $_POST['usuario'],
            $_POST['clave'],
            $_POST['nombre'],
            $_POST['apellidos'],
            $_POST['genero'],
            $_POST['fechaNacimiento'],
            $_POST['telefono'],
            $_POST['email'],
            $_POST['direccion'],
            $_POST['tipoIdentificador'],
            $_POST['identificador'],
            $_POST['id']
        );
        $cliente->update();
        header('Location: index.php?controller=cliente&action=index');
    }

    // Método para eliminar un cliente de la base de datos
    public function delete() {
        $cliente = Cliente::getById($_GET['id']);
        $cliente->delete();
        header('Location: index.php?controller=cliente&action=index');
    }
    
}

?>