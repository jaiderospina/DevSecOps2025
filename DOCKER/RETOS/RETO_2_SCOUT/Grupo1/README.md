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


### Tambien Puedes ver informacion del analisis usuando Docker Desktop

-Una forma cómoda de administrar tanta información o incluso filtrarla es a través de Docker Desktop: En esta ocasión analizamos una imagen llamada phpmyadmin/phpmyadmin:latest , donde observamos  un cuadro que nos indica  que tenemos 5 vulnerabilidades Altas, 12 vulnerabilidades Medias, 59 bajas y 1 no especificada.

![Analisis con docker scout](https://github.com/jaiderospina/DevSecOps2025/blob/main/DOCKER/RETOS/RETO_2_SCOUT/Grupo1/docker%20scout.png)

-Desde allí, dispone de diferentes vistas, como imágenes, paquetes y vulnerabilidades, que le ayudan a analizar todos los datos como prefiera. 

-Puedes navegar utilizando las pestañas y revisar cada una de las recomendaciones individualmente:

![image](https://github.com/user-attachments/assets/8e1b6907-bd2c-44f8-a5e2-8b992ab18f91)

Sin embargo, analizar las vulnerabilidades es solo una parte de la ecuación. Dado que el objetivo real es remediarlas, aquí es donde las recomendaciones de Docker Scout resultan útiles.

## docker scout recommendations Comando

-Una de las características clave de Docker Scout son las recomendaciones que ofrece para corregir cada CVE, lo que, en definitiva, le ahorra tiempo. Solo tiene que ejecutar el comando docker scout recommendations, como este:

```bash
docker scout recommendations local://<DOCKER_HUB_ORG>/scout-demo:v1  >_
```

Como alternativa, puede utilizar las banderas --only-refresho --only-updatepara mostrar solo recomendaciones de actualización o actualización de la imagen base.

Al igual que con los comandos anteriores, también puede revisar las recomendaciones con Docker Desktop. Para ello, simplemente seleccione "Recomendaciones para la imagen base" :

## Integantes Grupo 1:

- Juan Pablo Ramírez Gutiérrez
- Johanny Castro
- Jhon Pinto
- Edwin Herrera
- Heriberto Tirado

- [Ver repositorio de Docker Hub](https://hub.docker.com/repository/docker/jrami1519/animacion-texto/general){:target="_blank"}
- [Ver repositorio de Docker Hub](https://hub.docker.com/repository/docker/heribertotiradopinzon/vulnerable-image/general){:target="_blank"}

