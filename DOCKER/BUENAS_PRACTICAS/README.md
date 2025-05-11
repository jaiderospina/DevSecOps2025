# Manual de Buenas Prácticas para Dockerfiles 
    Un Dockerfile es un archivo de texto que contiene las instrucciones para construir una imagen de Docker. Seguir buenas prácticas asegura imágenes más pequeñas, rápidas de construir y más fáciles de mantener.
    
---
    
## 1. Elige una Imagen Base Específica y Ligera
    
**Mala Práctica:**

```dockerfile
    FROM ubuntu
    RUN apt-get update && apt-get install -y python3
    WORKDIR /app
    COPY . /app
    CMD ["python3", "mi_aplicacion.py"]
````
    
**Buena Práctica:**
    
```dockerfile
    FROM python:3.9-slim-buster
    WORKDIR /app
    COPY requirements.txt .
    RUN pip install -r requirements.txt --no-cache-dir
    COPY . .
    CMD ["python", "mi_aplicacion.py"]
```
    
**Explicación:**

Usar imágenes base oficiales y específicas (como `python:3.9-slim-buster`) en lugar de imágenes genéricas (como `ubuntu`) reduce el tamaño de la imagen final. Las imágenes `slim` o `alpine` eliminan componentes innecesarios.
    
---
    
## 2. Minimiza el Número de Capas
    
Cada instrucción en un Dockerfile (`RUN`, `COPY`, `ADD`) crea una capa. Muchas capas aumentan el tamaño de la imagen.
    
**Mala Práctica:**
    
```dockerfile
    FROM ubuntu
    RUN apt-get update
    RUN apt-get install -y nginx
    RUN echo "Hola desde Docker" > /usr/share/nginx/html/index.html
```
    
**Buena Práctica:**
    
```dockerfile
    FROM ubuntu
    RUN apt-get update && apt-get install -y nginx && \
        echo "Hola desde Docker" > /usr/share/nginx/html/index.html
```
    
**Explicación:**
    Combina los comandos `RUN` en uno solo para reducir capas. El carácter `\` mejora la legibilidad de líneas largas.
    
---
    
## 3. Aprovecha el Caché de Docker
    
Docker reutiliza capas que no han cambiado. Coloca instrucciones que cambian con menos frecuencia al principio.
    
**Orden Recomendado de Instrucciones:**
    
```text
    FROM
    ARG
    COPY o ADD de dependencias
    RUN para instalar dependencias
    COPY o ADD del código
    RUN para construir la aplicación
    EXPOSE
    ENV
    USER
    WORKDIR
    CMD o ENTRYPOINT
```
    
**Ejemplo:**
    
```dockerfile
    FROM node:14
    WORKDIR /app
    COPY package*.json ./
    RUN npm install
    COPY . ./
    EXPOSE 3000
    CMD ["npm", "start"]
```
    
**Explicación:**
    Si solo cambias el código fuente, las capas de instalación de dependencias se reutilizan del caché.
    
---
    
## 4. Usa un Archivo `.dockerignore`
    
    Crea un archivo `.dockerignore` junto al Dockerfile para excluir archivos innecesarios del contexto de construcción.
    
    **Ejemplo de `.dockerignore`:**
    
    ```text
    node_modules
    .git
    .env
    Dockerfile
    docker-compose.yml
    ```
    
    ---
    
## 5. Evita Instalar Paquetes Innecesarios
    
    Instala solo lo que necesitas para reducir el tamaño de la imagen y mejorar la seguridad.
    
    **Mala Práctica:**
    
    ```dockerfile
    FROM ubuntu
    RUN apt-get update && apt-get install -y python3 vim curl wget
    ```
    
    **Buena Práctica:**
    
    ```dockerfile
    FROM python:3.9-slim-buster
    ```
    
    ---
    
## 6. Limpia Después de Instalar Paquetes
    
    Elimina archivos temporales y cachés en la misma instrucción `RUN`.
    
    **Ejemplo:**
    
    ```dockerfile
    FROM ubuntu
    RUN apt-get update && apt-get install -y --no-install-recommends \
        some-package && rm -rf /var/lib/apt/lists/*
    ```
    
    ---
    
## 7. Ejecuta Procesos como Usuario No Root
    
    Evita usar `root` para mayor seguridad. Crea y usa un usuario específico.
    
    **Ejemplo:**
    
    ```dockerfile
    FROM python:3.9-slim-buster
    RUN adduser --system --group myuser
    USER myuser
    WORKDIR /app
    COPY requirements.txt .
    RUN pip install -r requirements.txt --user --no-cache-dir
    COPY . .
    CMD ["python", "app.py"]
    ```
    
    ---
    
 ## 8. Usa Variables de Entorno
    
    Define variables de entorno que tu aplicación pueda usar.
    
    **Ejemplo:**
    
    ```dockerfile
    FROM python:3.9-slim-buster
    ENV FLASK_ENV=production
    ENV PORT=8080
    WORKDIR /app
    COPY . /app
    RUN pip install -r requirements.txt
    CMD ["flask", "run", "--port", "$PORT"]
    ```
    
    ---
    
 ## 9. Define `ENTRYPOINT` y `CMD` Claramente
    
    * `ENTRYPOINT`: comando principal.
    * `CMD`: argumentos por defecto o comando si no se proporciona otro.
    
    **Ejemplo:**
    
    ```dockerfile
    FROM ubuntu
    ENTRYPOINT ["/usr/sbin/nginx", "-g", "daemon off;"]
    CMD ["-c", "/etc/nginx/nginx.conf"]
    ```
    
    ---
    
 ## 10. Etiqueta tus Imágenes
    
    Usa `LABEL` para añadir metadatos.
    
    **Ejemplo:**
    
    ```dockerfile
    LABEL version="1.0"
    LABEL description="Imagen para la API de mi aplicación"
    LABEL maintainer="tu_correo@ejemplo.com"
    ```
    
 ---
    
 ## 11. Usa Construcciones Multi-Etapa
    
    Divide el proceso en etapas para obtener imágenes finales más ligeras.
    
    **Ejemplo (Go):**
    
    ```dockerfile
    # Etapa 1: Construcción
    FROM golang:1.16-alpine AS builder
    WORKDIR /app
    COPY go.mod go.sum ./
    RUN go mod download
    COPY . .
    RUN go build -o /out/app
    
    # Etapa 2: Imagen final
    FROM alpine:latest
    WORKDIR /app
    COPY --from=builder /out/app ./app
    EXPOSE 8080
    CMD ["./app"]
    ```
    
    ---
    
 ## 12. No Uses la Etiqueta `latest`
    
    Usa versiones específicas para garantizar reproducibilidad.
    
    **Mala Práctica:**
    
    ```dockerfile
    FROM ubuntu:latest
    ```
    
**Buena Práctica:**
    
    ```dockerfile
    FROM ubuntu:20.04
    ```
    
---
    

##**Resumen de Buenas Prácticas**
    
    ✅ Usa imágenes base específicas y ligeras
    ✅ Minimiza el número de capas
    ✅ Aprovecha el caché de Docker
    ✅ Usa un archivo `.dockerignore`
    ✅ Evita instalar paquetes innecesarios
    ✅ Limpia después de instalar paquetes
    ✅ Ejecuta los procesos como un usuario no root
    ✅ Usa variables de entorno
    ✅ Define `ENTRYPOINT` y `CMD` claramente
    ✅ Etiqueta tus imágenes
    ✅ Considera las construcciones multi-etapa
    ✅ No uses la etiqueta `latest`
    

 
    
