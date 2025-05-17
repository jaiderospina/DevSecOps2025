# Integrantes del Grupo:
- Heriberto Tirado
- Johanny Castro
- Edwin Herrera
- Jhon Pinto
- Juan Pablo ramirez

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

# Opción 1: Usando Docker directamente

1. Construye la imagen:
   ```bash
   docker build -t maquina-escribir .
   ```

2. Ejecuta el contenedor:
   ```bash
   docker run -it maquina-escribir
   ```

# Opción 2: Usando Docker Compose

1. Construye y ejecuta:
   ```bash
   docker-compose up --build
   ```

## Instrucciones de uso

1. Cuando se ejecute el contenedor, se te pedirá ingresar un mensaje para animar.
2. Luego, ingresa la velocidad de la animación (en segundos entre caracteres, por ejemplo: 0.05).
3. El programa mostrará tu mensaje con el efecto de máquina de escribir.

## Estructura de archivos

- `typewriter1.sh`: Script principal que realiza la animación
- `Dockerfile`: Configuración para construir la imagen Docker
- `docker-compose.yml`: Configuración para Docker Compose

## Archivo typewriter1.sh
```bash

#!/bin/bash

# Valores predeterminados
DEFAULT_MENSAJE="¡Hola desde un contenedor Docker animado en la terminal!"
DEFAULT_VELOCIDAD=0.05

echo "Crea un mensaje de bienvenida"
read mensaje
echo "Asigna la velocidad del mensaje, caracter por caracter. La velocidad debe estar en un rango de 0.05 s a 1 s."
read velocidad

if [ -z "$mensaje" ]; then
    mensaje=$DEFAULT_MENSAJE
fi
if [ -z "$velocidad" ]; then
    velocidad=$DEFAULT_VELOCIDAD
fi

for ((i=0; i<${#mensaje}; i++)); do
    echo -n "${mensaje:$i:1}"
    sleep $velocidad
done
```



## Archivo DockerFile
```bash

FROM alpine:latest

RUN apk add --no-cache bash

WORKDIR /app
COPY typewriter.sh /app/typewriter.sh
RUN chmod +x /app/typewriter.sh

# No establecemos valores predeterminados aquí para permitir que el usuario los proporcione

CMD ["/bin/bash", "/app/typewriter.sh"]
```
 

## Notas

- Asegúrate de usar nombres en minúsculas para las imágenes Docker
- El contenedor debe ejecutarse en modo interactivo (`-it`) para permitir la entrada del usuario

## Licencia

Este proyecto está disponible como código abierto bajo los términos de la licencia MIT.
