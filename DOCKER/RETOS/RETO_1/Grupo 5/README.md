
<img src="https://co.isotools.us/wp-content/uploads/2013/07/UNIMINUTO.jpg" alt="uniminuto" width="800" height="300">


## 🧑‍🎓 Autores Grupo 5

- Calvera Chaparro Yesith Alonso 👾
- Gutierrez Florez Alfredo Jose 🪗
- Cruz Rojas Andres Felipe 🤖
- Mena Vargas Yeikin Andres 🪖
- Rodriguez Arguello Angel Eduardo 👑

---
# Máquina de escribir ⌨️

## Overview de código


Crear archivo *`typewriter.sh`* con el siguiente comando

```
cat << 'EOF' > typewriter.sh
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
EOF
```


Crear archivo *`DockerFile`* con el siguiente comando

```
# Crea la imagen base usando Alpine Linux (ligera y rápida)
FROM alpine:latest

# Instala Bash ya que Alpine solo trae sh por defecto
RUN apk add --no-cache bash

# Copia el script desde el sistema anfitrión al contenedor
COPY typewriter.sh /typewriter.sh

# Da permisos de ejecución al script
RUN chmod +x /typewriter.sh

# Define el comando que se ejecutará por defecto al iniciar el contenedor
CMD ["/typewriter.sh"]

```

Ahora se contruye la imagen Docker con el comando

```
docker build -t animacion-texto .

```
 Explicación del comando:

 - **docker build:** Construye una imagen desde el Dockerfile.
 - **-t animacion-texto:** Le da el nombre animacion-texto a la imagen.
 - **".":** Indica que la construcción se realiza en el directorio actual (donde están el Dockerfile y el typewriter.sh).

Después de esto, ya se puede ejecutar con interacción.




## ¿Cómo ejecutar?
#### Variables de entorno

Para ejecutar con variables de entorno se usa el siguiente código:

```
docker run --rm -e MENSAJE="Hola mundo" -e VELOCIDAD=0.1 animacion-texto

```

- En la variable **MENSAJE**, entre las comillas se pone el mensaje que se quiere mostrar, para el ejemplo se usa "Hola mundo".
- En la variable **VELOCIDAD**, después del "=" se pone la velocidad, que está expresada en segundos, para el ejemplo se usa 0.1 segundos o lo que es igual 10 milisegundos.
- Cada letra del **MENSAJE** se mostrará cada tiempo que se haya puesto en **VELOCIDAD**

#### Modo interactivo

```
docker run -it --rm animacion-texto

```

- **-run:** ejecuta la imagen **animacion-texto**.
- **-it:** ejecuta en modo interactivo.

Aparecerá un mensaje que indica el texto que queremos escribir,  allí pondremos el mensaje que deseamos ejecutar. Enseguida nos pide el tiempo en segundos en el cual queremos que aparezca cada carácter del mensaje, ponemos un valor y ejecutamos.

Nos aparecerá el mensaje que escribimos y cada caracter aparecerá segùn el tiempo que digitamos.
