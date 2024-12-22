# SistemaX Rol  

Este proyecto implementa un sistema de gestión de usuarios y roles desarrollado en PHP. Esta diseñada para comprender y practicar la creación de roles, permisos, y gestión de usuarios en aplicaciones web.  

## Funcionalidades  
- **Inicio de sesión seguro**: Implementación de un login que verifica los datos de usuario contra una base de datos.  
- **Gestión de roles**: Creación y configuración de roles como Administrador, Asesor y Vendedor, con permisos específicos.  
- **Gestión de perfiles**: Actualización de contraseñas, imágenes de perfil y otros datos personales.  
- **Acceso basado en roles**: Interfaz dinámica que adapta el menú y las opciones disponibles según el rol del usuario.  

## Requisitos  
Para ejecutar este proyecto, necesitas:  
- **Servidor local XAMPP** (o equivalente).  
- **Sublime Text** (o cualquier editor de texto).  
- **MySQL Workbench** para diseñar y gestionar la base de datos.  

## Estructura del proyecto  
El proyecto sigue una estructura modular para organizar el código:  
- **/conexion**: Maneja la conexión con la base de datos.  
- **/extend**: Contiene elementos compartidos como encabezados y menús dinámicos.  
- **/login**: Gestión de inicio y cierre de sesión.  
- **/perfil**: Modificación de datos personales y configuración del usuario.  
- **/usuarios**: Listado y gestión de los usuarios del sistema.  

## Instalación y ejecución  
1. Clona este repositorio:  
   ```bash
   git clone https://github.com/tuusuario/SistemaX-Rol.git
