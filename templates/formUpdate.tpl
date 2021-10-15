{include file='templates/header.tpl'}
<div>
    <h2>{$titulo}</h2>
    <form action="updateProducto/{$producto->id_producto}" method="get">
        <input value="{$producto -> producto}" type="text" name="producto" id="producto" required>
        <label for="marcas">Selecciona una marca:</label>
        <select name="marca" id="marca">
            <option value= {$producto -> marca}> {$producto -> marca}</option>  
            {foreach from=$listaCategorias item=$lista}
                {if $lista -> marca !=$producto -> marca}
                    <option value={$lista-> marca}>{$lista -> marca}</option>   
                {/if}
            {/foreach}          
        </select>
        <input value="{$producto -> precio}" type="number" name="precio" id="precio">
        <input type="submit" value="modificar">
    </form>
</div>  
  <a href="productos" > Volver </a>
{include file='templates/footer.tpl'}

