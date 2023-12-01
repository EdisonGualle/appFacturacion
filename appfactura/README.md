Redcatalo - Documentación del Proyecto
Descripción
Redcatalo es un proyecto desarrollado en Laravel que gestiona información relacionada con ventas, clientes, productos, emisores, facturas, detalles de venta y formas de pago. La base de datos utilizada es MySQL.

Configuración del Entorno
1. Base de Datos
Asegúrate de tener un servidor MySQL instalado y en funcionamiento.
Crea una base de datos llamada redcatalo (o el nombre que prefieras).
2. Configuración de .env
Copia el archivo .env.example y pégalo como .env.
Abre el archivo .env y configura las siguientes variables de entorno:
makefile
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=redcatalo
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
3. Ejecución del Servidor
Abre una terminal y navega hasta el directorio del proyecto.

Ejecuta el siguiente comando para instalar las dependencias del proyecto:

bash
Copy code
composer install
Ejecuta las migraciones para crear las tablas en la base de datos:

bash
Copy code
php artisan migrate
Genera la clave de aplicación:

bash
Copy code
php artisan key:generate
Inicia el servidor de desarrollo de Laravel:

bash
Copy code
php artisan serve
El servidor se ejecutará en http://localhost:8000 de forma predeterminada.

Uso del Proyecto
Accede a la aplicación utilizando tu navegador web y visita http://localhost:8000.
Explora las diferentes secciones de la aplicación, como clientes, productos, emisores, facturas, etc.
Realiza operaciones CRUD (Crear, Leer, Actualizar, Eliminar) según tus necesidades.
¡Disfruta usando Redcatalo para gestionar tu información de manera eficiente! Si necesitas más ayuda, revisa la documentación de Laravel en https://laravel.com/docs o contáctame directamente.



Recuerda ajustar los detalles del usuario y la contraseña en el archivo .env 