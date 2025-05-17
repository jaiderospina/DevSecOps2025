mensaje="$1"
velocidad="$2"
if [ -z "$mensaje" ]; then
  read -p "Escribe el mensaje: " mensaje
fi

if [ -z "$velocidad" ]; then
  read -p "Velocidad entre caracteres (en segundos, por ejemplo 0.05): " velocidad
  velocidad=${velocidad:-0.05}
fi

for ((i=0; i<${#mensaje}; i++)); do
  echo -n "${mensaje:$i:1}"
  sleep "$velocidad"
done

echo ""
