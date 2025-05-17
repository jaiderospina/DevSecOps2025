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
