<?php
require_once "Controller/TiendaController.php";
require_once "Controller/RegistroController.php";
require_once "Controller/LoginController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
    
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);

$tiendaController = new TiendaController();
$registroController = new RegistroController();
$loginController = new LoginController();


switch ($params[0]) {
    case 'home': 
        $tiendaController->showHome(); 
        break;

    case 'ingresar': 
        $loginController->login(); 
         break;
     case 'logout': 
        $loginController->logout(); 
        break;
     case 'verify': 
        $loginController->verifyLogin(); 
        break;
        case 'verProducto': 
            $tiendaController->verProducto($params[1]); 
            break;
    case 'mostrarListadoMarca': 
        $tiendaController->mostrarListadoMarca($params[1]); 
        break;

    case 'insertProducto': 
        $tiendaController->insertProducto(); 
        break;
    case 'borrarProducto': 
        $tiendaController->borrarProducto($params[1]); 
        break;  
    case 'cargarParaModificar': 
            $tiendaController->cargarParaModificar($params[1]); 
            break;  

    case 'updateProducto': 
        $tiendaController->updateProducto($params[1]); 
        break;

    case 'categorias': 
        $tiendaController->mostrarSeccionCategoria(); 
        break;

    case 'productos': 
        $tiendaController->mostrarSeccionProducto(); 
        break;

     case 'insertarCategoria': 
         $tiendaController->insertarCategoria(); 
        break;
        
    case 'borrarCategoria': 
        $tiendaController->borrarCategoria($params[1]); 
        break;

    case 'nuevoUsuario': 
        $registroController->mostrarFormularioRegistro(); 
        break;

    case 'ingresar': 
        $registroController->mostrarFormularioIngreso(); 
        break;

    case 'registrarse': 
        $registroController->insertarNuevoUsuario(); 
        break;
        
        
    default: 
        echo('404 Page not found'); 
        break;        
}


?>