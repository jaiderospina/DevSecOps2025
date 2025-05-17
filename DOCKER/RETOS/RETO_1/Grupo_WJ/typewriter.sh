#!/bin/bash

# mensaje=${mensaje:-"¡Hola desde un contenedor Docker animado en la terminal!"}
# velocidad=${velocidad:-0.05}


# Solicita al usuario el mensaje
read -p "Escribe el mensaje que deseas mostrar: " mensaje

# Solicita la velocidad
read -p "Escribe la velocidad (por ejemplo 0.05): " velocidad

for ((i=0; i<${#mensaje}; i++)); do
  echo -n "${mensaje:$i:1}"
  sleep $velocidad
done

echo ""
