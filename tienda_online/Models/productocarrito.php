<?php

class ProductoCarrito {
    private $idCarrito;
    private $idProducto;
    private $unidades;
    private $precio;
    private $carrito;
    private $producto;

//Al tener dos claves foráneas hay que hacer referencia con Carrito y Producto
//Constructor
    public function __construct($idCarrito, $idProducto, $unidades, $precio, $carrito = null, $producto = null) {
        $this->idCarrito = $idCarrito;
        $this->idProducto = $idProducto;
        $this->unidades = $unidades;
        $this->precio = $precio;
        $this->carrito = $carrito;
        $this->producto = $producto;
    }

//Métodos Get
    public function getIdCarrito() {
        return $this->idCarrito;
    }

    public function getIdProducto() {
        return $this->idProducto;
    }

    public function getUnidades() {
        return $this->unidades;
    }

    public function getPrecio() {
        return $this->precio;
    }

//Al tener dos claves foráneas hay que hacer referencia con Carrito y Producto
    public function getCarrito() {
        return $this->carrito;
    }

    public function getProducto() {
        return $this->producto;
    }

//Métodos set:

     public function setIdCarrito($idCarrito) {
        $this->idCarrito = $idCarrito;
    }

    public function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }

    public function setUnidades($unidades) {
        $this->unidades = $unidades;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

//Al tener dos claves foráneas hay que hacer referencia con Carrito y Producto

    public function setCarrito($carrito) {
        $this->carrito = $carrito;
    }

    public function setProducto($producto) {
        $this->producto = $producto;
    }


}



?>