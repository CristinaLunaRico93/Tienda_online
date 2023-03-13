<?php

class Carrito {
    private $id;
    private $usuario;
    private $fecha;
    private $precio;
    private $estado;

//constructor
    public function __construct($id, $usuario, $fecha, $precio, $estado) {
        $this->id = $id;
        $this->usuario = $usuario;
        $this->fecha = $fecha;
        $this->precio = $precio;
        $this->estado = $estado;
    }


//Métodos Get

    public function getId() {
        return $this->id;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getEstado() {
        return $this->estado;
    }
//Métodos set

     public function setId($id) {
        $this->id = $id;
    }

	public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

	public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

	public function setPrecio($precio) {
        $this->precio = $precio;
    }

	public function setEstado($estado) {
        $this->estado = $estado;
    }


}







?>