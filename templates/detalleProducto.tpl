<div>
    <ul>
        {foreach from=$producto item=$item}
         <li> ID:({$item -> id_producto}) Producto: ({$item->producto}) Marca:({$marca}) Precio: ({$item->precio})
         </li>
         
        {/foreach}  
    </ul>
</div>