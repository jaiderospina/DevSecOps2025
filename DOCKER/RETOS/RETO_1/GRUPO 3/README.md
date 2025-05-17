# Máquina de Escribir Dockerizada

Este proyecto es un contenedor Docker que simula el efecto "máquina de escribir" en tu terminal, mostrando un mensaje de texto con un efecto animado. El contenedor permite al usuario personalizar tanto el mensaje como la velocidad de la animación mediante variables de entorno o interacción directa. Además, ofrece un menú interactivo para facilitar la personalización.

## 🚀 Características

- **Efecto de máquina de escribir**: El texto se muestra como si estuviera siendo escrito en tiempo real.
- **Personalización**: Puedes personalizar tanto el mensaje como la velocidad de la animación.
- **Menú interactivo**: Permite cambiar las opciones de configuración a través de un menú interactivo si no se proporcionan variables de entorno.
- **Facilidad de uso**: Simplemente ejecuta el contenedor para obtener el efecto, o personaliza tu experiencia con opciones avanzadas.

## 🛠️ Requisitos

- Docker (instalado en tu máquina)
- Conexión a Internet (para descargar la imagen de Docker Hub)

## 📦 ¿Cómo usar esta imagen?

### 1. Ejecuta el contenedor con el mensaje predeterminado:

Para mostrar el mensaje predeterminado sin ninguna personalización, usa el siguiente comando:

```bash
docker run --rm juanc411/maquina_de_escribir

2. Ejecuta el contenedor en modo interactivo:
Si prefieres tener un control completo sobre el mensaje y la velocidad, puedes ejecutar el contenedor en modo interactivo. Esto te permitirá elegir opciones a través de un menú:

docker run -it --rm juanc411/maquina_de_escribir

Cuando ejecutas el contenedor de esta forma, verás un menú interactivo con las siguientes opciones:

Mostrar mensaje predeterminado.

Ingresar mensaje personalizado.

Cambiar la velocidad de la animación.

Ingresar tanto el mensaje como la velocidad personalizados.

Salir.

3. Usar variables de entorno
Mensaje personalizado:
Si deseas mostrar un mensaje diferente al predeterminado, puedes hacerlo utilizando la variable de entorno MENSAJE:

docker run --rm -e MENSAJE="¡Hola desde Docker Hub!" juanc411/maquina_de_escribir

Velocidad personalizada:
La variable de entorno VELOCIDAD permite controlar la velocidad de la animación. El valor predeterminado es 0.05. Puedes ajustarlo entre 0.1 y 1 para acelerar o ralentizar el efecto:

docker run --rm -e VELOCIDAD=0.1 juanc411/maquina_de_escribir
Ambas opciones juntas:
Si deseas personalizar tanto el mensaje como la velocidad, puedes establecer ambas variables al mismo tiempo:

docker run --rm -e MENSAJE="¡Este es un mensaje personalizado!" -e VELOCIDAD=0.1 juanc411/maquina_de_escribir
4. ¿Qué pasa si no paso ninguna opción?
Si no se pasan las variables de entorno MENSAJE ni VELOCIDAD, el contenedor te pedirá que ingreses un mensaje y una velocidad a través del menú interactivo.


4. ¿Qué pasa si no paso ninguna opción?
Si no se pasan las variables de entorno MENSAJE ni VELOCIDAD, el contenedor te pedirá que ingreses un mensaje y una velocidad a través del menú interactivo.

🔧 Variables de Entorno
El contenedor acepta las siguientes variables de entorno:

MENSAJE: El mensaje que se mostrará (por defecto: ¡Hola desde un contenedor Docker animado en la terminal!).

VELOCIDAD: La velocidad de la animación (por defecto: 0.05, valores recomendados entre 0.1 y 1).

📦 Construcción de la imagen
Si deseas construir la imagen localmente, sigue estos pasos:

Clona este repositorio:

git clone https://github.com/tu_usuario/maquina_de_escribir.git
cd maquina_de_escribir

Construye la imagen con Docker:

docker build -t juanc411/maquina_de_escribir .

🚀 Despliegue y uso en Docker Hub
La imagen Docker está disponible en Docker Hub. Para usarla de manera rápida:

docker pull juanc411/maquina_de_escribir

🛠️ Contribuciones
Si deseas contribuir a este proyecto, siéntete libre de hacer un fork, enviar un pull request o reportar problemas en el issue tracker.

¡Gracias por usar este proyecto! 🎉

---

### 📋 **Pasos para agregar el `README.md` en tu repositorio de GitHub**:

1. Si aún no tienes un repositorio en GitHub, crea uno nuevo.
2. Abre tu repositorio en GitHub y haz clic en **"Add file" > "Create new file"**.
3. Escribe `README.md` como el nombre del archivo.
4. Pega el contenido del `README.md` en el área de texto.
5. Haz clic en **Commit new file**.

---

Con este `README.md` ahora tendrás una documentación clara, profesional y completa en tu repositorio de GitHub. Puedes seguir actualizándolo con nuevas funcionalidades a medida que desarrollas el proyecto. ¡Espero que te sirva! 😄
