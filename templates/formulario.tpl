
<div>
    <h2>Agregar/editar/eliminar producto</h2>
    <form action="insertProducto" method="post">
        <input placeholder="producto" type="text" name="producto" id="title" required>
        <label for="marcas">Selecciona una marca:</label>
        <select name="marca" id="marca">
            {foreach from=$listaCategorias item=$lista}
               <option value={$lista-> marca}>{$lista -> marca}</option>
            {/foreach} 
        </select>
        <input placeholder="precio" type="number" name="precio" id="precio">
        <input type="submit" value="Agregar">
    </form>
</div>  