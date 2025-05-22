## INTEGRANTES DEL GRUPO 4
- Daniel Castro
- Leonardo Delgadillo
- John Alejandro Buitrago
- Geovanny Pedraza
  
# ¿Qué es Docker Scout?

Docker Scout es una herramienta que facilita el escaneo de imágenes locales en busca de vulnerabilidades y permite comprender las dependencias de las aplicaciones. Esta característica está diseñada para mejorar la seguridad de la cadena de suministro de software al analizar imágenes y compilar un inventario de componentes(SBOM), que se compara con una base de datos de vulnerabilidades actualizada.

## ¿Cómo se usa?

Requisitos

1. Debes tener Docker instalado
   
https://www.docker.com/products/docker-desktop

3. Debes tener Docker Desktop habilitado con Docker Scout

Docker Scout está integrado desde Docker Desktop v4.17+.

Asegúrate de tener sesión iniciada en Docker Desktop con tu cuenta Docker Hub.


![image](https://github.com/jaiderospina/DevSecOps2025/blob/main/DOCKER/RETOS/RETO_2_SCOUT/GRUPO%204./LOGIN_DOCKER.jpg?raw=true)

3. Visual Studio Code instalado
   
https://code.visualstudio.com/

5. Extensión de Docker en visua Code

# Pasos para usar Docker Scout desde VS Code

 1. Abre tu proyecto en VS Code
Debe contener un Dockerfile y/o una imagen Docker construida.

 2. Abre la extensión Docker en el panel lateral izquierdo

Haz clic en el icono de Docker en la barra lateral izquierda de VS Code e nstall

![image](https://github.com/jaiderospina/DevSecOps2025/blob/main/DOCKER/RETOS/RETO_2_SCOUT/GRUPO%204./EXTENSION_DOCKER_VS_CODE.jpg?raw=true)

3. Analiza una imagen con Scout
4. 
Ve a la sección Imágenes en el panel de Docker en VS Code.

Haz clic derecho sobre una imagen que ya hayas construido.

Selecciona "Analyze with Docker Scout".



