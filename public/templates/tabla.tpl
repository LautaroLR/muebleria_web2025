{include file= './head.tpl'}
<html lang="es">

<body>
    <div class="table-responsive">
        <h2>Artículos del catálogo</h2>
        <thead class="table-dark">
            <table class="table table-striped table-hover align-middle">
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Stock</th>
                </tr>
        </thead>
        {foreach $items as $item}
            <tr>
                <td>{$item.nombre|escape:'html'}</td>
                <td>{$item.descripcion|escape:'html'}</td>
                <td>{$item.categoria|escape:'html'}</td>
                <td>{$item.precio|escape:'html'}</td>
                <td>{$item.stock|escape:'html'}</td>
            </tr>
        {/foreach}
        </table>
</body>
</div>

</html>