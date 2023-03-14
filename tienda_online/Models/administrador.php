<?php

require('usuario.php');
class Administrador extends Usuario {
    private $codigoEmpleado;

    // Constructor
    public function __construct($codigoEmpleado, $usuario, $clave, $nombre, $apellidos, $id = null) {
        parent::__construct($usuario, $clave, $nombre, $apellidos, $id);
        $this->codigoEmpleado = $codigoEmpleado;
    }

 //get. No hay set porque el unico campo es el id que es clave primaria
    public function getCodigoEmpleado() {
        return $this->codigoEmpleado;
    }
}


?>