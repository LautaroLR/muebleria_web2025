{include file= './head.tpl'}
<html lang="es">
<body>
    <div class="auth-container">
        <form action="procesar_login.php" method="POST" class="auth-form">
            <h2>Iniciar Sesión</h2>
            
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <div class="form-group">
                <label>
                    <input type="checkbox" name="remember_me"> Recordarme
                </label>
            </div>
            
            <div class="form-group">
                <button type="submit">Ingresar</button>
            </div>
            
            <div class="auth-links">
                <a href="registro.php">¿No tienes cuenta? Regístrate aquí</a>
                <a href="recuperar_password.php">¿Olvidaste tu contraseña?</a>
            </div>
        </form>
    </div>
</body>
</html>