# Plataforma Contenerizada de Gestión de Incidentes con GLPI y Telegram Bot

## Descripción

Este proyecto implementa un entorno contenerizado con Docker que integra:

- Base de datos MySQL.
- Herramienta de gestión de incidencias GLPI.
- Chatbot para Telegram para la creación y seguimiento de casos.

## Estructura

- `docker-compose.yml`: Orquesta los servicios.
- `src/`: Código fuente del chatbot y Dockerfile.
- `mysql/`: Scripts para base de datos.
- `docs/`: Documentación.
- `config/`: Configuraciones y variables de entorno.
- `tests/`: Pruebas automatizadas.

## Instrucciones de uso

1. Clonar el repositorio.
2. Crear archivo `.env` con las variables de entorno (ejemplo en `config/telegram_config.env`).
3. Ejecutar `docker-compose up -d` para levantar todos los servicios.
4. Acceder a GLPI en `http://localhost:8080`.
5. Interactuar con el bot de Telegram para crear y gestionar incidencias.

## Requisitos

- Docker y Docker Compose instalados.
- Cuenta de Telegram y token del bot.
- Configuración de GLPI API.


