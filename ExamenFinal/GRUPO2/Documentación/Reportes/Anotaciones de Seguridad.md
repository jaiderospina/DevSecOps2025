<a href="https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/GRUPO2/Documentaci%C3%B3n/README.md#-3-fase-de-integraci%C3%B3n-de-seguridad" target="_blank">
  <img src="https://img.shields.io/badge/Regresar-Fase%202-blue" alt="Regresar: Fase 2" />
</a>

## GLPI V10.0.18

Para ver las anotaciones de seguridad del codigo oficial de GLPI version 10.0.18 **Link de consulta** [Clic aquí](https://github.com/glpi-project/glpi/releases/tag/10.0.18)

## glpi-bot/app.py

```bash  
# glpi-bot/app.py
"""
Pequeña API REST que expone:
  • GET  /ping          → health-check (200 OK)
  • POST /ticket        → crea un ticket en GLPI vía REST

Se asume que las variables de entorno:
  GLPI_API_URL, GLPI_APP_TOKEN y GLPI_USER_TOKEN
apuntan al endpoint REST de GLPI, token de aplicación y token de sesión.
"""

import logging
import os
from datetime import datetime

import requests
from fastapi import FastAPI, HTTPException
from pydantic import BaseModel  # Uso de Pydantic para validación de entrada

# ──────────────────────────────────────────────
# Configuración básica de logging
# ──────────────────────────────────────────────
log_file = os.getenv("BOT_LOG_FILE", "/app/logs/glpi-bot.log")
logging.basicConfig(
    filename=log_file,
    level=logging.INFO,
    format="%(asctime)s [%(levelname)s] %(message)s",
)

# ✔️ Seguridad: Se define un archivo de log que puede auditar acciones del bot.
# ⚠️ Recomendación: Rotar y proteger los logs para evitar fuga de datos sensibles.

# ──────────────────────────────────────────────
# FastAPI
# ──────────────────────────────────────────────
api = FastAPI(title="GLPI Bot", version="1.0")

# ✔️ Seguridad: Uso de FastAPI permite validar automáticamente el tipo y formato
# de los datos entrantes, ayudando a prevenir ataques como inyección.

class TicketIn(BaseModel):
    titulo: str
    descripcion: str
    entidad_id: int | None = None  # Opcional: asignar a entidad

# ✔️ Seguridad: Uso de Pydantic fuerza la validación de tipos antes de procesar los datos.
# ⚠️ Recomendación: implementar sanitización adicional si estos campos se inyectan en GLPI.

def _get_headers() -> dict:
    """Cabeceras requeridas por la API de GLPI"""
    return {
        "Content-Type": "application/json",
        "App-Token": os.getenv("GLPI_APP_TOKEN", ""),
        "Session-Token": os.getenv("GLPI_USER_TOKEN", ""),
    }

# ✔️ Seguridad: Uso de variables de entorno para manejar secretos (tokens).
# ⚠️ Recomendación: validar que las variables no estén vacías antes de usarlas.

@api.get("/ping")
def ping() -> dict:
    """Endpoint de salud"""
    return {"status": "ok", "timestamp": datetime.utcnow().isoformat()}

# ✔️ Seguridad: endpoint limitado a monitoreo. No expone datos sensibles.

@api.post("/ticket")
def crear_ticket(payload: TicketIn) -> dict:
    """Crea un ticket sencillo en GLPI"""
    url_base = os.getenv("GLPI_API_URL")
    if not url_base:
        logging.error("GLPI_API_URL no está configurada")
        raise HTTPException(status_code=500, detail="Configuración incompleta")

    try:
        # Sanitización básica: registrar inputs para trazabilidad
        logging.info(f"Creando ticket: {payload.titulo[:30]}...")

        response = requests.post(
            f"{url_base}/Ticket/",
            headers=_get_headers(),
            json={
                "input": {
                    "name": payload.titulo,
                    "content": payload.descripcion,
                    "entities_id": payload.entidad_id or 0
                }
            },
            timeout=10  # ✔️ Seguridad: evitar bloqueos por llamadas largas
        )

        if response.status_code != 201:
            logging.warning(f"Error al crear ticket: {response.text}")
            raise HTTPException(status_code=500, detail="Error al crear ticket")

        return {"status": "ticket creado", "respuesta": response.json()}
    except Exception as e:
        logging.error(f"Excepción al crear ticket: {e}")
        raise HTTPException(status_code=500, detail="Excepción en el servidor")

# ✔️ Seguridad:
# - Manejo de errores con logging para auditoría.
# - Límite de tiempo en la solicitud HTTP (timeout).
# ⚠️ Recomendación: agregar autenticación/autorización al endpoint POST /ticket

 ```

## Archivo: docker-compose.yml

```bash 
#version: "3.8"

services:
  glpi-db:
    image: ${REGISTRY:-docker.io}/${IMAGE_DB:-jyrodriguezg95/glpi-db}:latest
    container_name: glpi-db
    restart: unless-stopped
    environment:
      MYSQL_DATABASE:     ${MYSQL_DATABASE}
      MYSQL_USER:         ${MYSQL_USER}
      MYSQL_PASSWORD:     ${MYSQL_PASSWORD}
      MYSQL_ROOT_PASSWORD: ${MYSQL_ROOT_PASSWORD}

    # ⚠️ Seguridad: Nunca almacenes contraseñas sensibles en el archivo .env sin protección.
    # ✔️ Recomendación: Usa un gestor de secretos (ej. AWS Secrets Manager o HashiCorp Vault).
    # ⚠️ Variables como MYSQL_ROOT_PASSWORD deben tener mínimo 12 caracteres y uso de símbolos.

    volumes:
      - glpi_db_data:/var/lib/mysql  # ✔️ Persistencia segura, pero asegurar control de acceso.

  glpi-app:
    image: ${REGISTRY:-docker.io}/${IMAGE_APP:-jyrodriguezg95/glpi-app}:latest
    container_name: glpi-app
    restart: unless-stopped
    depends_on:
      - glpi-db
    ports:
      - "8080:80"

    # ⚠️ Seguridad: el puerto 8080 queda expuesto públicamente.
    # ✔️ Recomendación: proteger con firewall o proxy inverso (ej. NGINX con HTTPS).

    env_file:
      - .env  # ✔️ Separación de configuración por entorno.

    volumes:
      - glpi_files:/var/www/html/glpi/files

    # ⚠️ Seguridad: asegúrate de que glpi_files tenga permisos de escritura controlados.
    # ✔️ Validar que no se pueda subir y ejecutar archivos maliciosos desde este volumen.

  glpi-bot:
    image: ${REGISTRY:-docker.io}/${IMAGE_BOT:-jyrodriguezg95/glpi-bot}:latest
    container_name: glpi-bot
    restart: unless-stopped
    depends_on:
      - glpi-app
    env_file:
      - .env
    ports:
      - "8000:8000"

    # ⚠️ Seguridad: el bot expone el puerto 8000. Si se conecta desde fuera, debe tener autenticación.
    # ✔️ Recomendación: añadir autenticación básica o token JWT en FastAPI.

volumes:
  glpi_db_data:
  glpi_files:
  ```
## glpi-app/Dockerfile

```bash
# Imagen base confiable y mantenida
FROM ubuntu:22.04

# ⚠️ Seguridad: Asegura que todas las variables de entorno sensibles estén protegidas y no expuestas en el contenedor final.
ENV DEBIAN_FRONTEND=noninteractive \
    TZ=Etc/UTC \
    GLPI_VERSION=10.0.18

# Instalación mínima para reducir superficie de ataque
RUN apt-get update \
 && apt-get install -y --no-install-recommends \
      apt-transport-https \
      ca-certificates \
      gnupg \
      lsb-release \
      software-properties-common \
      curl \
      wget \
 && rm -rf /var/lib/apt/lists/*  # ✔️ Elimina caché para reducir tamaño y posibles fugas de datos

# Añade repositorios PPA de PHP y Nginx
RUN add-apt-repository -y ppa:ondrej/php \
 && add-apt-repository -y ppa:ondrej/nginx

# ✔️ Recomendación: Añadir un usuario no root para correr los servicios (actualmente no se especifica)
```

## glpi-db/Dockerfile

```bash
# Imagen oficial de MariaDB con soporte a largo plazo
FROM mariadb:lts

# ⚠️ Seguridad: Asegura el uso de contraseñas fuertes y evita usarlas en texto plano
# ⚠️ Si bien se expone el puerto, docker-compose maneja internamente las redes

EXPOSE 3306  # ✔️ Solo se expone internamente si se gestiona con redes privadas
```
## .env.example

```bash
# ────────────────  Base de Datos  ────────────────
MYSQL_DATABASE=glpi
MYSQL_USER=GlpiDev
MYSQL_PASSWORD=Dennis2025++                 # ⚠️ Usar variables encriptadas o secretos en producción
MYSQL_ROOT_PASSWORD=cambia_esto_ahora       # ⚠️ Frase clara de que debe ser cambiada ✔️ Buen recordatorio

# ✔️ Recomendación: estos datos NO deben subirse al repositorio real sin gitignore o cifrado

# ────────────────  GLPI App  ────────────────
TZ=America/Bogota

# ────────────────  Bot  ────────────────
GLPI_API_URL=http://35.224.115.142:8080/apirest.php   # ⚠️ Mejorar con HTTPS si es posible
GLPI_APP_TOKEN=coloca_tu_app_token                    # ⚠️ Nunca subir tokens reales a repositorios
GLPI_USER_TOKEN=coloca_tu_user_token

# ────────────────  Workflow (secrets) ────────────────
# DOCKERHUB_USERNAME=jyrodriguezg
# DOCKERHUB_TOKEN=********
# GCP_SERVICE_ACCOUNT_KEY={...json...}  # ⚠️ En producción usar GitHub Secrets
# GCP_PROJECT=tu-proyecto
# GCP_ZONE=southamerica-west1-a
# GCP_INSTANCE=nombre-vm
```

## .github/workflows/ci-cd.yml

```bash
name: CI/CD – Build, Push & Deploy

on:
  push:
    branches: [master]  # ⚠️ Considerar trabajar sobre 'main' o ramas controladas

env:
  REGISTRY: docker.io
  IMAGE_APP: ${{ secrets.DOCKERHUB_USERNAME }}/glpi-app
  IMAGE_DB:  ${{ secrets.DOCKERHUB_USERNAME }}/glpi-db
  IMAGE_BOT: ${{ secrets.DOCKERHUB_USERNAME }}/glpi-bot
  # ✔️ Buen uso de secretos para evitar exposición de credenciales

jobs:
  build-and-push:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v4

      - name: Set IMAGE_DATE
        run: echo "IMAGE_DATE=$(date +'%Y%m%d')" >> $GITHUB_ENV

      - name: Login to Docker Hub
        uses: docker/login-action@v3
        with:
          username: ${{ secrets.DOCKERHUB_USERNAME }}
          password: ${{ secrets.DOCKERHUB_TOKEN }}

      - name: Build & push app
        uses: docker/build-push-action@v5
        # ✔️ Acciones modernas y seguras de GitHub Actions para publicar imágenes

```

<a href="https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/GRUPO2/Documentaci%C3%B3n/README.md#-3-fase-de-integraci%C3%B3n-de-seguridad" target="_blank">
  <img src="https://img.shields.io/badge/Regresar-Fase%202-blue" alt="Regresar: Fase 2" />
</a>