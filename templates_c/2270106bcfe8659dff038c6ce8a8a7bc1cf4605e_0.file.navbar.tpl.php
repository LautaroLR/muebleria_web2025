<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-21 21:04:45
  from 'C:\xampp\htdocs\muebleria_web2025\public\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f7d94dc11521_39689200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2270106bcfe8659dff038c6ce8a8a7bc1cf4605e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\muebleria_web2025\\public\\templates\\navbar.tpl',
      1 => 1761073482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./head.tpl' => 1,
  ),
),false)) {
function content_68f7d94dc11521_39689200 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container">
    <!-- Logo / Nombre -->
    <a class="navbar-brand fw-bold text-uppercase" href="#">
      <i class="bi bi-house-door-fill me-2"></i>Mueblería
    </a>

    <!-- Botón colapsable en móvil -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMuebleria" aria-controls="navbarMuebleria" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Contenido del navbar -->
    <div class="collapse navbar-collapse" id="navbarMuebleria">

      <!-- Links principales -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
catalogo">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Nosotros</a>
        </li>

        <!-- Dropdown de categorías REVISAR-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="categoriasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorías
          </a>
          <ul class="dropdown-menu" aria-labelledby="categoriasDropdown">
            <li><a class="dropdown-item" href="#">Sillas</a></li>
            <li><a class="dropdown-item" href="#">Mesas</a></li>
            <li><a class="dropdown-item" href="#">Bancos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Nuevos productos</a></li>
          </ul>
        </li>
      </ul>

      <!-- Buscador -->
      <form class="d-flex me-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Buscar">
        <button class="btn btn-outline-dark" type="submit">Buscar</button>
      </form>

      <!-- Botón de usuario / carrito -->
      <div class="d-flex">
        <a href="#" class="btn btn-dark me-2">
          <i class="bi bi-cart-fill"></i> Carrito
        </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
login" class="btn btn-outline-dark">
          <i class="bi bi-person-fill"></i> Ingresar
        </a>
      </div>
    </div>
  </div>
</nav>

<!-- Bootstrap JS (Bundle con Popper incluido) -->
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<!-- Íconos de Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

</body>
</html>

<?php }
}
