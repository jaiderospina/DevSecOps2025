# Reto: Máquina de Escribir

### Integrantes:

German GonzalezDiana Mahecha

### Descripción del reto:

Simula una animación de escritura en la terminal.

Este proyecto es una máquina de escribir que solicita interacción con el usuario.

Solicita dos valores: Mensaje y velocidad.

## Ciclo de desarrollo del microservicio

Este documento describe el ciclo de desarrollo para crear, probar y desplegar el microservicio "Máquina de Escribir" en un contenedor Docker. A lo largo del ciclo, se abordarán los pasos de **desarrollo**, **pruebas**, **despliegue** y **mejoras**

## **1.Desarrollo del Microservicio**

### 1.1 **Escribir el Script de la Máquina de Escribir**

- Crear el archivo `typewriter.sh` que realiza la animación en la terminal.
- El script debe aceptar un **mensaje**, una **velocidad** y mostrar el texto de forma animada.

```bash

for arg in "$@"; do
  if [[ "$arg" == --velocidad=* ]]; then
    velocidad="${arg#*=}"
    set -- "${@/$arg}"
  fi
done


if [ -z "$velocidad" ]; then
  while true; do
    read -p "Ingresa la velocidad (solo números): " velocidad
    if [[ "$velocidad" =~ ^[0-9]*\.?[0-9]+$ ]]; then
      break
    else
      echo "Valor inválido. Por favor ingresa solo números."
    fi
  done
fi


if [ -n "$1" ]; then
  mensaje="$1"
elif [ -n "$MENSAJE" ]; then
  mensaje="$MENSAJE"
else
  read -p "Escribe un mensaje: " mensaje
fi

echo -n "El mensaje es: "
for ((i=0; i<${#mensaje}; i++)); do
  echo -n "${mensaje:$i:1}"
  sleep "$velocidad"
done

echo ""

```

## **2.Construir dockerfile**

```bash


FROM alpine:latest

RUN apk add --no-cache bash

COPY typewriter.sh /typewriter.sh
RUN chmod +x /typewriter.sh

CMD ["/typewriter.sh"]

```

## **3.Construir imagen**

```bash

docker build -t animacion-texto .


```
### **Ejecutar**

```bash

docker run --rm animacion-texto

```
##  **4.Pruebas**

Se realizan pruebas manuales para asegurar:

*El mensaje se muestra correctamente

*La velocidad se ajusta conforme a la variable de entorno VELOCIDAD

*El contenedor se comporta de acuerdo con las entradas interactivas

##  **4.Despliegue en docker Hub**

Una vez que la imagen esté probada, se sube a Docker Hub para que esté disponible públicamente o para compartirla con otros usuarios.

*Iniciar sesión en Docker Hub:

```bash


docker login

```
*Etiquetar la imagen:

```bash


docker tag animacion-texto dianamahecha12/maquina-escribir_dl:latest

```
*Subir la imagen a Docker Hub:

```bash


docker push dianamahecha12/maquina-escribir_dl

```