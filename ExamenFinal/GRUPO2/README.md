# Plataforma contenerizada de gestión de Incidentes con GLPI y Telegram Bot

## Descripción

Este proyecto implementa un entorno contenerizado con Docker que integra:

- Base de datos MySQL.
- Herramienta de gestión de incidencias GLPI.
- Chatbot para Telegram para la creación y seguimiento de casos.

## Estructura

| Carpeta / Archivo | Contenido y propósito                                                                 |
|-------------------|----------------------------------------------------------------------------------------|
| `docs/`           | Documentación, diagramas, manuales, especificaciones.                                 |
| `docker/`         | Dockerfile(s), docker-compose.yml, scripts de despliegue contenerizado.               |
| `src/`            | Código fuente del chatbot (por ejemplo, scripts Python) u otros programas.            |
| `mysql/`          | Scripts para crear y poblar la base de datos MySQL.                                   |
| `tests/`          | Pruebas unitarias o de integración, validaciones.                                     |
| `config/`         | Archivos de configuración, variables de entorno, settings de GLPI, Telegram.          |
| `scripts/`        | Scripts para automatización, despliegue o mantenimiento.                              |
| `README.md`       | Presentación y guía principal del proyecto.                                           |
| `LICENSE`         | Licencia de uso (MIT, Apache, etc.).                                                  |
| `.gitignore`      | Archivos y carpetas a ignorar en Git (ej: `.env`, `/data`).                           |


## Instrucciones de uso

1. Clonar el repositorio.
2. Crear archivo `.env` con las variables de entorno (ejemplo en `config/telegram_config.env`).
3. Ejecutar `docker-compose up -d` para levantar todos los servicios.
4. Acceder a GLPI en `http://35.224.115.142/front/config.form.php`.
5. Interactuar con el bot de Telegram para crear y gestionar incidencias.

## Requisitos

- Docker y Docker Compose instalados.
- Cuenta de Telegram y token del bot.
- Configuración de GLPI API.

## Autores

- Diana Maecha
- German Gonzalez
- Wilmer Briceño
- Jairo Rodriguez
- Carlos David


