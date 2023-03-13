<?php

class Producto {
    private $id;
    private $nombre;
    private $precio;
    private $categoria;
    private $unidadesStock;
//Constructor
    public function __construct($id, $nombre, $precio, $categoria, $unidadesStock) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->categoria = $categoria;
        $this->unidadesStock = $unidadesStock;
    }

 //Métodos get

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getUnidadesStock() {
        return $this->unidadesStock;
    }

 //Métodos set

      public function setId($id) {
        $this->id = $id;
    }

 public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

  public function setPrecio($precio) {
        $this->precio = $precio;
    }

  public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

 public function setUnidadesStock($unidadesStock) {
        $this->unidadesStock = $unidadesStock;
    }

   
}



?>