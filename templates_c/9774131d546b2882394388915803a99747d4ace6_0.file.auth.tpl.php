<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-18 16:52:28
  from 'C:\xampp\htdocs\muebleria\public\templates\auth.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f3a9ac772e28_64730771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9774131d546b2882394388915803a99747d4ace6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\muebleria\\public\\templates\\auth.tpl',
      1 => 1760799147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./head.tpl' => 1,
    'file:./navbar.tpl' => 1,
  ),
),false)) {
function content_68f3a9ac772e28_64730771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:./navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow">
                    <div class="card-body p-4">
                        <!-- Logo/Header -->
                        <div class="text-center mb-4">
                            <h2 class="card-title">Iniciar Sesión</h2>
                            <p class="text-muted">Ingresa a tu cuenta</p>
                        </div>

                        <!-- Formulario de Login -->
                        <form id="loginForm">
                            <!-- Campo Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" 
                                       class="form-control" 
                                       id="email" 
                                       placeholder="usuario@ejemplo.com"
                                       required>
                                <div class="invalid-feedback">
                                    Por favor ingresa un email válido.
                                </div>
                            </div>

                            <!-- Campo Contraseña -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" 
                                       class="form-control" 
                                       id="password" 
                                       placeholder="Ingresa tu contraseña"
                                       required>
                                <div class="invalid-feedback">
                                    La contraseña es requerida.
                                </div>
                            </div>

                            <!-- Recordar contraseña -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">
                                    Recordar sesión
                                </label>
                            </div>

                            <!-- Botón de Submit -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Iniciar Sesión
                                </button>
                            </div>
                        </form>

                        <!-- Enlaces adicionales -->
                        <div class="text-center mt-3">
                            <a href="#" class="text-decoration-none">¿Olvidaste tu contraseña?</a>
                        </div>

                        <hr class="my-4">

                        <!-- Registro -->
                        <div class="text-center">
                            <p class="mb-0">¿No tienes una cuenta?</p>
                            <a href="#" class="text-decoration-none">Regístrate aquí</a>
                        </div>
                    </div>
                </div>

                <!-- Mensaje de alerta para errores -->
                <div id="alertMessage" class="alert alert-danger mt-3 d-none" role="alert">
                    Error en las credenciales. Intenta nuevamente.
                </div>
            </div>
        </div>
    </div>
<?php }
}
