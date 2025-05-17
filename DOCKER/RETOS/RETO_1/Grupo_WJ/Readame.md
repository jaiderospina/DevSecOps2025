# Resto 1 
# integrantes 
    Wilmer Rafael Briceño Camacho
    Jairo Yesid RTodriguez Gonzalez

# 🐳 Microservicio: Animación de Texto en la Terminal con Docker

Este microservicio es una imagen Docker basada en Alpine Linux que ejecuta un script interactivo para animar la escritura de texto en la terminal.  
El usuario ingresa un mensaje y una velocidad, y el texto se imprime letra por letra con un retardo personalizado, simulando una máquina de escribir.

---

## 1️⃣ Descripción del Microservicio

Este contenedor está diseñado para ejecutarse en modo interactivo.  
Su función principal es ofrecer una animación sencilla tipo "typewriter" en la terminal. El usuario interactúa proporcionando:

- ✏️ **Un mensaje personalizado**
- 🕒 **Una velocidad de impresión (en segundos)**

🔧 Tecnologías utilizadas:
- Sistema base: `alpine:latest`
- Shell: `bash` (instalado vía `apk`)

---

## 2️⃣ funcion del Script (`typewriter.sh`)

El script se encarga de pedir al usuario el mensaje y la velocidad de animación, y luego lo imprime carácter por carácter con la pausa definida.

# 1. Crear el script 

en un editor de texto como vsCode cree un archivo llamado typewrite.sh y guardelo con el siguiente codigo:

```bash
#!/bin/bash

# Solicita al usuario el mensaje
read -p "Escribe el mensaje que deseas mostrar: " mensaje

# Solicita la velocidad
read -p "Escribe la velocidad (por ejemplo 0.05): " velocidad

# Recorre el mensaje y lo imprime carácter por carácter
for ((i=0; i<${#mensaje}; i++)); do
  echo -n "${mensaje:$i:1}"
  sleep $velocidad
done

echo ""

```

# 2. Crear el Dockerfile

en un editor de texto como vsCode cree un archivo llamado docker file  y guardelo con el siguiente codigo:

```bash
FROM alpine:latest

# Instala bash
RUN apk add --no-cache bash

# Copia el script al contenedor
COPY typewriter.sh /typewriter.sh

# Da permisos de ejecución
RUN chmod +x /typewriter.sh

# Ejecuta el script por defecto
CMD ["/typewriter.sh"]
```
# 3. Construir la imagen Docker

```bash
docker build -t animacion-texto .
```

## ¿Qué hace?
**docker build:** Construye una imagen desde el Dockerfile.
**-t animacion-texto:** Le da el nombre animacion-texto a la imagen.
**.:** Indica que la construcción se realiza en el directorio actual (donde están el Dockerfile y el typewriter.sh).

# 4. Ejecuar el contenedor
```bash
docker run --rm -it animacion-texto
```
## ¿Qué hace?
**docker run:** Ejecuta un contenedor basado en la imagen.
**--rm:** Elimina el contenedor automáticamente cuando termina.
**-it:**  Combina dos opciones:
  - `-i` (interactivo): Mantiene la entrada estándar abierta.
  - `-t` (tty): Asigna una terminal para que puedas interactuar con el contenedor.
**animacion-texto:** Es la imagen que creamos antes.
**Resultado final:** Cuando ejecutas este comando, verás en tu terminal cómo se imprime el mensaje carácter por carácter, simulando una animación tipo máquina de escribir.


# 5. URL de la IMAGEN DockerHUB

**https://hub.docker.com/r/wrafaelbc/reto**
