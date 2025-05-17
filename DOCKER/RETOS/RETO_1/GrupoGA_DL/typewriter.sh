#Procesar argumentos para extraer la velocidad
for arg in "$@"; do
  if [[ "$arg" == --velocidad=* ]]; then
    velocidad="${arg#*=}"
    set -- "${@/$arg}"
  fi
done

#Pedir velocidad al usuario (aceptar solo valores numéricos)
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

#Obtener el mensaje
if [ -n "$1" ]; then
  mensaje="$1"
elif [ -n "$MENSAJE" ]; then
  mensaje="$MENSAJE"
else
  read -p "Escribe un mensaje: " mensaje
fi

#Mostrar el mensaje letra por letra con la velocidad indicada
echo -n "El mensaje es: "
for ((i=0; i<${#mensaje}; i++)); do
  echo -n "${mensaje:$i:1}"
  sleep "$velocidad"
done

echo ""

