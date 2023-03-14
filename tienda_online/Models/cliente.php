<?php

require('usuario.php');

class Cliente extends Usuario {
    private $genero;
    private $fechaNacimiento;
    private $telefono;
    private $email;
    private $direccion;
    private $tipoIdentificador;
    private $identificador;

//constructor
    public function __construct($usuario, $clave, $nombre, $apellidos, $genero, $fechaNacimiento, $telefono, $email, $direccion, $tipoIdentificador, $identificador, $id = null) {
        parent::__construct($usuario, $clave, $nombre, $apellidos, $id);
        $this->genero = $genero;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->direccion = $direccion;
        $this->tipoIdentificador = $tipoIdentificador;
        $this->identificador = $identificador;
    }

 //métodos get 
    public function getGenero() {
        return $this->genero;
    }

    public function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getTipoIdentificador() {
        return $this->tipoIdentificador;
    }

    public function getIdentificador() {
        return $this->identificador;
    }

//metodos set
    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setTipoIdentificador($tipoIdentificador) {
        $this->tipoIdentificador = $tipoIdentificador;
    }

    public function setIdentificador($identificador) {
        $this->identificador = $identificador;
    }
}

?>