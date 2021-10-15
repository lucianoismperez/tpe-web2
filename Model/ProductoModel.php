<?php

class ProductoModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=tienda_informatica;charset=utf8', 'root', '');  //abro conexion con db
    }

    function getLista(){
        $sentencia = $this->db->prepare( "select a.producto,  a.id_producto, a.precio, b.marca from producto a
        left join categoria b on a.id_marca = b.id_marca"); 
        $sentencia->execute(); 
        $lista = $sentencia->fetchAll(PDO::FETCH_OBJ); 
        return $lista; 
    } 

    function getProducto($id){
        $sentencia = $this->db->prepare( "select * from producto WHERE id_producto=?"); 
        $sentencia->execute(array($id));
        $producto = $sentencia->fetchAll(PDO::FETCH_OBJ);  
        return $producto; 
    } 
   
  
    function insertProducto($producto, $marca, $precio, $marcas){ 
        foreach ($marcas as & $value) {
            if ($value -> marca == $marca) {
                $id_marca = $value -> id_marca;
                echo($id_marca);
            }
        }
        $sentencia = $this->db->prepare("INSERT INTO producto(producto, id_marca, precio) VALUES(?, ?, ?)");
        $sentencia->execute(array($producto,$id_marca,$precio));
    }


    function borrarProductoFromDB($id){
        $sentencia = $this->db->prepare("DELETE FROM producto WHERE id_producto=?");  
        $sentencia->execute(array($id));
    }

    
    function getListadoProductosPorMarca($id){
        $sentencia = $this->db->prepare( "select producto, precio from producto WHERE id_marca=?"); 
        $sentencia->execute(array($id));
        $ListadoProductosPorMarca = $sentencia->fetchAll(PDO::FETCH_OBJ);  
        return  $ListadoProductosPorMarca; 
    }

    function cargarParaModificar($id, $marcas){
        $sentencia = $this->db->prepare("select a.producto,  a.id_producto, a.precio, b.marca from producto a
        left join categoria b on a.id_marca = b.id_marca WHERE id_producto=?");    
        $sentencia->execute(array($id));
        $producto = $sentencia->fetch(PDO::FETCH_OBJ); 
        return $producto;
    }

    function updateProductoFromDB($producto, $marca, $precio, $marcas, $id_producto){
        foreach ($marcas as & $value) {
            if ($value -> marca == $marca) {
                $id_marca = $value -> id_marca;
            }
        }

        $sentencia = $this->db->prepare("UPDATE producto SET producto=?, id_marca=?, precio=? WHERE id_producto=?");
        $sentencia->execute(array($producto, $id_marca, $precio, $id_producto));
    }
    
}