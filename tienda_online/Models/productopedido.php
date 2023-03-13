<?php

class ProductoPedido {
  private $idPedido;
  private $idProducto;
  private $unidades;
  private $precio;
  private $producto;
  private $pedido;

//Constructo
//Al tener dos claves foráneas hay que hacer referencia con Producto y Pedido

  public function __construct($idPedido, $idProducto, $unidades, $precio, $producto, $pedido) {
    $this->idPedido = $idPedido;
    $this->idProducto = $idProducto;
    $this->unidades = $unidades;
    $this->precio = $precio;
    $this->producto = $producto;
    $this->pedido = $pedido;
  }

//métodos get
  public function getIdPedido() {
    return $this->idPedido;
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

  //Al tener dos claves foráneas hay que hacer referencia con Producto y Pedido


  public function getProducto() {
    return $this->producto;
  }

  public function getPedido() {
    return $this->pedido;
  }

//Métodos set
  public function setUnidades($unidades) {
    $this->unidades = $unidades;
  }

  public function setPrecio($precio) {
    $this->precio = $precio;
  }
//Al tener dos claves foráneas hay que hacer referencia con Producto y Pedido

  public function setProducto($producto) {
    $this->producto = $producto;
  }

  public function setPedido($pedido) {
    $this->pedido = $pedido;
  }
}



?>