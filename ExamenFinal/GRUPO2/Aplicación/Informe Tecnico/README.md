<h1 align="center">🔐 Informe Técnico Proyecto DevSecOps: GLPI + MariaDB + Telegram Bot</h1>

Este documento resume de forma estructurada los elementos clave del proyecto basado en la gestión de tickets con GLPI, una base de datos MariaDB y un chatbot integrado vía Telegram, todo orquestado mediante Docker Compose.

---

## 1. Informe Ejecutivo

<details>
<summary> Ver Informe</summary>

**Nombre del Proyecto:**  
Proyecto DevSecOps: GLPI + MariaDB + Telegram Bot

**Fecha:**  
Mayo de 2025

---

## Objetivo General

Desplegar una plataforma de gestión de soporte basada en GLPI (v10.0.18) en una instancia de GCP, conectada a una base de datos MariaDB y a un microservicio de bot de Telegram que permita consultar tickets.

---

## Objetivos Específicos

1. Implementar un entorno contenerizado con Docker y Docker Compose para la orquestación completa de servicios en una instancia de **Google Cloud Platform (GCP)**..
2. Permitir que los usuarios consulten casos mediante el chatbot y reciban asistencia automática a través de la conexión con GLPI.
3. Asegurar el entorno con mecanismos de control de acceso robustos, desde el diseño del sistema.
4. Asegurar el entorno con buenas prácticas **DevSecOps**, incluyendo análisis de vulnerabilidades, escaneo de imágenes y uso de variables seguras.

---

## Alcance del Proyecto

- **Despliegue de infraestructura** con tecnologías de contenedores (Docker).
- Automatización con CI/CD para pruebas, construcción e implementación.
- Documentación técnica, diagramas de arquitectura y manual de administrador.
- Aplicación del ciclo de vida DevSecOps con enfoque en la seguridad desde el diseño.
- Supervisión inicial del funcionamiento del bot y GLPI con logs y registros.

---

## Arquitectura del Sistema

- **Front-end web**: Interfaz de GLPI accesible desde el navegador.
- **Back-end**: GLPI ejecutándose en contenedor.
- **Base de Datos**: MariaDB ejecutándose en contenedor separado.
- **Microservicio**: Chatbot Telegram basado en (Python).
- **Infraestructura**: Docker Compose desplegado en una instancia de Ubuntu Server en GCP.
- **Seguridad**: Uso de archivos `.env`, tokens protegidos, control de acceso y escaneo de contenedores.

---

## Seguridad y DevSecOps

- **Integración temprana de seguridad** (Shift Left) en historias de usuario.
- Uso de herramientas como **Docker Scout** y **Snyk** para análisis de vulnerabilidades.
- Contenedores construidos desde imágenes oficiales y seguras.
- Separación lógica de servicios y persistencia de datos usando volúmenes.
- Implementación futura sugerida de autenticación de dos factores (2FA) y monitoreo de seguridad continuo.

---

## Resultados Esperados

- Reducción en los tiempos de gestión de tickets por integración con Telegram.
- Mejora en la trazabilidad y control de las solicitudes.
- Mayor confianza en la infraestructura gracias a prácticas DevSecOps aplicadas.
- Escalabilidad asegurada por el uso de contenedores y posibilidad de integración con otros servicios.

---

## Conclusión

Este proyecto permite tener una solución robusta, automatizada y segura para la gestión de tickets, integrando tecnología moderna y prácticas de seguridad alineadas con los estándares actuales. El enfoque modular basado en contenedores permite escalar y mantener el sistema con agilidad, facilitando la adopción de mejoras continuas en el marco de un modelo DevSecOps.

</details>

---

## 2. Historias de Usuario

<details>
<summary> Ver Historias</summary>

| ID   | Historia de Usuario                                                                 | Prioridad |
|------|---------------------------------------------------------------------------------------|-----------|
| US01 | Como usuario, quiero iniciar sesión con autenticación MFA para proteger mi cuenta.   | Alta      |
| US02 | Como técnico, quiero ver tickets desde Telegram para poder atenderlos rápidamente.   | Alta      |
| US03 | Como administrador, quiero una base de datos separada del contenedor de GLPI.        | Media     |
| US04 | Como equipo, quiero que el despliegue sea reproducible y automatizado.               | Alta      |

</details>

---

## 3. Manual del Administrador

<details>
<summary> Ver Instrucciones</summary>

### Requisitos:

- Docker y Docker Compose
- Token del bot de Telegram
- `.env` configurado

### Pasos de Despliegue:

```bash
git clone https://github.com/jyrodriguezg-1/glpiDevSecOps.git
cd glpiDevSecOps
cp .env.example .env  # Edita con tus credenciales
docker-compose up -d --build
```

### Acceso:

- GLPI: `http://localhost:8080`
- Bot: responde en Telegram tras recibir comandos

</details>

---

## 4. Diagramas de Despliegue

<details>
<summary> Ver Diagrama Lógico</summary>

![Diagrama de Despliegue](./images/Despliegue.png)

</details>

---