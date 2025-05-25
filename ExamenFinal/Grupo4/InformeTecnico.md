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

## 2. Historias de Usuario

🧍‍♂️ Usuario final (operador del sistema)
1. Como usuario del sistema, quiero registrar nuevos ítems con su respectiva información para mantener actualizado el inventario de manera sencilla y rápida.

Criterios de aceptación:

El formulario de registro valida que todos los campos obligatorios estén completos antes de enviar.

Al enviar, el sistema guarda correctamente el ítem en la base de datos.

El sistema muestra un mensaje de éxito al registrar un ítem nuevo.

En caso de error (datos inválidos o fallos de conexión), se muestra un mensaje claro de error.

El nuevo ítem aparece en la lista actualizada de ítems tras el registro.

2. Como usuario del sistema, quiero modificar los datos de un ítem existente (producto y valor) para corregir errores o actualizar información sin afectar otros registros.

Criterios de aceptación:

El sistema permite seleccionar un ítem existente para editar.

El formulario de edición valida que los datos ingresados sean correctos y completos.

Al guardar cambios, la base de datos se actualiza solo para el ítem seleccionado.

El sistema muestra un mensaje de confirmación tras la modificación exitosa.

La lista de ítems refleja la actualización inmediatamente.

3. Como usuario del sistema, quiero eliminar ítems del sistema para mantener el inventario limpio y evitar datos obsoletos.

Criterios de aceptación:

El usuario puede seleccionar el ítem a eliminar por su ID o desde la lista.

El sistema solicita confirmación antes de eliminar un ítem.

Al confirmar, el ítem es eliminado de la base de datos.

El sistema muestra un mensaje de éxito tras eliminar el ítem.

La lista de ítems ya no muestra el ítem eliminado.

4. Como usuario del sistema, quiero visualizar todos los ítems existentes en una tabla organizada para tener una vista general del inventario y facilitar la toma de decisiones.

Criterios de aceptación:

La tabla muestra los campos principales: ID, nombre, cédula, producto y valor.

Los datos se actualizan dinámicamente tras cualquier operación (crear, modificar, eliminar).

La tabla es fácil de leer y navegar, con formato claro y ordenado.

En caso de que no haya datos, se muestra un mensaje indicando que no hay ítems registrados.

🧑‍💻 Administrador del sistema
1. Como administrador del sistema, quiero desplegar y configurar todos los servicios del sistema mediante Docker para asegurar un entorno reproducible, escalable y fácil de mantener.

Criterios de aceptación:

El entorno Docker está definido mediante archivos Dockerfile y docker-compose.yml.

Se pueden levantar todos los servicios con un solo comando (docker-compose up).

Los servicios (Apache/PHP, MariaDB, phpMyAdmin) inician correctamente y se comunican entre sí.

El sistema es accesible desde el navegador tras desplegar los servicios.

2. Como administrador del sistema, quiero contar con una herramienta gráfica como phpMyAdmin para gestionar y consultar la base de datos de forma visual y rápida.

Criterios de aceptación:

phpMyAdmin está desplegado como un servicio Docker separado y accesible vía navegador.

Se puede iniciar sesión con las credenciales configuradas para gestionar la base de datos.

Permite visualizar, editar y realizar consultas a las tablas sin problemas.

El acceso a phpMyAdmin está protegido por credenciales.

3. Como administrador del sistema, quiero realizar copias de seguridad periódicas de la base de datos para garantizar la disponibilidad de la información ante fallos o pérdidas de datos.

Criterios de aceptación:

Existen procedimientos o scripts definidos para realizar backups automáticos de la base de datos.

Las copias de seguridad se almacenan en una ubicación segura y accesible.

Se verifica que las copias de seguridad puedan ser restauradas correctamente.

El proceso de backup puede ser ejecutado manualmente o programado automáticamente.


## 3. Manual de Administrador

## 4. Diagrama de Despliegue

