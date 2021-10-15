<?php

class UsuarioModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=tienda_informatica;charset=utf8', 'root', '');  //abro conexion con db
    }

    
    function insertarNuevoUsuario($email, $password){ 
        if ($email !=null && $password !=null){
            $usuario_password= password_hash($password, PASSWORD_BCRYPT);
            $sentencia = $this->db->prepare("INSERT INTO usuario(email, clave) VALUES(?, ?)");
            $sentencia->execute(array($email, $usuario_password));
        }
       
    }

        function getUser($email){
            $query = $this->db->prepare('SELECT * FROM usuario WHERE email = ?');
            $query->execute([$email]);
            return $query->fetch(PDO::FETCH_OBJ);
        }
  
}