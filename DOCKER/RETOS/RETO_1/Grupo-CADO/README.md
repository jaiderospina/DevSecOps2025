# Trabajo Realizado

## 👤 1. Integrante
- **Carlos Andres David Ovalle**

## 📋 2. Descripción del Microservicio
El microservicio **animación-texto** es un contenedor Docker diseñado para mostrar un mensaje animado en la terminal utilizando el efecto de máquina de escribir. Permite que el usuario pase un mensaje y una velocidad de animación mediante variables de entorno o entradas interactivas. El microservicio ofrece una experiencia visual en la que el mensaje se imprime carácter por carácter, a una velocidad especificada por el usuario. Este microservicio puede ser utilizado en cualquier sistema que soporte Docker y se ejecuta dentro de un contenedor que se puede interactuar fácilmente.

## 📋 3. Desarrollo del Microservicio

El desarrollo del microservicio se realizó en varias fases:

1. **🖥️ Creación del script bash (typewriter.sh)**:
   - Se desarrolló un script `typewriter.sh` que toma un mensaje y lo imprime en la terminal, caracter por caracter, con un retraso configurable entre cada carácter, simulando el efecto de una máquina de escribir.
   - La velocidad de la animación es configurable, lo que permite al usuario controlar la rapidez con que se muestra el mensaje.

2. **🐧 Configuración del Dockerfile**:<br>
   ![Texto alternativo](https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwKfNI17BW7H0QGgFG4RFSYCWn8ACkZyWfeA&s)
   - Se utilizó **Alpine Linux** como base para el contenedor, por su ligereza y eficiencia.<br>
   ![Texto alternativo](https://i.blogs.es/c6b206/alpine/450_1000.webp)

   - Se instaló **Bash** dentro del contenedor para permitir la ejecución del script.
   - El script `typewriter.sh` fue copiado al contenedor y se le otorgaron permisos de ejecución (`chmod +x`).
   - Se configuró el contenedor para que ejecute el script al iniciarse, utilizando el comando `CMD`.

3. **Interacción con el usuario**:
   - El script permite al usuario ingresar tanto el mensaje como la velocidad de animación a través de la terminal, de forma interactiva. Si el usuario no proporciona estos valores, el script solicita los datos.
   - Además, se añadió validación para asegurar que la velocidad esté dentro del rango adecuado (0-1).

4. **Pruebas y correcciones**:
   - Se realizaron pruebas para garantizar que la animación se ejecutara correctamente, y se realizaron ajustes para manejar posibles errores, como la validación de la entrada de la velocidad y la mejora de la interacción con el usuario.
   - Se implementó un flujo de trabajo que también permite pasar parámetros a través de la línea de comandos o mediante variables de entorno al ejecutar el contenedor, lo que proporciona flexibilidad al usar el microservicio.

5. **Publicación del microservicio en Docker Hub**:
   - El contenedor fue empaquetado y publicado en Docker Hub, lo que facilita su uso y distribución. Esto permite que cualquier persona pueda descargar y ejecutar el microservicio fácilmente.

### Herramientas utilizadas:
- **Bash**: Para el desarrollo del script de animación.
- **Docker**: Para crear y contenerizar el microservicio.
- **Alpine Linux**: Como base para la imagen de Docker.
- **Docker Hub**: Para la publicación y distribución del microservicio.

### Instrucciones para usar el microservicio:
1. **Ejecutar el microservicio interactivo**:
   ```bash
   docker run --rm -it animacion-texto

### Recursos subidos a DockerHub:
1. **Servicio 1, sin solicitud al usuario**:
   ```bash
   https://hub.docker.com/r/carloso2713/animacion-texto
2. **Servicio 2, con solicitud pór comando a los usuarios**:
   ```bash
   https://hub.docker.com/r/carloso2713/animacion-texto2
