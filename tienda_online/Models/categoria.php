<?php 


class Categoria {
    private $id;
    private $nombre;
    private $categoriaPadre;

//Constructor
    public function __construct($id, $nombre, $categoriaPadre) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->categoriaPadre = $categoriaPadre;
    }

//Métodos GET
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCategoriaPadre() {
        return $this->categoriaPadre;
    }

//Métodos Set
    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setCategoriaPadre($categoriaPadre) {
        $this->categoriaPadre = $categoriaPadre;
    }
}


?>