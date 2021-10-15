<?php
require_once "./Model/UsuarioModel.php";
require_once "./View/NuevoUsuarioView.php";

class RegistroController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new UsuarioModel();
        $this->view = new NuevoUsuarioView();
    }


    function insertarNuevoUsuario(){
       $this->model->insertarNuevoUsuario($_POST['email'], $_POST['password']);
       $this->view -> showHomeLocation();


    }
    function mostrarFormularioIngreso(){
        $this->view -> showIngresoLocation();
    }


    function mostrarFormularioRegistro(){
        $this->view -> showRegistracionLocation();
    }
}