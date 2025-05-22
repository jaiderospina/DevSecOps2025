# Docker Scout

### Tabla de Contenido

- [¿Qué es Docker Scout?](#qué-es-docker-scout)
- [Instalación de Docker Scout](#instalación-de-docker-scout)
- [Analisis de Vulnerabilidades desde Docker Hub](#analisis-de-vulnerabilidades-desde-docker-hub)

## Qué es DockerScout

Docker Scout es una solución para mejorar proactivamente la seguridad de su cadena de suministro de software. Analiza sus imágenes, compila un inventario de componentes (SBOM) y compara con una base de datos de vulnerabilidades actualizada para identificar debilidades de seguridad.

## Instalación de Docker Scout

Para instalar la última versión del complemento, ejecute los siguientes comandos:

```bash
curl -fsSL https://raw.githubusercontent.com/docker/scout-cli/main/install.sh -o install-scout.sh
sh install-scout.sh
```

## Descargar el contenedor desde Docker Hub

Ya con Scout descargado, descargue el contenedor para ejecutar un analisis de seguridad sobre el.

```bash
docker pull jrami1519/animacion-texto
```

## Ejecutar Analisis de Vulnerabilidades

Para ejecutar el analisis en el contenedor, basta con ejecutar el comando:

```bash
scout scan --mage jrami1519/animacion-texto
```

## Analisis de Vulnerabilidades desde Docker Hub

### Iniciar sesion en Docker Hub

- Selecciona el reposiorio de tu contenedor
- En la opcion de sttings, activa la opcion **Advanced image analysis with Docker Scout**
- Docker Inmediatamente escaneará el repositorio en busca de vulnerabilidades

![Analisis con docker scout](https://i.ibb.co/JFgZYw3x/Screenshot-from-2025-05-19-09-24-31.png)

## Escaneo de vulnerabilidades con Scout:
![image](https://github.com/user-attachments/assets/4832c87d-f832-4f22-8871-0f5be17f1956)
![image](https://github.com/user-attachments/assets/47ab0a0b-7bcb-42b7-994c-2a525c134447)


### 1. CVE-2024-10963. 
Esta vulnerabilidad afecta al módulo pam_access y se debe a un manejo inadecuado de tokens en el archivo de configuración access.conf, que son interpretados erróneamente como nombres de host. 
- Impacto. Permite a los atacantes eludir las restricciones de acceso falsificando nombres de host, lo que puede resultar en acceso no autorizado a servicios o terminales específicos.
- Solución. Para mitigar esta vulnerabilidad, se recomienda actualizar a una versión corregida de pam_access.  Para actualizar a través del gestor de paquetes utilizar los siguientes comandos: 
sudo apt-get update
sudo apt-get install --only-upgrade libpam-modules
![image](https://github.com/user-attachments/assets/7ae6452f-7dce-4ea1-87cd-8a890f87980b)


### 2. CVE-2024-10041. 
Esta vulnerabilidad afecta al módulo PAM (Pluggable Authentication Modules) y se debe a un almacenamiento inseguro de información sensible en la memoria.
- Impacto. Permite a un atacante local entrenar el predictor de bifurcaciones para ejecutar una cadena ROP (Return-Oriented Programming) de manera especulativa, lo que podría resultar en la filtración de contraseñas almacenadas en archivos como /etc/shadow durante los procesos de autenticación.
- Solución. Para mitigar esta vulnerabilidad, se recomienda actualizar a una versión corregida de PAM. Para actualizar a través del gestor de paquetes utilizar los siguientes comandos: 
sudo apt-get update
sudo apt-get install --only-upgrade libpam-modules

![image](https://github.com/user-attachments/assets/ee332ea6-c06d-43c4-8db4-0247827958d5)

https://hub.docker.com/repository/docker/johanycp/mi-animacion/general

## Integrantes Grupo 1:

- Juan Pablo Ramírez Gutiérrez
- Johany Castro
- Jhon Pinto
- Edwin Herrera
- Heriberto Tirado

- [Ver repositorio de Docker Hub](https://hub.docker.com/repository/docker/jrami1519/animacion-texto/general){:target="_blank"}
- [Ver repositorio de Docker Hub](https://hub.docker.com/repository/docker/heribertotiradopinzon/vulnerable-image/general){:target="_blank"}
- [Ver repositorio de Docker Hub](https://hub.docker.com/r/edwinh25/animacion-texto/tags){:target="_blank"}

