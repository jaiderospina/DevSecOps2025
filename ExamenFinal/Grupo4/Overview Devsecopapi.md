## Descripción aplicación:
Sistema de gestión de datos utilizando la arquitectura LAMP (Linux, Apache, MariaDB, PHP), El sistema permite registrar, modificar, eliminar y visualizar datos desde una interfaz web desarrollada con PHP, que se comunica con una base de datos MariaDB
### Características:
Aplicación web que permita crear, modificar y eliminar ítems de forma sencilla y eficiente, proporcionando una interfaz intuitiva para la gestión dinámica de datos
### Requisitos:
* La aplicación esta diseñada para ejecutarse nativamente en linux 
    - WSL 2 es una versión mejorada del subsistema que permite ejecutar un núcleo de Linux completo dentro de Windows. 
    - Docker Desktop es una aplicación que facilita la creación, ejecución y gestión de contenedores Docker. 
    - Ngrok es una herramienta que crea túneles seguros a tu localhost, permitiendo exponer servicios locales a través de una URL pública. 
    - Ubuntu es un sistema operativo de código abierto y gratuito, diseñado para ser accesible tanto para usuarios novatos como para profesionales.

### * Como Usar:

    - Navegue hasta la ruta del proyecto donde se encuentra el archivo docker-compose.yml y ejecute el comando docker compose up -d para inicar el despliegue de los contenedores.

    - Observe los docker ejecutándose con el comando docker ps.

### Variables de entorno:

Se de personalizar la creación de la base de datos en mariadb con:

    - MYSQL_DATABASE: Nombre 
    - MYSQL_USER: Usuario 
    - MYSQL_PASSWORD: Clave 
    - MYSQL_ROOT_PASSWORD: Claved de root
	
Agregar usuario a Phpmyadmin

    - MYSQL_USER: Usuario 
    - MYSQL_PASSWORD: Clave 
    - MYSQL_ROOT_PASSWORD: Clave de root
