# Integrantes del Grupo:
Heriberto Tirado
Johanny Castro
Edwin Herrera
Jhon Pinto
Juan Pablo ramirez

# Máquina de Escribir - Animación de Texto en Terminal

Esta imagen Docker crea una animación de texto tipo máquina de escribir en la terminal.

## Descripción

Este contenedor ejecuta un script bash que muestra un mensaje de texto definido por el usuario, con una velocidad carácter por carácter configurable, simulando el efecto de una máquina de escribir.

## Características

- Basada en Alpine Linux (imagen ligera)
- Mensaje y velocidad configurables
- Interacción con el usuario para personalizar la experiencia

## Uso

```bash
# Construir la imagen
docker build -t tuusuario/maquina-escribir .

# Ejecutar el contenedor
docker run -it tuusuario/maquina-escribir

## Direccion p+ublica del repositoru¡io
https://hub.docker.com/repository/docker/jrami1519/animacion-texto/general
