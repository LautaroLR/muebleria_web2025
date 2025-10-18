<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-18 01:39:01
  from 'C:\xampp\htdocs\muebleria_web2025\public\templates\tabla.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f2d3951a4b86_12201342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '954cefb9570eeda573a83c945e03486400435f0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\muebleria_web2025\\public\\templates\\tabla.tpl',
      1 => 1760741390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./head.tpl' => 1,
  ),
),false)) {
function content_68f2d3951a4b86_12201342 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <tr>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['nombre'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['descripcion'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['categoria'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['precio'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['stock'], ENT_QUOTES, 'UTF-8', true);?>
</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
</body>
</div>

</html><?php }
}
