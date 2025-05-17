# INTEGRANTES

- 

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

```

### 2. Ejecuta el contenedor en modo interactivo:

Si prefieres tener un control completo sobre el mensaje y la velocidad, puedes ejecutar el contenedor en modo interactivo. Esto te permitirá elegir opciones a través de un menú:

```bash
docker run -it --rm juanc411/maquina_de_escribir
```

### 3. Usar variables de entorno

#### Mensaje personalizado:

Si deseas mostrar un mensaje diferente al predeterminado, puedes hacerlo utilizando la variable de entorno `MENSAJE`:

```bash
docker run --rm -e MENSAJE="¡Hola desde Docker Hub!" juanc411/maquina_de_escribir
```
Velocidad personalizada:
La variable de entorno VELOCIDAD permite controlar la velocidad de la animación. El valor predeterminado es 0.05. Puedes ajustarlo entre 0.1 y 1 para acelerar o ralentizar el efecto:
```
docker run --rm -e VELOCIDAD=0.1 juanc411/maquina_de_escribir
```
Ambas opciones juntas:
Si deseas personalizar tanto el mensaje como la velocidad, puedes establecer ambas variables al mismo tiempo:
```
docker run --rm -e MENSAJE="¡Este es un mensaje personalizado!" -e VELOCIDAD=0.1 juanc411/maquina_de_escribir
```
### 4. ¿Qué pasa si no paso ninguna opción?

Si no se pasan las variables de entorno `MENSAJE` ni `VELOCIDAD`, el contenedor te mostrará un **menú interactivo** que te permitirá ingresar manualmente el mensaje y la velocidad deseada antes de ejecutar la animación.

---

## 🔧 Variables de Entorno

El contenedor acepta las siguientes variables de entorno para personalizar el comportamiento:

- **`MENSAJE`**: El mensaje que se mostrará.  
  _Por defecto_: `¡Hola desde un contenedor Docker animado en la terminal!`

- **`VELOCIDAD`**: La velocidad de la animación (en segundos por carácter).  
  _Por defecto_: `0.05`  
  _Valores recomendados_: entre `0.1` (más lento) y `1` (muy lento)

---

## 📦 Construcción de la imagen

Si deseas construir la imagen localmente en tu máquina, sigue estos pasos:

1. Clona este repositorio:

```bash
git clone https://github.com/tu_usuario/maquina_de_escribir.git
cd maquina_de_escribir

