<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class TiendaView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showHome($lista, $listaCategorias){
        $this->smarty->assign('titulo', "Cargar Producto");
        $this->smarty->assign('listaProductos', $lista);
        $this->smarty->assign('listaCategorias', $listaCategorias);
        $this->smarty->display('templates/lista.tpl');
     }

     function mostrarSeccionProducto($lista, $listaProductos){
        $this->smarty->assign('listaCategorias', $lista);
        $this->smarty->assign('listaProductos', $listaProductos);
       $this->smarty->display('templates/seccionProducto.tpl');
     }

     function mostrarSeccionCategoria($listaCategorias){
        $this->smarty->assign('listaCategorias', $listaCategorias);
        $this->smarty->assign('titulo', "Agregar/Editar categoría");
        $this->smarty->display('templates/listaCategorias.tpl');
        
     }

     function showformularioCategoriaEditado($listaCategorias){
        $this->smarty->assign('listaCategorias', $listaCategorias);
        $this->smarty->display('templates/listaCategorias.tpl');
     }

     function showEdicionSeccionCategorias($listaCategorias){
        $this->smarty->assign('listaCategorias', $listaCategorias);
        $this->smarty->display('templates/listaCategorias.tpl');
     }

    
    function showFormulario($producto, $marcas){
        $this->smarty->assign('titulo', "Modificar producto");
        $this->smarty->assign('producto', $producto);
        $this->smarty->assign('listaCategorias', $marcas);
       // var_dump($marcas);
        $this->smarty->display('templates/formUpdate.tpl');
        
    }

    
    function mostrarListadoProductosPorMarca($listadoProductosPorMarca, $marca, $listaCategorias){
        $this->smarty->assign('titulo', "Listado de productos de la marca:");
        $this->smarty->assign('listadoProductosPorMarca', $listadoProductosPorMarca);
        $this->smarty->assign('listaCategorias', $listaCategorias);
        $this->smarty->assign('marca', $marca);
        $this->smarty->display('templates/ListadoProductosPorMarca.tpl');
        
    }

    function showDetalleProducto($producto, $marca){
        $this->smarty->assign('marca', $marca);
        $this->smarty->assign('producto', $producto);
         $this->smarty->display('templates/detalleProducto.tpl');   
    }
    

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");    
    }

    function showSeccionProductoLocation(){
        header("Location: ".BASE_URL."productos");    
    }

    function irSeccionCategoriaLocation(){
        header("Location: ".BASE_URL."categorias");    
    }
}