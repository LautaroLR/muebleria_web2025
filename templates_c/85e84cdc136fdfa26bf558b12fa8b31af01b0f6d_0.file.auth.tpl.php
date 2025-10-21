<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-21 22:25:11
  from 'C:\xampp\htdocs\muebleria_web2025\public\templates\auth.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f7ec27d88490_84675978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85e84cdc136fdfa26bf558b12fa8b31af01b0f6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\muebleria_web2025\\public\\templates\\auth.tpl',
      1 => 1761078305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./head.tpl' => 1,
    'file:./navbar.tpl' => 1,
  ),
),false)) {
function content_68f7ec27d88490_84675978 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:./navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h4 class="card-title mb-4 text-center">Iniciar sesión</h4>

            <form action="login" method="post">
              <div class="mb-3">
                <label for="name" class="form-label">Usuario</label>
                <input 
                  type="text" 
                  class="form-control" 
                  id="name" 
                  name="name" 
                  required
                >
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input 
                  type="password" 
                  class="form-control" 
                  id="password" 
                  name="password" 
                  required
                >
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Ingresar</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<?php }
}
