{include file= './head.tpl'}
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
          <a class="nav-link active" aria-current="page" href="{$base_url}/catalogo">Inicio</a>
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
        <a href="#" class="btn btn-outline-dark">
          <i class="bi bi-person-fill"></i> Ingresar
        </a>
      </div>
    </div>
  </div>
</nav>

<!-- Bootstrap JS (Bundle con Popper incluido) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Íconos de Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

</body>
</html>

