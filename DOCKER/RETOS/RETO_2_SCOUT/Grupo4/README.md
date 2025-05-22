## INTEGRANTES DEL GRUPO 4
•	Daniel Castro
•	Leonardo Delgadillo
•	John Alejandro Buitrago
•	Geovanny Pedraza

# ¿Qué es Docker Scout?

Docker Scout es una herramienta que facilita el escaneo de imágenes locales en busca de vulnerabilidades y permite comprender las dependencias de las aplicaciones. Esta característica está diseñada para mejorar la seguridad de la cadena de suministro de software al analizar imágenes y compilar un inventario de componentes(SBOM), que se compara con una base de datos de vulnerabilidades actualizada.
# ¿Cómo se usa?

## Requisitos

### 1. Debes tener Docker instalado

https://www.docker.com/products/docker-desktop
### 2. Debes tener Docker Desktop habilitado con Docker Scout

Docker Scout está integrado desde Docker Desktop v4.17+.
Asegúrate de tener sesión iniciada en Docker Desktop con tu cuenta Docker Hub.
![image](https://github.com/jaiderospina/DevSecOps2025/blob/main/DOCKER/RETOS/RETO_2_SCOUT/Grupo4/LOGIN_DOCKER.jpg?raw=)

### 3. Visual Studio Code instalado

https://code.visualstudio.com/

### 4. Extensión de Docker en visual Code

# Pasos para usar Docker Scout desde VS Code

### 1. Abre tu proyecto en VS Code}
Debe contener un Dockerfile y/o una imagen Docker construida.

### 2. Abre la extensión Docker en el panel lateral izquierdo

Haz clic en el icono de Docker en la barra lateral izquierda de VS Code e install

![image](https://github.com/jaiderospina/DevSecOps2025/blob/main/DOCKER/RETOS/RETO_2_SCOUT/Grupo4/EXTENSION_DOCKER_VS_CODE.jpg?raw=true)
 
### 3. Analiza una imagen con Scout

Por CLI colocamos el siguiente comando cn el nombre de la imágen que tengamos cargada en un nuestro Docker hub
docker scout quickview (nombre imágen)
En nuestro Caso
docker scout quickview gpedraza1/maquinaescribir

### 4. Resultado
 
- Docker Scout nos muestra:
- Número de vulnerabilidades
- Severidad (baja, media, alta, crítica)
- Paquetes afectados
- Recomendaciones
![image](https://github.com/jaiderospina/DevSecOps2025/blob/main/DOCKER/RETOS/RETO_2_SCOUT/Grupo4/SCAN_SCOUT_DOCKER.jpg?raw=true)
