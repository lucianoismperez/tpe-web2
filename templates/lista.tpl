{include file='templates/header.tpl'}

<div>
<h1>Listado de productos</h1>
    <ul>
        {foreach from=$listaProductos item=$producto}
         <li><a href="verProducto/{$producto -> id_producto}"> ID:({$producto -> id_producto})</a> Producto: ({$producto->producto}) Marca:({$producto->marca}) Precio: ({$producto->precio})
         </li>
         
        {/foreach}  
    </ul>
</div>
<!-- <a href="home" > Volver </a> -->
 {* <a href="formulario" > Agregar producto </a>  *}

{include file='templates/footer.tpl'}