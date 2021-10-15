<?php
class CategoriaModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=tienda_informatica;charset=utf8', 'root', '');  //abro conexion con db
    }

    
    function getListaCategorias(){
        $sentencia = $this->db->prepare( "select * from categoria"); 
        $sentencia->execute();
        $listaCategorias = $sentencia->fetchAll(PDO::FETCH_OBJ);  
        return $listaCategorias; 
    } 
 

    function getNombreMarca($marcas, $producto){     
        $id = $producto[0] -> id_marca;
        foreach ($marcas as & $value) {
            if ($value -> id_marca == $id) {
                $marca = $value -> marca;
            }
        }
        return $marca;
    } 

    function getIdMarca($listaCategorias, $marca){
        foreach ($listaCategorias as & $value) {
            if ($value -> marca == $marca) {
                $id_marca = $value -> id_marca;
            }
        }
        return $id_marca;
    } 
  
    function insertarCategoria($marca, $origen){ 
        $sentencia = $this->db->prepare("INSERT INTO categoria(marca, origen) VALUES(?, ?)");
        $sentencia->execute(array($marca, $origen));
    }

    
    function borrarCategoriaBD($id){
        $sentencia = $this->db->prepare("DELETE FROM categoria WHERE id_marca=?"); 
        $sentencia->execute(array($id));
    }

    

  
}