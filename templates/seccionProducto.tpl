{include file='templates/header.tpl'}
{include file='templates/formulario.tpl'}

<div>
    <ul>
        {foreach from=$listaProductos item=$producto}
         <li> ID: {$producto -> id_producto} Producto: ({$producto->producto}) Marca:({$producto->marca}) Precio: ({$producto->precio})
             <a  href="borrarProducto/{$producto->id_producto}">Borrar</a>
             <a  href="cargarParaModificar/{$producto->id_producto}">Modificar</a>
         </li>
        {/foreach}  
    </ul>
</div>

{include file='templates/footer.tpl'}
