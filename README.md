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

2. Configura la base de datos usando los scripts proporcionados en el directorio `/db`.

3. Abre XAMPP y activa el servidor Apache y MySQL.

4. Configura el archivo `conexion.php` con tus credenciales de base de datos.

5. Accede al sistema desde tu navegador en [http://localhost/SistemaX-Rol](http://localhost/SistemaX-Rol).

## Roles y permisos

El sistema incluye tres roles predefinidos:

- **Administrador**: Acceso completo al sistema.
- **Asesor**: Acceso limitado a módulos específicos.
- **Vendedor**: Acceso restringido a las funcionalidades básicas.

## Contribuciones

¡Las contribuciones son bienvenidas yei! Si tienes sugerencias o mejoras, siéntete libre de abrir un issue o enviar un pull request.

## Licencia

Este proyecto está bajo la licencia MIT. Consulta el archivo `LICENSE` para más detalles.

