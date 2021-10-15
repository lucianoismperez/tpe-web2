{include file='templates/header.tpl'}

<div>
    <ul>
        {foreach from=$listadoProductosPorMarca item=$producto}
         <li> Producto: ({$producto->producto}) Marca:({$marca}) Precio: ({$producto->precio})
         </li>
        {/foreach}  
    </ul>
</div>
<!-- <a href="home" > Volver </a> -->
 {* <a href="formulario" > Agregar producto </a>  *}

{include file='templates/footer.tpl'}

