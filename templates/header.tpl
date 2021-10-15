<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{BASE_URL}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Tienda informática</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Productos por marca
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    {foreach from=$listaCategorias item=$lista}
                    <a class="dropdown-item" href="mostrarListadoMarca/{$lista->marca}">{$lista->marca}</a>
                    {/foreach}
                </div>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="categorias">Categorías</a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="productos">Productos</a>
            </li>

        </ul>
         <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Usuarios
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">                  
                    <a class="dropdown-item" href="nuevoUsuario/"> Registrarse</a>
                    <a class="dropdown-item" href="ingresar/"> Ingresar</a>
                    <a class="dropdown-item" href="logout/"> Logout</a>
                </div>
            </li>           
        </ul>
    </div>
    </div>
    
</nav>
<body>