🛋️ Sistema de Gestión para Mueblería
📋 Descripción del Proyecto
Sistema web MVC para la gestión integral de una mueblería, que permite administrar productos, categorías, inventario, clientes y ventas a través de una interfaz intuitiva y responsive.

🚀 Características Principales
Gestión de Productos CRUD completo de muebles con imágenes y especificaciones

Control de Inventario Seguimiento de stock y alertas de reposición

Categorización Organización de productos por tipo, estilo y material

Gestión de Clientes Registro y seguimiento de clientes y sus compras

Módulo de Ventas Proceso completo de venta con generación de facturas

Dashboard Administrativo Reportes y métricas de negocio en tiempo real

🛠️ Tecnologías Implementadas
Backend
PHP Versión 8.0+

Patrón MVC Arquitectura modelo-vista-controlador

MySQL Base de datos relacional

Apache Servidor web

Frontend
HTML5 Estructura semántica

CSS3 Estilos y animaciones

JavaScript Interactividad del lado del cliente

Bootstrap 5 Framework CSS responsive

📦 Estructura del Proyecto
text
muebleria-app
├── app
│   ├── controllers
│   ├── models
│   ├── views
│   └── core
├── public
│   ├── assets
│   │   ├── css
│   │   ├── js
│   │   └── images
│   └── index.php
├── config
├── vendor
└── .htaccess
⚙️ Instalación y Configuración
Requisitos del Sistema

PHP 8.0 o superior

MySQL 5.7+

Apache con mod_rewrite habilitado

Proceso de Instalación

bash
# Clonar el repositorio
git clone httpsgithub.comusuariomuebleria-app.git

# Navegar al directorio
cd muebleria-app

# Configurar base de datos
mysql -u root -p  databaseschema.sql

# Configurar variables de entorno
cp configenv.example.php configenv.php
# Editar archivo con credenciales de BD
Configuración del Virtual Host

apache
VirtualHost 80
    ServerName muebleria.local
    DocumentRoot rutaalproyectopublic
    Directory rutaalproyectopublic
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    Directory
VirtualHost
🗃️ Base de Datos
El sistema utiliza las siguientes tablas principales

productos - Información de muebles y stock

categorias - Categorización de productos

clientes - Datos de clientes

ventas - Registro de transacciones

usuarios - Accesos al sistema

👥 Desarrolladores
Patricio Ramos Santillán - Desarrollo Backend y Arquitectura MVC

Lautaro López Roth - Frontend y Experiencia de Usuario

📄 Licencia
Este proyecto es de uso académico y está bajo la Licencia MIT.

📞 Soporte
Para reportar issues o solicitar características, contactar a

ramossantillanpatricio@gmail.com

lautarolopezroth@gmail.com

Fecha de Entrega 16 de Septiembre de 2025
Versión 1.0.0

