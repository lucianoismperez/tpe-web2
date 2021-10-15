
<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class NuevoUsuarioView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    
    function showRegistracionLocation(){
        $this->smarty->assign('titulo', 'Registrarse');   
        $this->smarty->assign('error', "");      
        $this->smarty->display('templates/nuevoUsuario.tpl');
    }

    function showIngresoLocation(){
        $this->smarty->display('ingresar.tpl'); 
    }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");    
    }
}
