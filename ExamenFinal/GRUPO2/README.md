# Objetivos del Proyecto

- Implementar un entorno contenerizado con Docker que integre:
  - Una base de datos MySQL.
  - La herramienta de gestión de incidencias GLPI.
  - Un chatbot que funcione a través de Telegram.
- Permitir que los usuarios generen casos mediante el chatbot y reciban asistencia automática a través de la conexión con GLPI.
- Asegurar el entorno con mecanismos de control de acceso robustos, desde el diseño del sistema.

# Roles del Proyecto

- **Desarrollador Backend**: Encargado de la lógica del chatbot, conexión con GLPI y control de la base de datos.
- **Ingeniero DevOps**: Responsable de contenerización con Docker, integración y despliegue.
- **Especialista en Seguridad**: Garantiza el cumplimiento de requisitos de seguridad (autenticación, cifrado, control de acceso).

# Alcance del Proyecto

## Sí incluye:

- Contenerización de los servicios (MySQL, GLPI, chatbot).
- Conexión del bot a Telegram.
- Integración entre el bot y GLPI para creación/seguimiento de casos.
- Seguridad básica (tokens, firewalls, control de acceso).

## No incluye:

- Escalado automático a múltiples instancias.
- Integración con plataformas diferentes a Telegram.
- Soporte para múltiples idiomas del bot (fase futura).

# Métricas de Éxito

- 100% de los casos creados por Telegram se reflejan correctamente en GLPI.
- Tiempo promedio de respuesta del bot < 2 segundos.
- Tasa de error del chatbot < 5% en generación de tickets.
- Implementación sin vulnerabilidades críticas detectadas (según escaneo de seguridad).
- Accesos no autorizados bloqueados en ambiente de prueba (según logs de firewall).

# Requisitos de Seguridad (Shift Left)

## Desde el diseño:

- Validación de entrada/salida entre bot y GLPI.
- Comunicación cifrada (HTTPS, uso de tokens o JWT).

## Durante el desarrollo:

- Análisis de dependencias con herramientas como Trivy o Snyk.
- Revisión de código (linters, escáneres de vulnerabilidades).

## Antes del despliegue:

- Pruebas de penetración básicas.
- Auditoría de roles y accesos.
- Políticas de red seguras (puertos mínimos abiertos).

## En ejecución:

- Monitoreo con alertas de acceso sospechoso.
- Logs centralizados y cifrados.



# Estrategia de Gestión de Riesgos

## Introducción

Este documento presenta la gestión de riesgos del proyecto de implementación de GLPI con base de datos MariaDB, con conexión a un chatBot mediante un API REST, contenerizados con Docker sobre infraestructura de Google Cloud, conforme a la metodología MAGERIT.

## Alcance

- Implementación de GLPI como sistema de gestión de tickets.
- Uso de contenedores Docker para GLPI, MariaDB y el chatBot.
- Despliegue sobre Google Cloud en instancia Ubuntu/Linux.
- Comunicación mediante API REST y uso de un chatbot para interacción.

## Metodología seleccionada: MAGERIT

MAGERIT (Metodología de Análisis y Gestión de Riesgos de los Sistemas de Información) se utiliza para estructurar el análisis de riesgos mediante la identificación de activos, amenazas e impactos.

De acuerdo con esta metodología se detallan las fases de la gestión de riesgos:

---

## 1. Identificación de Activos

### 1.1 Inventario de Activos

| Nombre de Activo       | Tipo de Activo   | Descripción                          |
|------------------------|------------------|--------------------------------------|
| GLPI                   | Aplicación       | Sistema de gestión de tickets        |
| Base de datos MariaDB  | Datos/Información| Base de datos de GLPI                |
| Google Cloud           | Infraestructura  | Nube pública                         |
| Contenedores Docker    | Plataforma       | Entorno de ejecución contenerizado   |
| API REST               | Servicio         | Integración con servicios externos   |
| ChatBot                | Aplicación       | Aplicación para comunicación         |

### 1.2 Valoración de Activos

#### GLPI

| Impacto / Principio   | Confidencialidad | Integridad | Disponibilidad |
|-----------------------|------------------|------------|----------------|
| Económico             | Media            | Alta       | Alta           |
| Legal y regulatorio   | Alta             | Alta       | Media          |
| Reputacional          | Media            | Alta       | Alta           |
| Operacional           | Media            | Alta       | Alta           |

#### Base de Datos MariaDB

(Idéntica valoración que GLPI)

#### Google Cloud

| Impacto / Principio   | Confidencialidad | Integridad | Disponibilidad |
|-----------------------|------------------|------------|----------------|
| Económico             | Media            | Alta       | Alta           |
| Legal y regulatorio   | Media            | Alta       | Media          |
| Reputacional          | Media            | Alta       | Alta           |
| Operacional           | Media            | Alta       | Alta           |

#### Contenedores Docker

| Impacto / Principio   | Confidencialidad | Integridad | Disponibilidad |
|-----------------------|------------------|------------|----------------|
| Económico             | Media            | Alta       | Alta           |
| Legal y regulatorio   | Bajo             | Media      | Media          |
| Reputacional          | Media            | Media      | Alta           |
| Operacional           | Media            | Alta       | Alta           |

#### API REST

| Impacto / Principio   | Confidencialidad | Integridad | Disponibilidad |
|-----------------------|------------------|------------|----------------|
| Económico             | Media            | Media      | Media          |
| Legal y regulatorio   | Alta             | Alta       | Media          |
| Reputacional          | Media            | Media      | Media          |
| Operacional           | Media            | Alta       | Alta           |

#### ChatBot

| Impacto / Principio   | Confidencialidad | Integridad | Disponibilidad |
|-----------------------|------------------|------------|----------------|
| Económico             | Bajo             | Media      | Bajo           |
| Legal y regulatorio   | Media            | Media      | Bajo           |
| Reputacional          | Media            | Media      | Bajo           |
| Operacional           | Media            | Media      | Bajo           |

---

## 2. Identificación y Evaluación de Riesgos

### 2.1 Identificación de Riesgos y Vulnerabilidades

| Amenaza              | Activo Afectado     | Vulnerabilidad                           |
|----------------------|---------------------|-------------------------------------------|
| Acceso no autorizado | GLPI                | Ausencia de doble factor de autenticación |
| Pérdida de datos     | Base de datos MariaDB | Fallo de configuración o backup         |
| Fallo de contenedores| Contenedores Docker | Omisión de políticas de reinicio          |
| Fuga de datos        | API REST            | Ausencia de cifrado                       |
| Respuestas incorrectas| ChatBot            | Configuración o entrenamiento incorrecto  |

### 2.2 Valoración de Riesgos

| Amenaza              | Activo Afectado     | Probabilidad | Impacto | Riesgo |
|----------------------|---------------------|--------------|---------|--------|
| Acceso no autorizado | GLPI                | Alta         | Alto    | Alto   |
| Pérdida de datos     | MariaDB             | Media        | Alto    | Alto   |
| Fallo de contenedores| Docker              | Media        | Medio   | Medio  |
| Fuga de datos        | API REST            | Alta         | Medio   | Alto   |
| Respuestas incorrectas| ChatBot            | Baja         | Medio   | Bajo   |

---

## 3. Planes de Tratamiento

Periodo de aplicación: **3 semanas por riesgo**

| Riesgo                 | Plan de Acción - Mitigación                                                                 |
|------------------------|---------------------------------------------------------------------------------------------|
| Acceso no autorizado   | Implementación de MFA, validación de matriz de perfilamiento y monitoreo                   |
| Pérdida de datos       | Configuración de backups automáticos                                                       |
| Fallo de contenedores  | Políticas de reinicio en docker-compose (`restart: always`)                               |
| Fuga de datos          | Implementación de cifrado y validación de entradas                                          |
| Respuestas incorrectas | Supervisión de la configuración del ChatBot                                                 |

---

## 4. Seguimiento y Monitoreo

### 4.1 Revisión Trimestral de Planes de Acción

**Responsables y Acciones:**

- **Especialista en Seguridad**: Evaluar la eficacia de los controles.
- **Project Manager**: Supervisar cumplimiento de los plazos.
- **Equipo Técnico (DevOps y BackEnd)**: Aplicar controles, documentar evidencias.

**Actividades Trimestrales:**

- Revisión de riesgos activos.
- Análisis de desviaciones respecto al plan.
- Documentar nuevas acciones si los planes no son efectivos.

**Resultados Trimestrales:**

- Informe de plan de tratamiento de riesgos.
- Informe de valoración de activos.

---

## 5. Roles y Responsabilidades

### Project Manager

- Seguimiento de los planes y cumplimiento de plazos.
- Facilitar la comunicación técnica.

### Desarrollador Backend

- Aplicar buenas prácticas de desarrollo seguro.
- Validar autenticación y controles de acceso.

### Ingeniero DevOps

- Asegurar integración y despliegue continuo.
- Garantizar ejecución consistente y resistente a fallos de contenedores.


### Especialista en Seguridad

- Acompañar el proceso de gestión de riesgos.
- Supervisar implementación de controles.
- Comunicar recomendaciones de seguridad al equipo técnico.

# Fase 5: Operación y Monitoreo

La fase de operación y monitoreo tiene como objetivo asegurar la continuidad del servicio, la detección proactiva de incidentes, la respuesta oportuna ante brechas de seguridad y el cumplimiento constante de estándares y políticas. Esta fase debe estar completamente alineada con los objetivos de seguridad y sostenibilidad definidos desde el diseño del sistema.

---

## Documentos Principales

### 1. Runbooks de Respuesta a Incidentes

Documentos operativos que describen paso a paso cómo actuar frente a distintos escenarios de riesgo, con el objetivo de minimizar el impacto y restaurar los servicios rápidamente.

#### Ejemplos incluidos:

##### Contención de ransomware en contenedores Docker:
- Aislar el contenedor afectado del resto de la red (`docker network disconnect` o reglas de firewall).
- Detener el servicio mediante `docker stop`.
- Ejecutar verificación de integridad del volumen con checksums.
- Restaurar desde una copia de seguridad verificada.
- Notificar al equipo de seguridad.

##### Fallo en la conexión del chatbot con GLPI:
- Verificar logs de errores del bot (`docker logs bot_service`).
- Validar conectividad entre servicios internos (`docker exec` + `curl`).
- Reiniciar servicios de backend si aplica.
- Registrar la incidencia en el historial del sistema.

##### Acceso sospechoso desde IP no autorizada:
- Generar alerta en el sistema SIEM.
- Ejecutar bloqueo de IP en el firewall del contenedor o del host.
- Revisar logs de auditoría.
- Notificar al responsable de seguridad para evaluación forense.

---

### 2. Registros y Alertas de Seguridad

Implementación de un sistema de monitoreo continuo mediante herramientas SIEM que permitan recopilar, visualizar y analizar eventos del entorno en tiempo real.

#### Elementos configurados:

- **SIEM**: Splunk o ELK Stack

#### Logs capturados:
- Eventos de acceso y autenticación (chatbot, GLPI, MySQL).
- Errores de servicios en contenedores Docker.
- Actividad inusual del bot (mensajes no reconocidos, errores de conexión).
- Cambios en archivos de configuración.

#### Alertas automatizadas:
- Múltiples intentos fallidos de login.
- Acceso fuera de horario laboral.
- Generación de tickets con palabras clave críticas (e.g., “urgente”, “fallo masivo”).
- Escaladas de permisos o cambios en roles.

---

### 3. Informes de Cumplimiento Continuo

Mecanismo automatizado de verificación de cumplimiento con estándares de seguridad, utilizando herramientas que auditan la configuración del sistema periódicamente.

#### Herramientas sugeridas:
- **Chef InSpec**: para verificar que las configuraciones cumplen políticas definidas (cifrado, autenticación, puertos abiertos).
- **OpenSCAP** o **ComplianceAsCode**: para auditorías más detalladas.

#### Ejemplos de validaciones:
- Verificar que todas las conexiones a GLPI usen **HTTPS**.
- Confirmar que solo puertos necesarios estén abiertos en cada contenedor.
- Validar que los tokens **JWT** tengan expiración y cifrado fuerte.
- Asegurar que los **backups** estén en ubicación segura y sean verificables.
- Revisión automática de roles definidos en GLPI contra una plantilla aprobada.


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


