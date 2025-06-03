
# Matriz RACI - Proyecto DevSecOps: GLPI + MariaDB + Chatbot Telegram

Esta matriz define claramente los roles y responsabilidades de los actores clave involucrados en el ciclo de vida del proyecto, alineado con el enfoque DevSecOps.

---

## Roles del Proyecto

- **Project Manager**: Seguimiento de planes, plazos y comunicación técnica.
- **Desarrollador Backend**: Desarrollo seguro, autenticación y control de acceso.
- **Ingeniero DevOps**: Integración, despliegue continuo y contenedores robustos.
- **Especialista en Seguridad**: Gestión de riesgos, implementación y supervisión de controles.

---

## Matriz RACI

| Actividad / Entregable                              | Project Manager | Dev Backend | DevOps Engineer | Especialista en Seguridad |
|-----------------------------------------------------|------------------|--------------|------------------|----------------------------|
| Definición del Project Charter                      | A                |              |                  | C                          |
| Modelado de amenazas (Threat Modeling)              | C                | C            |                  | R                          |
| Definición de políticas de seguridad                | I                |              |                  | R                          |
| Desarrollo backend GLPI y chatbot                   | I                | R, A         |                  | C                          |
| Validación de autenticación y control de acceso     | I                | R            |                  | C                          |
| Implementación de análisis estático (SAST)          | C                | R            | C                | A                          |
| Generación de SBOM y escaneo de dependencias        | C                | R            | C                | A                          |
| Construcción y mantenimiento del Dockerfile         | C                |              | R, A             | I                          |
| Orquestación con Docker Compose                     | C                |              | R                | I                          |
| Implementación de pipelines CI/CD                   | C                |              | R, A             | C                          |
| Escaneo de infraestructura con Snyk (IaC)           | C                |              | R                | A                          |
| Despliegue del sistema GLPI completo                | I                |              | R, A             | C                          |
| Ejecución de análisis dinámico (DAST/ZAP)           | C                |              | C                | R, A                       |
| Registro de riesgos y plan de mitigación            | I                |              | C                | R, A                       |
| Ejecución de auditoría externa o pentest            | I                |              |                  | R, A                       |
| Runbooks de respuesta a incidentes                  | C                |              | R                | A                          |
| Validación de cumplimiento (ej. ISO 27001)          | I                |              | C                | R, A                       |
| Retrospectiva de seguridad                          | A                | C            | C                | R                          |
| Actualización de políticas y controles              | I                |              |                  | R, A                       |

---

## Leyenda

- **R** = Responsible (Responsable de ejecutar la actividad)
- **A** = Accountable (Responsable de aprobar/tomar decisiones)
- **C** = Consulted (Consultado para aportar conocimiento)
- **I** = Informed (Informado del avance o resultado)

---

Esta matriz ayuda a asegurar que todas las actividades estén correctamente asignadas, evita solapamientos de responsabilidades y refuerza la transparencia en todo el ciclo DevSecOps.