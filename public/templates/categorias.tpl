{include file= './head.tpl'}
{include file= './navbar.tpl'}

<h2>Gestión de Categorías</h2>

<div class="mb-3">
    <a href="{$base_url}categoria/agregar" class="btn btn-success">
        <i class="fas fa-plus"></i> Agregar Nueva Categoría
    </a>
</div>

{if $categorias|count > 0}
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nombre de la Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            {foreach $categorias as $categoria}
                <tr>
                    <td>{$categoria.id}</td>
                    <td>{$categoria.nombre}</td>
                    <td>
                        <a href="{$base_url}/categoria/editar/{$categoria.id}" class="btn btn-sm btn-info me-2">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                        
                        <form action="{$base_url}/categoria/borrar/{$categoria.id}" method="POST" class="d-inline">
                            <input type="hidden" name="_method" value="DELETE"> 
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de eliminar la categoría {$categoria.nombre}?');">
                                <i class="fas fa-trash-alt"></i> Borrar
                            </button>
                        </form>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
{else}
    <div class="alert alert-warning" role="alert">
        No hay categorías registradas.
    </div>
{/if}