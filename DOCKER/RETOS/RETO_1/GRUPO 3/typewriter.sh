#!/bin/bash

# Función para mostrar el mensaje con la animación
mostrar_mensaje() {
  mensaje="$1"
  velocidad="$2"
  
  for ((i = 0; i < ${#mensaje}; i++)); do
    echo -n "${mensaje:$i:1}"
    sleep "$velocidad"
  done
  echo ""
}

# Menú interactivo
echo "=== Menú de Configuración de la Maquina de Escribir ==="
echo "1. Mostrar mensaje predeterminado."
echo "2. Ingresar mensaje personalizado."
echo "3. Cambiar la velocidad de la animación."
echo "4. Ingresar mensaje y velocidad personalizados."
echo "5. Salir."

# Leer la opción elegida
read -p "Selecciona una opción (1-5): " opcion

# Definir las variables por defecto
mensaje="${MENSAJE:-¡Hola desde un contenedor Docker animado en la terminal!}"
velocidad="${VELOCIDAD:-0.05}"

case $opcion in
  1)
    echo "Mostrando el mensaje predeterminado..."
    mostrar_mensaje "$mensaje" "$velocidad"
    ;;
  2)
    read -p "Ingresa el mensaje a mostrar: " mensaje
    mostrar_mensaje "$mensaje" "$velocidad"
    ;;
  3)
    read -p "Ingresa la velocidad (por defecto es 0.05, usa un valor entre 0.1 a 1): " velocidad
    mostrar_mensaje "$mensaje" "$velocidad"
    ;;
  4)
    read -p "Ingresa el mensaje a mostrar: " mensaje
    read -p "Ingresa la velocidad (por defecto es 0.05, usa un valor entre 0.1 a 1): " velocidad
    mostrar_mensaje "$mensaje" "$velocidad"
    ;;
  5)
    echo "¡Hasta luego!"
    exit 0
    ;;
  *)
    echo "Opción no válida. Saliendo..."
    exit 1
    ;;
esac
