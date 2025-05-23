# RETO No 1. Máquina de escribir.
# INTEGRANTES DEL GRUPO 4.
- Daniel Castro
- Leonardo Delgadillo
- John Alejandro Buitrago
- Geovanny Pedraza

  
![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/main/DOCKER/RETOS/RETO_1/Grupo%204/Imagenes/fotografia-completa-maquina-escribir_1048944-6928565.avif)

## Descripción.
Se quiere mejorar el script desarrollado en clase "maquinaescribir".
El contenedor trabajado en clase muestra un texto predefinido que se imprime a una velocidad fija de 0.5 y genera el efecto de escritura en máquina de escribir en la consola.

El contenedor resultante para el reto es uno que permite al usuario interactuar ingresando los datos del mensaje y modificando la velocidad de animación, la cual reproduce la escritura simulando una máquina de escribir en la terminal.


## Características 
- Pasar el mensaje como variable de entorno (-e MENSAJE="Hola mundo").
- Cambiar la velocidad (-e VELOCIDAD=0.1).
- Hacer que el script lea argumentos o interactúe con el usuario.

## Como usar esta imagen 

### Paso 1. Crea el script Bash.
Crea un archivo llamado typewriter.sh

- Usuando el siguiente codigo:

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

- Marca este archivo como ejecutable:
chmod +x escribe_mensaje.sh

### Paso 2. Crea el Dockerfile.
Crea un archivo llamado Dockerfile (sin extensión):

FROM alpine:latest
RUN apk add --no-cache bash
COPY typewriter.sh /typewriter.sh
RUN chmod +x /typewriter.sh
CMD ["/typewriter.sh"]
Variables de entorno

### Paso 3. Crea la estructura de archivos en tu proyecto.
tuproyecto/

│

├── Dockerfile

└── escribe_mensaje.sh

### Paso 4. Construye la imagen desde VS Code o terminal.
Abre una terminal en la carpeta del proyecto y ejecuta:
docker build -t mensaje-lento .

### Paso 5. Ejecuta el contenedor.
docker run -it --rm leondg1408/animacion-texto

