
<h1 align="center">🔐 Proyecto DevSecOps: GLPI + MariaDB + Telegram Bot</h1>

<p align="center">
  <img src="https://img.shields.io/badge/Status-En%20Desarrollo-lightgrey" />
  <img src="https://img.shields.io/badge/Security-DevSecOps-blue" />
  <img src="https://img.shields.io/badge/GLPI-v10.0.18-green" />
  <img src="https://img.shields.io/badge/Bot-Telegram-lightgrey" />
  <img src="https://img.shields.io/badge/CI/CD-GitHub-orange" />
</p>

---

## Descripción del Proyecto

Este proyecto implementa una solución de gestión de tickets basada en GLPI, una base de datos MariaDB, y un microservicio de bot de Telegram conectado vía API REST. Toda la solución está dockerizada y desplegada en Google Cloud Platform (GCP), integrando seguridad en cada fase del ciclo de vida del desarrollo.

---

## 🔍 1. Fase de Planificación y Diseño

La fase de planificación y diseño establece las bases del proyecto, definiendo los objetivos, alcance, roles y requisitos funcionales y de seguridad desde el inicio (Shift Left). En esta etapa se diseñan las arquitecturas técnica y de seguridad, se modelan amenazas y se determinan las políticas que regirán la gestión del riesgo, garantizando que la seguridad esté integrada en todo el ciclo de vida del sistema.

<details>
<summary><b>Project Charter</b></summary>


## 1. Objetivos
  ### Objetivo General

    Desplegar una plataforma de gestión de soporte basada en GLPI (v10.0.18) en una instancia de GCP, conectada a una base de datos MariaDB y a un microservicio de bot de Telegram que permita consultar tickets.

  ### Objetivos Especificos

    1. Implementar un entorno contenerizado con Docker y Docker Compose pra la aplicaión.
    2. Permitir que los usuarios consulten casos mediante el chatbot y reciban asistencia automática a través de la conexión con GLPI.
    3. Asegurar el entorno con mecanismos de control de acceso robustos, desde el diseño del sistema.

## 2. Roles del Proyecto

  - **Desarrollador Backend**: Encargado de la lógica del chatbot, conexión con GLPI y control de la base de datos.
  - **Ingeniero DevOps**: Responsable de contenerización con Docker, integración y despliegue.
  - **Especialista en Seguridad**: Garantiza el cumplimiento de requisitos de seguridad (autenticación, cifrado, control de acceso).

## 3. Alcance del Proyecto

### 3.1 Sí incluye:

  - Despliegue mediante Docker Compose.
  - Instalación automática desde el repositorio oficial de GLPI.
  - Integración con bot de Telegram como interfaz de consulta.
  - Proceso automatizado mediante CI/CD en GitHub Actions.
  - Seguridad y buenas prácticas DevSecOps incluidas.
  - Seguridad básica (tokens, firewalls, control de acceso).

### 3.2 No incluye:

  - Escalado automático a múltiples instancias.
  - Integración con plataformas diferentes a Telegram.
  - Soporte para múltiples idiomas del bot (fase futura).

### 3.3 Métricas de Éxito

  - 100% de los casos creados por Telegram se reflejan correctamente en GLPI.
  - Tiempo promedio de respuesta del bot < 2 segundos.
  - Tasa de error del chatbot < 5% en generación de tickets.
  - Implementación sin vulnerabilidades críticas detectadas (según escaneo de seguridad).
  - Accesos no autorizados bloqueados en ambiente de prueba (según logs de firewall).

## 4. Requisitos de Seguridad (Shift Left)

### 4.1 Desde el diseño:

  - Validación de entrada/salida entre bot y GLPI.
  - Comunicación cifrada (uso de tokens).

### 4.2 Durante el desarrollo:

  - Análisis de dependencias con herramientas como Trivy o Snyk.
  - Analsis con Docker Scode.
  - Revisión de código (linters, escáneres de vulnerabilidades).

### 4.3 Antes del despliegue:

  - Auditoría de roles y accesos. Usuarios y Tokens Agregar Tabla 
  - Políticas de red seguras (puertos mínimos abiertos). Firewall de Google Cloud Plattform 
  Agregar evidencia
  
### 4.4 En ejecución:

  - Monitoreo con alertas de acceso sospechoso. (Monitoreo de Firewall GCP)


</details>
<details>
<summary><b>Politicas y Estrategias de Seguridad</b></summary>

## Políticas de seguridad aplicables


Con el fin de garantizar los principios de seguridad (Confidencialidad, Integridad y Disponibilidad) sobre toda la solución, se adoptan un conjunto de normas y buenas prácticas recomendadas a nivel internacional.


### 1. ISO/IEC 27001:2022 – Sistema de Gestión de Seguridad de la Información (SGSI)

Marco que incluye requisitos relacionados con el análisis de riesgos, control de accesos y seguridad desde el inicio (Integración y despliegue continuo).

#### Controles técnicos del anexo A:


1. **A 14.3 Gestión de la seguridad en los ciclos de vida de los sistemas de información**  
   - **Aplicable a:** Control de versiones de código fuente de GLPI  
   - **Recomendación:** Documentar cambios del código a través de GitHub.

2. **A 14.2 – Desarrollo seguro de aplicaciones**  
   - **Aplicable a:** Código fuente de GLPI, API Rest y ChatBot.  
   - **Recomendación:** Validación del código fuente, librerías y dependencias a través de xxxx (Sonar, Snyk).


### 2. ISO/IEC 27005:2018 Gestión de riesgos

Marco metodológico para la identificación, análisis y tratamiento de riesgos. Se aplica en conjunto con Magerit.


### 3. MAGERIT – Metodología de Análisis y gestión de riesgos de los sistemas de información

Metodología española que incluye la identificación de activos, amenazas, vulnerabilidades, evaluación, tratamiento y seguimiento de riesgos.

---

## Metodología seleccionada: MAGERIT

MAGERIT (Metodología de Análisis y Gestión de Riesgos de los Sistemas de Información) se utiliza para estructurar el análisis de riesgos mediante la identificación de activos, amenazas e impactos.

De acuerdo con esta metodología se detallan las fases de la gestión de riesgos:

---

## 1. Identificación de Activos

### 1.1 Inventario de Activos
<div align="center">

| Nombre de Activo       | Tipo de Activo   | Descripción                          |
|------------------------|------------------|--------------------------------------|
| GLPI                   | Aplicación       | Sistema de gestión de tickets        |
| Base de datos MariaDB  | Datos/Información| Base de datos de GLPI                |
| Google Cloud           | Infraestructura  | Nube pública                         |
| Contenedores Docker    | Plataforma       | Entorno de ejecución contenerizado   |
| API REST               | Servicio         | Integración con servicios externos   |
| ChatBot                | Aplicación       | Aplicación para comunicación         |

</div>

### 1.2 Valoración de Activos

### GLPI

<div align="center">

| Impacto / Principio   | Confidencialidad | Integridad | Disponibilidad |
|-----------------------|------------------|------------|----------------|
| Económico             | Media            | Alta       | Alta           |
| Legal y regulatorio   | Alta             | Alta       | Media          |
| Reputacional          | Media            | Alta       | Alta           |
| Operacional           | Media            | Alta       | Alta           |

</div>

### Base de Datos MariaDB

(Idéntica valoración que GLPI)

### Google Cloud

<div align="center">

| Impacto / Principio   | Confidencialidad | Integridad | Disponibilidad |
|-----------------------|------------------|------------|----------------|
| Económico             | Media            | Alta       | Alta           |
| Legal y regulatorio   | Media            | Alta       | Media          |
| Reputacional          | Media            | Alta       | Alta           |
| Operacional           | Media            | Alta       | Alta           |

</div>

### Contenedores Docker

<div align="center">

| Impacto / Principio   | Confidencialidad | Integridad | Disponibilidad |
|-----------------------|------------------|------------|----------------|
| Económico             | Media            | Alta       | Alta           |
| Legal y regulatorio   | Bajo             | Media      | Media          |
| Reputacional          | Media            | Media      | Alta           |
| Operacional           | Media            | Alta       | Alta           |

</div>

### API REST

<div align="center">

| Impacto / Principio   | Confidencialidad | Integridad | Disponibilidad |
|-----------------------|------------------|------------|----------------|
| Económico             | Media            | Media      | Media          |
| Legal y regulatorio   | Alta             | Alta       | Media          |
| Reputacional          | Media            | Media      | Media          |
| Operacional           | Media            | Alta       | Alta           |

</div>

### ChatBot

<div align="center">

| Impacto / Principio   | Confidencialidad | Integridad | Disponibilidad |
|-----------------------|------------------|------------|----------------|
| Económico             | Bajo             | Media      | Bajo           |
| Legal y regulatorio   | Media            | Media      | Bajo           |
| Reputacional          | Media            | Media      | Bajo           |
| Operacional           | Media            | Media      | Bajo           |

</div>

---

## 2. Identificación y Evaluación de Riesgos

### 2.1 Identificación de Riesgos y Vulnerabilidades

<div align="center">

| Amenaza              | Activo Afectado     | Vulnerabilidad                           |
|----------------------|---------------------|-------------------------------------------|
| Acceso no autorizado | GLPI                | Ausencia de doble factor de autenticación |
| Pérdida de datos     | Base de datos MariaDB | Fallo de configuración o backup         |
| Fallo de contenedores| Contenedores Docker | Omisión de políticas de reinicio          |
| Fuga de datos        | API REST            | Ausencia de cifrado                       |
| Respuestas incorrectas| ChatBot            | Configuración o entrenamiento incorrecto  |

</div>

### 2.2 Valoración de Riesgos

<div align="center">

| Amenaza              | Activo Afectado     | Probabilidad | Impacto | Riesgo |
|----------------------|---------------------|--------------|---------|--------|
| Acceso no autorizado | GLPI                | Alta         | Alto    | Alto   |
| Pérdida de datos     | MariaDB             | Media        | Alto    | Alto   |
| Fallo de contenedores| Docker              | Media        | Medio   | Medio  |
| Fuga de datos        | API REST            | Alta         | Medio   | Alto   |
| Respuestas incorrectas| ChatBot            | Baja         | Medio   | Bajo   |

</div>

---

## 3. Planes de Tratamiento

Periodo de aplicación: **3 semanas por riesgo**

<div align="center">

| Riesgo                 | Plan de Acción - Mitigación                                                                 |
|------------------------|---------------------------------------------------------------------------------------------|
| Acceso no autorizado   | Implementación de MFA, validación de matriz de perfilamiento y monitoreo                   |
| Pérdida de datos       | Configuración de backups automáticos                                                       |
| Fallo de contenedores  | Políticas de reinicio en docker-compose (`restart: always`)                               |
| Fuga de datos          | Implementación de cifrado y validación de entradas                                          |
| Respuestas incorrectas | Supervisión de la configuración del ChatBot                                                 |

</div>

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

---

</details>
<details>
<summary><b>Arquitectura de Seguridad</b></summary>

## Arquitectura de alto nivel

  ![Arquitectura de Alto Nivel](./images/Alto_Nivel.png)

  Este diagrama muestra la arquitectura de alto nivel para desplegar GLPI en Google Cloud: sobre una máquina virtual Linux/Ubuntu (dentro de Google Cloud) corre Docker, que levanta tres contenedores principales: el de GLPI (la aplicación web), el de MySQL (la base de datos) y el del bot (un servicio que consume la API REST de GLPI). El usuario accede desde Internet, atraviesa un firewall y se conecta al contenedor de GLPI; este a su vez lee y escribe datos en la base de datos MySQL y ofrece servicios REST que el bot utiliza para crear y gestionar tickets automáticamente.

## Diagrama de Despliegue

  ![Diagrama de Despliegue ](./images/Despliegue.png)
  

  

</details>

---

## 🛠️ 2. Fase de Desarrollo

Esta fase se enfoca en la construcción segura del software. Incluye la implementación de funcionalidades con controles de seguridad integrados, documentación de decisiones clave en el código y ejecución de análisis estático (SAST) para identificar vulnerabilidades tempranas. También se generan listas SBOM para mantener el control sobre las dependencias y sus riesgos asociados.

<details>
<summary><b>Historias de Usuario</b></summary>

## 1. Inicio de sesión seguro en GLPI

**Como** usuario del sistema GLPI,
**quiero** iniciar sesión mediante autenticación de dos factores (MFA),
**para** prevenir accesos no autorizados aunque se filtre mi contraseña.

**Criterios de aceptación:**

* El sistema GLPI debe ofrecer MFA (correo, app de autenticación o SMS).
* Contraseñas con complejidad mínima (mayúsculas, símbolos, longitud >12).
* Bloqueo de sesión tras 5 intentos fallidos.

---

## 2. Envío de tickets por chatbot con entrada segura

**Como** usuario que interactúa desde Telegram,
**quiero** enviar solicitudes a través del chatbot,
**para** crear tickets en GLPI sin comprometer el sistema.

**Criterios de aceptación:**

* El bot debe sanitizar todos los mensajes antes de enviarlos a GLPI.
* Validación de formato y longitud de entrada.
* Logs de entradas rechazadas por motivos de seguridad.

---

## 3. Autenticación del chatbot con GLPI

**Como** desarrollador,
**quiero** que el microservicio del bot se autentique mediante una API Key única,
**para** evitar accesos no autorizados al sistema GLPI.

**Criterios de aceptación:**

* La API Key debe guardarse en variables de entorno, no en el código fuente.
* Validación del token en cada solicitud del bot a GLPI.
* Rotación periódica de claves.

---

## 4. Seguridad en la conexión a la base de datos

**Como** administrador de infraestructura,
**quiero** que GLPI se conecte de forma cifrada a la base de datos MariaDB,
**para** proteger los datos en tránsito en GCP.

**Criterios de aceptación:**

* Conexión TLS habilitada entre GLPI y MariaDB.
* Usuario de base de datos con permisos mínimos.
* Contraseñas almacenadas cifradas en secretos de GCP o archivos `.env`.

---

## 5. Despliegue seguro de microservicios

**Como** DevOps,
**quiero** desplegar el chatbot como contenedor con imágenes verificadas,
**para** garantizar que no contienen software malicioso.

**Criterios de aceptación:**

* Imagen escaneada con herramientas como Trivy o Syft.
* Uso de imágenes oficiales o minimalistas (ej: `python:slim`, `node:alpine`).
* Registro de imagen firmado digitalmente (opcional: Sigstore/Docker Content Trust).

---

## 6. Monitoreo de actividades sospechosas

**Como** analista de seguridad,
**quiero** monitorear interacciones anómalas entre el bot y GLPI,
**para** detectar posibles ataques de fuerza bruta o abuso del sistema.

**Criterios de aceptación:**

* Registro de eventos inusuales (p. ej. muchos tickets en poco tiempo).
* Alertas ante entradas no válidas repetidas.
* Revisión manual de logs mediante Cloud Logging de GCP.

---

## 7. Control de acceso al microservicio

**Como** administrador de red,
**quiero** que el chatbot solo se comunique con GLPI a través de una red interna en GCP,
**para** reducir la superficie de ataque.

**Criterios de aceptación:**

* El bot debe desplegarse en la misma VPC que GLPI.
* Puertos de acceso al backend cerrados a Internet.
* Firewall y reglas IAM controladas por etiqueta o servicio.

---

## 8. Cumplimiento de privacidad y confidencialidad

**Como** oficial de cumplimiento,
**quiero** asegurarme de que los datos personales manejados por el bot (nombres, emails, mensajes) estén protegidos,
**para** cumplir con regulaciones como la Ley de Protección de Datos Personales.

**Criterios de aceptación:**

* Ningún dato personal se guarda en texto plano fuera de la base de datos.
* Cifrado en tránsito y en reposo.
* Accesos auditables y trazables en GCP.

---

## 9. Validación del origen de mensajes del bot

**Como** ingeniero de seguridad,
**quiero** validar que los mensajes recibidos por el bot provienen de WhatsApp/Teams autenticados,
**para** evitar suplantaciones o ataques tipo spoofing.

**Criterios de aceptación:**

* Validación del `webhook signature` o `token de verificación` según el proveedor.
* Rechazo de mensajes sin cabeceras válidas.

---

</details>
<details>
<summary><b>Código Fuente con Comentarios de Seguridad</b></summary>

Se realizó una revisión exhaustiva del código fuente del proyecto, incorporando anotaciones de seguridad directamente en los archivos Dockerfile, archivos .env y el flujo de CI/CD. Estas anotaciones explican decisiones críticas relacionadas con la protección de credenciales, la reducción de la superficie de ataque, el uso seguro de variables de entorno y buenas prácticas en la construcción de contenedores. El objetivo es fortalecer la postura de seguridad desde la fase de construcción y despliegue.

**Link de consulta del informe:** [Clic aquí](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/GRUPO2/Documentaci%C3%B3n/Reportes/Anotaciones%20de%20Seguridad.md)

</details>
<details>
<summary><b>Informes de Análisis Estático (SAST)</b></summary>

## 1. Análisis con SNYK

**COLOCAR CONTENIDO AQUÍ**

## 2. Análisis de Imagenes con Docker Scode

- **GLPI-APP Informe:** [Clic aquí](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/GRUPO2/Documentaci%C3%B3n/Reportes/glpi-app.md)

- **GLPI-BOT Informe:** [Clic aquí](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/GRUPO2/Documentaci%C3%B3n/Reportes/glpi-db.md)

- **GLPI-DB Informe:** [Clic aquí](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/GRUPO2/Documentaci%C3%B3n/Reportes/glpi-bot.md)

### 2.1 Priorización de Vulnerabilidades

Con base en los reportes generados por Docker Scout, se identificaron las siguientes vulnerabilidades en las imágenes utilizadas:

<div align="center">

| Imagen           | Críticas | Altas | Medias | Bajas |
|------------------|----------|-------|--------|-------|
| `glpi-db`        | 4        | 35    | 24     | 9     |
| `glpi-app`       | 0        | 3     | 16     | 27    |
| `glpi-bot`       | 0        | 1     | 1      | 29    |

</div>

Las vulnerabilidades fueron priorizadas según los siguientes criterios:

  - **Impacto en la disponibilidad**:  
    - `glpi-bot`: `CVE-2024-47874` permite un ataque DoS mediante consumo de memoria ilimitado en formularios, afectando directamente la disponibilidad del chatbot.

  - **Impacto en la confidencialidad de datos**:  
    - `glpi-app`: `CVE-2023-50782` en la librería `cryptography` puede permitir el descifrado de mensajes TLS, afectando la confidencialidad del sistema GLPI.

  - **Exposición externa**:  
    - Los contenedores `glpi-app` y `glpi-bot` exponen servicios HTTP/HTTPS, por lo que las vulnerabilidades con vector de ataque remoto (`AV:N`) son especialmente críticas.

  - **Alta puntuación CVSS 4.0, CVSS 3.1**:  
    - Se identificaron múltiples vulnerabilidades con puntuaciones CVSS ≥ 8.7 en `glpi-db` y `glpi-bot`.

### 2.2 Plan remediación

  1. **`glpi-db`**: actualizar imagen base ≥ `1.23.8`.
  2. **`glpi-app`**: actualizar dependencias `cryptography` y `pyjwt`.
  3. **`glpi-bot`**: mitigar DoS actualizando `Starlette` a `>=0.40.0`.

---

## 2.3 Integración de Seguridad en el Pipeline DevSecOps

### 2.3.1 Recomendado:

- Integrar  **Scout CLI** en el pipeline CI/CD para escanear las imágenes Docker en cada `build`.
- Configurar el pipeline para **bloquear despliegues** con CVSS ≥ 7.0 no mitigadas.
- Añadir escaneo SAST con herramientas como `SonarQube`, `Bandit` o `Semgrep`.

### 2.3.2 Estrategias de Remediación

  - **Actualización de dependencias vulnerables**:
    - `cryptography` ≥ `42.0.0`
    - `pyjwt` ≥ `2.4.0`
    - `starlette` ≥ `0.40.0`
    - Imagen base ≥ `1.23.8` en `glpi-db`

  - **Mejoras de seguridad en Docker**:
    - Minimizar superficie de ataque utilizando imágenes ligeras como `alpine`.
    - Eliminar herramientas y paquetes innecesarios del `Dockerfile`.
    - Aplicar buenas prácticas de configuración en `Docker Compose` y redes.

  - **Segmentación y control de acceso**:
    - Restringir el acceso al contenedor `glpi-db` solo a IPs internas.
    - Usar variables de entorno seguras y cifradas para contraseñas.


</details>
<details>
<summary><b>SBOM (Software Bill of Materials)</b></summary>

**COLOCAR CONTENIDO AQUÍ**
### Inventario de librerias, dependencia esternas
### Vulnerabilidades conocidas (Usar documentacion de GLPI)
</details>

---

## 🔄 3. Fase de Integración de Seguridad

Durante esta fase se validan dinámicamente los componentes del sistema en un entorno de integración o staging. Se incorporan herramientas DAST para detectar vulnerabilidades en ejecución, se consultan fuentes de inteligencia de amenazas y se definen planes de remediación priorizados según el impacto y la probabilidad, usando métricas como CVSS 4.0.

<details>
<summary><b>Informe de Amenazas Relevantes </b></summary>


A continuación, se relaciona el informe sobre amenazas de ataques similares en la industria. En particular, la vulnerabilidad de **Broken Authentication**, documentada en el informe [OWASP API Top 10 – API2:2023](https://owasp.org/API-Security/editions/2023/en/0xa2-broken-authentication/), donde ejemplifica cómo configuraciones inadecuadas pueden permitir accesos no autorizados y explotación de bots conectados vía API REST.

**Link de consulta del informe:** [Clic aquí](https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/GRUPO2/Documentaci%C3%B3n/Reportes/Threat%20Intelligence%20Reports.md)

</details>
<details>
<summary><b>Informe de OWASP ZAP</b></summary>

**COLOCAR CONTENIDO AQUÍ**

</details>
<details>
<summary><b>Plan de Remediación de Vulnerabilidades</b></summary>


A continuación, se relacionan las vulnerabilidades más altas en el proyecto GLPI 10.8.18 (PHP) y sobre las cuáles se elabora el cronograma para la remediación:


## 1. Resumen de vulnerabilidades detectadas

| Tipo de Vulnerabilidad         | CWE      | Prioridad | Descripción breve                                                         |
|-------------------------------|----------|-----------|----------------------------------------------------------------------------|
| Cross-site Scripting (XSS)    | CWE-79   | 854       | Inyección de scripts que se ejecutan en el navegador del usuario.         |
| Path Transversal                | CWE-23   | 803       | Acceso a archivos fuera del directorio permitido.                         |
| Regular Expression DoS (ReDoS)| CWE-400  | 801       | Uso de expresiones regulares costosas en CPU ante entrada maliciosa.     |


## 2. Priorización de riesgos

Se categoriza la criticidad basada en el puntaje de prioridad:

- 🔴 **Alta Prioridad (Urgente)**: ≥ 850  
- 🟠 **Media Prioridad (Próxima iteración)**: 800 – 849  
- 🟢 **Baja Prioridad (Programar)**: < 800 _(No aplican en este caso para las vulnerabilidades priorizadas)_


## 3. Cronograma de Corrección

| Vulnerabilidad                | Prioridad | Tiempo Estimado de Remediación | Fecha Límite Propuesta     |
|------------------------------|-----------|-------------------------------|-----------------------------|
| Cross-site Scripting (XSS)   | 854       | 1–3 días                       | Dentro de la primera semana |
| Path Traversal               | 803       | 3–5 días                       | Semana 2                    |
| Regular Expression DoS       | 801       | 5–7 días                       | Semana 2–3                  |



## 4. Plan de acción por vulnerabilidad

### ✅ Cross-site Scripting (XSS) – CWE-79

- **Acción correctiva**:
  - Escapar o sanear toda salida de datos del usuario.
  - Validar entradas HTML y deshabilitar ejecución de código dinámico no controlado.

### ✅ Path Transversal – CWE-23

- **Acción correctiva**:
  - Validar y normalizar rutas de archivos (`realpath`, validaciones manuales).
  - Restringir acceso a directorios permitidos únicamente.


### ✅ Regular Expression DoS (ReDoS) – CWE-400

- **Acción correctiva**:
  - Evitar patrones regex con retroceso excesivo.
  - Limitar longitud de entrada y usar expresiones eficientes.


Con este plan se busca garantizar la mitigación oportuna de las vulnerabilidades más críticas, minimizando el riesgo para la integridad y seguridad del proyecto (Principalmente en código PHP de GLPI).


</details>

---

## 🚀 4. Fase de Despliegue (CI/CD)

---

Esta fase automatiza la entrega continua de software con seguridad integrada en el pipeline. Se configuran escaneos de imágenes, análisis de IaC, validaciones de secretos y controles de firma de código. La infraestructura como código asegura entornos reproducibles y seguros, alineados con políticas organizacionales.

<details>
<summary><b>Configuración de Pipeline</b></summary>

Existe un flujo de CI/CD basado en GitHub Actions. Este pipeline está definido en el directorio .github/workflows/ci-cd.yml.

- Se activa al hacer push en la rama master y ejecuta los siguientes JOB

    - **build-and-push:**

      - Clona el repositorio
      - Define una variable IMAGE_DATE con la fecha actual
      - Inicia sesión en Docker Hub
      - Construye y sube las imágenes Docker de:

        - glpi-app
        - glpi-db
        - glpi-bot

      Cada imagen recibe dos etiquetas: :YYYYMMDD y :latest

    - **deploy (depende de build-and-push):**
      - Autentica en GCP con credenciales de servicio
      - Instala el SDK de gcloud
      - Se conecta por SSH a la instancia especificada
      - Dentro de la VM, detiene los contenedores actuales, actualiza las imágenes y levanta los servicios con Docker Compose

---

</details>
<details>
<summary><b>Infraestructura como Código (IaC)</b></summary>

---

  El proyecto usa Docker Compose como “Infraestructura” local
  La verdadera “infraestructura” que define el repositorio es el propio docker-compose.yml (en la raíz), que especifica:

   - glpi-db (MariaDB)
   - glpi-app (contenedor PHP-FPM + Nginx)
   - glpi-bot (contenedor Python + Ngrok)
  
  Ese docker-compose.yml funciona como un equivalente “IaC” a nivel de orquestación de contenedores. Esta configuración (versionada en Git) asegura entornos reproducibles: quien clone el repo y ejecute docker-compose up -d obtiene el mismo resultado.

---

</details>
<details>
<summary><b>Registros de Imágenes de Contenedores</b></summary>
  
---

  En glpiDevSecOps se sigue este patrón:

  **Destino: Google Container Registry (GCR):**
  
  - Cada vez que GitHub Actions construye una imagen (glpi-app o glpi-bot), la etiqueta como:

```bash  
  gcr.io/<GCP_PROJECT_ID>/glpi-app:<GIT_SHA>
  gcr.io/<GCP_PROJECT_ID>/glpi-bot:<GIT_SHA>
 ```

  - Esa misma ruta aparece en los pasos de “push”:

 ```bash  
  docker push gcr.io/${{ secrets.GCP_PROJECT_ID }}/glpi-app:${{ github.sha }}
  docker push gcr.io/${{ secrets.GCP_PROJECT_ID }}/glpi-bot:${{ github.sha }}
 ```

  ***redenciales para autenticarse**

  - En los Secrets de GitHub se guarda la llave de servicio de GCP (GCP_SA_KEY) y se hace un login tipo:

```bash  
    echo "${{ secrets.GCP_SA_KEY }}" | docker login -u _json_key --password-stdin https://gcr.io
```
  Así, el runner puede realizar el docker push sin problemas de permisos.

  **Trazabilidad en versiones**

  Al usar ${{ github.sha }}, cada push de imagen corresponde exactamente a un commit específico.
  En producción, cuando el pipeline hace “docker pull” y levanta el contenedor.

---

</details>

---

## 📡 5. Fase de Operación y Monitoreo

La fase de operación y monitoreo tiene como objetivo asegurar la continuidad del servicio, la detección proactiva de incidentes, la respuesta oportuna ante brechas de seguridad y el cumplimiento constante de estándares y políticas. Esta fase debe estar completamente alineada con los objetivos de seguridad y sostenibilidad definidos desde el diseño del sistema.

<details>
<summary><b>Runbooks de Respuesta a Incidentes</b></summary>

---

Documentos operativos que describen paso a paso cómo actuar frente a distintos escenarios de riesgo, con el objetivo de minimizar el impacto y restaurar los servicios rápidamente.

## Ejemplos incluidos:

### Contención de ransomware en contenedores Docker:
- Aislar el contenedor afectado del resto de la red (`docker network disconnect` o reglas de firewall).
- Detener el servicio mediante `docker stop`.
- Ejecutar verificación de integridad del volumen con checksums.
- Restaurar desde una copia de seguridad verificada.
- Notificar al equipo de seguridad.

### Fallo en la conexión del chatbot con GLPI:
- Verificar logs de errores del bot (`docker logs bot_service`).
- Validar conectividad entre servicios internos (`docker exec` + `curl`).
- Reiniciar servicios de backend si aplica.
- Registrar la incidencia en el historial del sistema.

### Acceso sospechoso desde IP no autorizada:
- Generar alerta en el sistema SIEM.
- Ejecutar bloqueo de IP en el firewall del contenedor o del host.
- Revisar logs de auditoría.
- Notificar al responsable de seguridad para evaluación forense.

---

</details>
<details>
<summary><b>Registros y Alertas de Seguridad</b></summary>

---

Implementación de un sistema de monitoreo continuo mediante herramientas SIEM que permitan recopilar, visualizar y analizar eventos del entorno en tiempo real.

## Elementos configurados:

- **SIEM**: Splunk o ELK Stack

### Logs capturados:
- Eventos de acceso y autenticación (chatbot, GLPI, MySQL).
- Errores de servicios en contenedores Docker.
- Actividad inusual del bot (mensajes no reconocidos, errores de conexión).
- Cambios en archivos de configuración.

### Alertas automatizadas:
- Múltiples intentos fallidos de login.
- Acceso fuera de horario laboral.
- Generación de tickets con palabras clave críticas (e.g., “urgente”, “fallo masivo”).
- Escaladas de permisos o cambios en roles.

---

</details>
<details>
<summary><b>Informes de Cumplimiento Continuo</b></summary>

---

Mecanismo automatizado de verificación de cumplimiento con estándares de seguridad, utilizando herramientas que auditan la configuración del sistema periódicamente.

## Herramientas sugeridas:
- **Chef InSpec**: para verificar que las configuraciones cumplen políticas definidas (cifrado, autenticación, puertos abiertos).
- **OpenSCAP** o **ComplianceAsCode**: para auditorías más detalladas.

## Ejemplos de validaciones:
- Verificar que todas las conexiones a GLPI usen **HTTPS**.
- Confirmar que solo puertos necesarios estén abiertos en cada contenedor.
- Validar que los tokens **JWT** tengan expiración y cifrado fuerte.
- Asegurar que los **backups** estén en ubicación segura y sean verificables.
- Revisión automática de roles definidos en GLPI contra una plantilla aprobada.

</details>

---

## 🔁 6. Fase de Retroalimentación y Mejora

Esta fase permite aprender de los incidentes, evaluaciones y nuevas amenazas, alimentando de forma iterativa el ciclo de desarrollo. Se revisan políticas, actualizan procedimientos y refuerzan controles con base en pruebas de penetración, retrospectivas técnicas y nuevas regulaciones, fomentando una cultura de mejora continua en seguridad.

<details>
<summary><b>Retrospectivas de Seguridad</b></summary>


Analizar eventos de seguridad y vulnerabilidades identificadas durante el ciclo de vida del sistema, con el fin de implementar mejoras continuas en la protección de los activos del proyecto.

**Lecciones Aprendidas:**

| Evento | Descripción | Causa Raíz | Medidas Correctivas | Estado |
|--------|-------------|------------|----------------------|--------|
| Intento de acceso no autorizado al microservicio del bot | Se detectaron múltiples solicitudes no autenticadas hacia la API del bot. | Endpoint expuesto sin autenticación. | Implementación de validación JWT y lista blanca de IPs. | Aplicado |
| Vulnerabilidades en imágenes de Docker (Snyk) | Snyk detectó dependencias con vulnerabilidades críticas (OpenSSL, libc). | Uso de imágenes base no actualizadas. | Cambio a imágenes oficiales y escaneo en cada build. | Aplicado |
| Exposición de datos sensibles | Snyk alertó sobre credenciales y datos personales en archivos `.env`. | Manejo inseguro de secretos. | Migración a GCP Secret Manager y auditoría de uso de datos personales. | Aplicado |

**Herramientas Usadas:**
- **Snyk**: Escaneo de vulnerabilidades en contenedores y dependencias.
- **GitLab CI/CD**: Automatización del análisis de seguridad en el pipeline.
- **Google Cloud Operations**: Monitoreo y logging de eventos de seguridad.


</details>
<details>
<summary><b>Actualización de Políticas</b></summary>


Asegurar que las políticas del proyecto se mantengan actualizadas con respecto a normativas locales, mejores prácticas y aprendizajes del proceso.

| Documento | Versión Anterior | Cambio Realizado | Fecha | Responsable |
|-----------|------------------|------------------|-------|-------------|
| Política de Tratamiento de Datos Personales | v1.0 | Incorporación de principios y deberes establecidos por la **Ley 1581 de 2012**. | 2025-05-18 | Oficial de Protección de Datos |
| Política de Gestión de Secretos | v1.2 | Integración con GCP Secret Manager y rotación periódica. | 2025-05-15 | Equipo DevSecOps |
| Protocolo de Respuesta a Incidentes | v0.9 | Inclusión de ruta de notificación para incidentes que involucren datos personales. | 2025-05-25 | CISO |
| Política de Control de Acceso | v1.0 | Aplicación de autenticación basada en roles y mínimos privilegios. | 2025-05-20 | Seguridad Aplicada |

**Normativas y Buenas Prácticas Consideradas:**
- **Ley 1581 de 2012** – Protección de Datos Personales (Colombia).
- **Reglamento GDPR (UE)** – Aplicado en principios comunes de protección de datos.
- **NIST Cybersecurity Framework** – Control y respuesta ante incidentes.
- **CIS Benchmarks** – Seguridad para Docker y Google Cloud Platform.
- **OWASP Top 10 & Docker Security Cheat Sheet** – Mitigación de riesgos comunes.

</details>

---
