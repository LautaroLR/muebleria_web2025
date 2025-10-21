<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-21 22:39:38
  from 'C:\xampp\htdocs\muebleria_web2025\public\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f7ef8aea7687_84018647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad7c96cdd0c1f2dcc163f0a2f37f11e2a8367ce3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\muebleria_web2025\\public\\templates\\categorias.tpl',
      1 => 1761079169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./head.tpl' => 1,
    'file:./navbar.tpl' => 1,
  ),
),false)) {
function content_68f7ef8aea7687_84018647 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:./navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Gestión de Categorías</h2>

<div class="mb-3">
    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categoria/agregar" class="btn btn-success">
        <i class="fas fa-plus"></i> Agregar Nueva Categoría
    </a>
</div>

<?php if (count($_smarty_tpl->tpl_vars['categorias']->value) > 0) {?>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nombre de la Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</td>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/categoria/editar/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
" class="btn btn-sm btn-info me-2">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                        
                        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/categoria/borrar/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
" method="POST" class="d-inline">
                            <input type="hidden" name="_method" value="DELETE"> 
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de eliminar la categoría <?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
?');">
                                <i class="fas fa-trash-alt"></i> Borrar
                            </button>
                        </form>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
<?php } else { ?>
    <div class="alert alert-warning" role="alert">
        No hay categorías registradas.
    </div>
<?php }
}
}
