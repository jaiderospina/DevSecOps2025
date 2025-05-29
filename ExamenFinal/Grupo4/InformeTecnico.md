# API WEB - CONTROL DE INVENTARIOS

Grupo 4
Integrantes
Leonardo Delgadillo Gómez
Daniel Castro Peña
John Alejandro Buitrago Martinez
Geovanny Pedraza Henao

Mayo de 2025

Especialización En Ciberseguridad / Uniminuto

Tecnologías: Docker, PHP, Apache, MariaDB, phpMyAdmin.

## 1. Abstract

This project implements a data management system using the LAMP architecture (Linux, Apache, MariaDB, PHP), fully orchestrated through Docker. The system allows data to be registered, modified, deleted, and viewed through a web interface developed in PHP, which communicates with a MariaDB database. The application facilitates data administration in a portable, reproducible, and efficient environment thanks to the use of containers. Additionally, phpMyAdmin is integrated as a complementary tool for graphical database management.

## 1. Resumen

Este proyecto implementa un sistema de gestión de datos utilizando la arquitectura LAMP (Linux, Apache, MariaDB, PHP), todo orquestado mediante Docker. El sistema permite registrar, modificar, eliminar y visualizar datos desde una interfaz web desarrollada con PHP, que se comunica con una base de datos MariaDB. La aplicación facilita la administración de datos en un entorno portable, reproducible y eficiente gracias al uso de contenedores. Además, se integra phpMyAdmin como herramienta complementaria para la administración de la base de datos de manera gráfica.

## 2. Introducción

Actualmente, muchos inventarios se gestionan en entornos locales, lo cual limita la disponibilidad, seguridad y control centralizado de la información. Esta solución basada en arquitectura LAMP desplegada con Docker permite acceder en tiempo real a los datos desde cualquier ubicación autorizada, facilitando así una gestión más oportuna y eficiente. Al centralizar la información y automatizar procesos clave, se optimizan los flujos de trabajo internos de las organizaciones, mejorando la toma de decisiones y reduciendo errores operativos.

## 3. Obsejetivos

## 3.1 Objetivo General

Desarrollar una aplicación web que permita crear, modificar y eliminar ítems de forma sencilla y eficiente, proporcionando una interfaz intuitiva para la gestión dinámica de datos. Esta aplicación debe garantizar la integridad y disponibilidad de la información, facilitando su administración a través de un entorno accesible desde cualquier navegador web. 

## 3.2 Obejetivos Específicos

- Garantizar la seguridad y consistencia de los datos al permitir la creación, modificación y eliminación de ítems de forma sencilla, eficiente y controlada desde una interfaz web.

- Orquestar múltiples servicios Docker mediante docker-compose para desplegar de forma ágil y eficiente una API funcional dentro de un entorno LAMP, asegurando la modularidad, escalabilidad y facilidad de mantenimiento del sistema.

## 4. Análisis de la situación

Atendiendo a la creciente necesidad de las organizaciones de migrar sus servicios desde entornos locales hacia plataformas accesibles vía web, surge la propuesta de implementar herramientas de centralización y orquestación que brinden mayor seguridad, agilidad y eficiencia en sus procesos operativos. Esta solución plantea el uso de una API desarrollada en un entorno dockerizado, orientada a desplegar un sistema de control de inventario para organizaciones con equipos distribuidos geográficamente. Gracias a esta arquitectura, se facilita el acceso remoto a la información, garantizando su integridad, confiabilidad y disponibilidad.

Con la adopción de tecnologías de contenedorización como Docker, este proceso se optimiza considerablemente al permitir definir y desplegar todo el entorno de ejecución mediante archivos de configuración como Dockerfile y docker-compose.yml.

## 5. Conclusiones:

La implementación de un sistema de gestión de datos mediante arquitectura LAMP orquestada con Docker representa una solución moderna, eficiente y escalable para las organizaciones que buscan optimizar sus procesos internos. Esta plataforma no solo permite una administración centralizada y segura de la información, sino que también habilita el acceso remoto a los datos en tiempo real, mejorando la toma de decisiones y reduciendo errores humanos. La arquitectura LAMP sigue siendo una opción válida para aplicaciones web sencillas y funcionales, reducción de los costos al tener un ambiente web y no local.

## 6. Recomendaciones


Implementar controles de acceso y autenticación de usuarios

Realizar copias de seguridad periódicas de la base de datos

Ampliar la solución con roles de usuario (administrador, editor, solo lectura).

Escalar el sistema hacia arquitecturas más robustas como Docker Swarm o Kubernetes

## 7. Historias de Usuario 

### - Historia de usuario 1.

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Historias%20de%20usuario%20y%20casos%20de%20uso/Historia%20de%20usuario1.png)

### - Historia de usuario 2.

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Historias%20de%20usuario%20y%20casos%20de%20uso/Historia%20de%20usuario2.png)

### - Historia de usuario 3.

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Historias%20de%20usuario%20y%20casos%20de%20uso/Historia%20de%20usuario3.png)

### - Historia de usuario 4.

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Historias%20de%20usuario%20y%20casos%20de%20uso/Historia%20de%20usuario4.png)

### - Historia de usuario 5.

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Historias%20de%20usuario%20y%20casos%20de%20uso/Historia%20de%20usuario5.png)

### - Historia de usuario 6.

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Historias%20de%20usuario%20y%20casos%20de%20uso/Historia%20de%20usuario6.png)

### - Historia de usuario 7.

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Historias%20de%20usuario%20y%20casos%20de%20uso/Historia%20de%20usuario7.png)

### - Historia de usuario 8.

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Historias%20de%20usuario%20y%20casos%20de%20uso/Historia%20de%20usuario8.png)


## 7. Casos de Uso.

### - Caso de uso 1.
![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Historias%20de%20usuario%20y%20casos%20de%20uso/Caso%20de%20uso1.png)

### - Caso de uso 2.
![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Historias%20de%20usuario%20y%20casos%20de%20uso/Caso%20de%20uso2.png)

### - Caso de uso 3.
![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Historias%20de%20usuario%20y%20casos%20de%20uso/Caso%20de%20uso3.png)

### - Caso de uso 4.
![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Historias%20de%20usuario%20y%20casos%20de%20uso/Caso%20de%20uso4.png)

### - Caso de uso 5.
![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Historias%20de%20usuario%20y%20casos%20de%20uso/Caso%20de%20uso5.png)

### - Caso de uso 6.
![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Historias%20de%20usuario%20y%20casos%20de%20uso/Caso%20de%20uso6.png)

### - Caso de uso 7.
![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Historias%20de%20usuario%20y%20casos%20de%20uso/Caso%20de%20uso7.png)

### - Caso de uso 8.
![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Historias%20de%20usuario%20y%20casos%20de%20uso/Caso%20de%20uso8.png)

## 8. Manual de Administrador

Para ejecutar la aplicacion se requiere

- Instalar el subsistema linux de windos, en una terminal de powershell ejecute el comando wsl –install

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Imagenes/Imagen1.png)

- Instala la versio WSL 2 (WSL 2) 

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Imagenes/Imagen2.png)

- Descarga la distribucion de linus Ubuntu (última versión LTS)

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Imagenes/Imagen3.png)

- Valide la instalacion observando la version de docer con el comando docker version.

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Imagenes/Imagen4.png)

- Actualice el docker composse up en bash con el comando apt update.

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Imagenes/Imagen5.png)

- Observe los docker ejecutandose con el comando docker ps.

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Imagenes/Imagen%207.jpg)

- Navege hasta la ruta del proyecto donde se encuentra el archivo docker-compose.yml y ejecute el comando docker compose up -d para inicar el despliegue de los contenedores.

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Imagenes/Imagen6.jpg)

- Observe que los docker se esten ejecutando en el docker desktop.
  
![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Imagenes/Imagen%208.jpg)

- Inicie sesion en docker hub con el comando docker login, se solicitara usuario y contraseña de docker hub.

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Imagenes/Imagen%209.jpg)

- Valide las imagenes de los docker.

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Imagenes/Imagen%2010.jpg)

- Utilice el comando docker tag para darle a su imagen un nombre que incluya su nombre de usuario de Docker Hub, el nombre del repositorio y, opcionalmente, una etiqueta.

-Docker 1.

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Imagenes/Imagen%2011.jpg)

-Docker 2.

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Imagenes/Imagen%2012.jpg)

-Docker 3.

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Imagenes/Imagen%2013.jpg)

-Utilice el comando docker push seguido del nombre de la imagen etiquetada, para subir las imagenes al docker hub.

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Imagenes/Imagen%2014.jpg)

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Imagenes/Imagen15.jpg)

- Observe que se cuentan con las nuevas imagenes subidas a docker hub con el comando docker images.

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Imagenes/Imagen16.jpg)

- imagenes en el docker desktop.

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Imagenes/Imagen17.jpg)

- Ingrese a la aplicacion desde un navegador web a la apliacion http://localhost

  ![login](https://github.com/user-attachments/assets/f7a02e2d-a946-425c-a316-70eace22733c)


## 9. Diagrama de Despliegue

- Los componentes del despliegue son:
- Frontend Web: HTML + Bootstrap - cliente.
- Backend PHP: lógica en index.php  CRUD.
- Base de Datos MySQL: conexión vía mysqli_connect('db',...).
- Servidor Web Apache.


![despliegue](https://github.com/user-attachments/assets/50914a05-6c4c-4adc-a7b7-61500cb3b474)

## 10. Analisis de vulnerabilidades


## 11. Mockups.

### * Login

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Mockups/Mockup%201%20Login.jpg)

### * Plataforma

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/Grupo4/Mockups/Mockup%202%20Plataforma.jpg)


****
