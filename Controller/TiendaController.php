<?php
require_once "./Model/ProductoModel.php";
require_once "./View/TiendaView.php";
require_once "./Model/CategoriaModel.php";
require_once "./Helpers/AuthHelper.php";

class TiendaController{

    private $model;
    private $categoriaModel;
    private $view;

    function __construct(){
        $this->model = new ProductoModel();
        $this->categoriaModel = new CategoriaModel();
        $this->view = new TiendaView();
        $this->authHelper = new AuthHelper();
    }

    function showHome(){
        $lista = $this->model->getLista(); 
        $listaCategorias = $this->categoriaModel->getListaCategorias(); 
        $this->view->showHome($lista, $listaCategorias);
    }

    function verProducto($id_producto){
        $marcas = $this->categoriaModel->getListaCategorias(); 
        $producto = $this->model->getProducto($id_producto); 
        $marca = $this->categoriaModel ->getNombreMarca($marcas, $producto);
        $this->view->showDetalleProducto($producto, $marca);
    }

    
    function mostrarListadoMarca($marca){
        $listaCategorias = $this->categoriaModel->getListaCategorias(); 
        $id= $this -> categoriaModel -> getIdMarca($listaCategorias, $marca);
        $listadoProductosPorMarca = $this-> model -> getListadoProductosPorMarca($id);
        $this->view->mostrarListadoProductosPorMarca($listadoProductosPorMarca, $marca, $listaCategorias);
    }

 
    function mostrarSeccionProducto(){
        $this->authHelper->checkLoggedIn();
        $lista = $this->model->getLista(); 
        $listaCategorias = $this->categoriaModel->getListaCategorias(); 
        $this->view->mostrarSeccionProducto($listaCategorias, $lista);
    }
    
    function mostrarSeccionCategoria(){
        $this->authHelper->checkLoggedIn();
        $listaCategorias = $this->categoriaModel->getListaCategorias(); 
        $this->view->mostrarSeccionCategoria($listaCategorias);
    }

    function showFormulario(){
        $listaCategorias = $this->categoriaModel->getListaCategorias(); 
        $this->view->showFormulario($listaCategorias);

    }

    function insertProducto(){
        $this->authHelper->checkLoggedIn();
        $marcas = $this->categoriaModel->getListaCategorias(); 
        $this->model->insertProducto($_POST['producto'], $_POST['marca'], $_POST['precio'], $marcas);
        $this->view->showSeccionProductoLocation();
    }

    function insertarCategoria(){
        $this->authHelper->checkLoggedIn();
        $this->categoriaModel->insertarCategoria($_POST['marca'], $_POST['origen']);
        $this->view->irSeccionCategoriaLocation();
    }
    
    function borrarProducto($id){
        $this->authHelper->checkLoggedIn();
        $listaCategorias = $this->categoriaModel->getListaCategorias(); 
        $this->model->borrarProductoFromDB($id);
        $this->view->showSeccionProductoLocation();
    }

    function borrarCategoria($id){
        $this->authHelper->checkLoggedIn();
        $listaCategorias = $this->categoriaModel->getListaCategorias(); 
        $this->categoriaModel->borrarCategoriaBD($id);
        $this->view->irSeccionCategoriaLocation();
    }

    function cargarParaModificar($id){
        $this->authHelper->checkLoggedIn();
        $marcas = $this->categoriaModel->getListaCategorias(); 
        $producto=$this->model->cargarParaModificar($id, $marcas);
        $this->view->showFormulario($producto, $marcas);
    }

    function updateProducto($id){
        $this->authHelper->checkLoggedIn();
        $marcas = $this->categoriaModel->getListaCategorias(); 
        var_dump($_GET);
        $this->model->updateProductoFromDB($_GET['producto'], $_GET['marca'], $_GET['precio'], $marcas, $id);
        $this->view->showSeccionProductoLocation();
    }

}
