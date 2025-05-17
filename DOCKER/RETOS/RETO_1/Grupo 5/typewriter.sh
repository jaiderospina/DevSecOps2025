#!/bin/bash

# Usa variable de entorno o argumento, o solicita al usuario si no hay ninguno
mensaje=${MENSAJE:-$1}
velocidad=${VELOCIDAD:-$2}

# Si no se proporcionó mensaje, pide al usuario que lo escriba
if [ -z "$mensaje" ]; then
  read -p "Escribe el mensaje que quieres mostrar: " mensaje
fi

# Si no se proporcionó velocidad, pide al usuario que lo ingrese (valor por defecto 0.05)
if [ -z "$velocidad" ]; then
  read -p "Velocidad entre caracteres (ej. 0.1): " velocidad
  velocidad=${velocidad:-0.05}
fi

# Imprime carácter por carácter
for ((i=0; i<${#mensaje}; i++)); do
  echo -n "${mensaje:$i:1}"
  sleep "$velocidad"
done

echo ""
