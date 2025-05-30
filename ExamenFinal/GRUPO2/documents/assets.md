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
