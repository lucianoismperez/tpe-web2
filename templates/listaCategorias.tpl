{include file='templates/header.tpl'}
{include file='templates/formularioCategoria.tpl'}

<div>
    <ul>
        {foreach from=$listaCategorias item=$categoria}
         <li> ID: {$categoria -> id_marca} Marca: ({$categoria -> marca}) Origen:({$categoria -> origen})
             <a  href="borrarCategoria/{$categoria->id_marca}">Borrar</a>
             <a  href="modificarCategoria/{$categoria->id_marca}">Modificar</a>
         </li>
        {/foreach}  
    </ul>
</div>
<!-- <a href="home" > Volver </a> -->
 {* <a href="formulario" > Agregar producto </a>  *}

{include file='templates/footer.tpl'}
