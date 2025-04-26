### **Exámen Final:**  

## **Opción 1** ##

**Aplicación que integre mínimo tres servicios**

**Características mínimas**

- Virtualizada,contenerizada o en la nube.
- Open source ( todo el código debe encontrarse en el repositorio).
- Documentación completa.

---

### **Objetivo de Aprendizaje:**  
Desarrollar la capacidad para identificar, evaluar, y asegurar aplicaciones multiservicios empleando  prácticas  DevSecOps.

---

### **Descripción de la Actividad:**

1. **Elementos:**
   - Se debe implementar un entorno de desarrollo ágil. Este incluye:
     - Un repositorio de código con la aplicación implementa.
       -**NOTA La aplicación es de baja omeda complejidad si así se desea,siendo posible incluso recrear alguna existente siempre y cuando se apropie con total completitud, desarrollando toda la respectiva documentación y genrando alguna mejora que le permita ampliar la ya desarrollada ( se recomienda observar el temadeagentes).**    
     - Un sistema de CI/CD.
     - Implementación de prácticas de seguridad.
     - Repositorio en github con ladocumentación completa.
     - Recursos de infraestructura ( máquinas virtuales, contenedores, scripts o lo que aplique)

2. **Presentación:**
   - Elaborar un informe técnico y una presentación donde se detallen:
     - Informe ejecutivo
     - Historias de usuario.
     - Manual de administrador.
     - Diagras de despliegu.
     - **Docker-compose con la totalidad de la aplicación, o pipeline según aplique**.

### **Recursos Requeridos:**
   - Documentación CVSS 4.0.
   - Entorno de CI/CD simulado (puede usar herramientas como Jenkins, GitLab CI/CD, GitHub Actions).
   - Escáneres de seguridad y herramientas de análisis de código.
   - Acceso a calculadoras CVSS 4.0.

---

### **Evaluación:**
   - **Informe técnico:** 40% (claridad, profundidad y justificación).
   - **Presentación:** 20% (impacto visual, comunicación de ideas).
   - **Propuesta de integración:** 40% (viabilidad, innovación y alineación con prácticas DevSecOps).

------------

## **Opción 2** ##
**Evaluación y Priorización de Vulnerabilidades en un Entorno DevSecOps mediante CVSS 4.0**

---

### **Objetivo de Aprendizaje:**  
Desarrollar la capacidad para identificar, evaluar, y priorizar vulnerabilidades utilizando la especificación CVSS 4.0 en un pipeline de DevSecOps, integrando principios de seguridad desde el diseño hasta la implementación.

---

### **Descripción de la Actividad:**

1. **Elementos:**
   - Se debe implementar un entorno de desarrollo ágil. Este incluye:
     - Un repositorio de código con una aplicación web básica.
     - Un sistema de CI/CD.
     - Un conjunto de vulnerabilidades simuladas (por ejemplo, en dependencias de software, configuraciones de infraestructura como código, y código fuente).

2. **Tareas:**
   - **Identificación de Vulnerabilidades:**
     - Ejecutar herramientas de análisis de seguridad como SAST, DAST, y escáneres de dependencias (por ejemplo, OWASP ZAP, Trivy, o SonarQube).
     - Documentar las vulnerabilidades encontradas con detalles clave (vector, alcance, etc.).
   
   - **Evaluación con CVSS 4.0:**
     - Asignar puntuaciones CVSS 4.0 a las vulnerabilidades identificadas considerando los nuevos factores de impacto, métricas ambientales y temporales.
     - Usar herramientas compatibles con CVSS 4.0 (por ejemplo, calculadoras CVSS actualizadas).

   - **Priorización:**
     - Crear una lista priorizada de las vulnerabilidades más críticas, justificando las decisiones con base en el contexto empresarial (disponibilidad, impacto en datos críticos, etc.).

   - **Integración en DevSecOps:**
     - Proponer un plan para integrar controles de seguridad en el pipeline CI/CD:
       - Configuración de validaciones automáticas.
       - Estrategias de remediación (parches, configuración segura, refactorización de código).
       - Alertas automatizadas para nuevas vulnerabilidades.

3. **Presentación:**
   - Elaborar un informe técnico y una presentación donde se detallen:
     - El proceso de evaluación y priorización.
     - Las soluciones implementadas para mitigar riesgos.
     - Propuestas de mejora continua para la gestión de vulnerabilidades.
     - **Docker-compose con la totalidad de la aplicación.


---

### **Recursos Requeridos:**
   - Documentación CVSS 4.0.
   - Entorno de CI/CD simulado (puede usar herramientas como Jenkins, GitLab CI/CD, GitHub Actions).
   - Escáneres de seguridad y herramientas de análisis de código.
   - Acceso a calculadoras CVSS 4.0.

---

### **Evaluación:**
   - **Informe técnico:** 40% (claridad, profundidad y justificación).
   - **Presentación:** 20% (impacto visual, comunicación de ideas).
   - **Propuesta de integración:** 40% (viabilidad, innovación y alineación con prácticas DevSecOps).

# NOTA.

Como se explico en clase adoptar las prçticas adoptadas en los anteriores laboratorios, principalmente lo visto en clase sobre el escanner de vulnerabilidades ( Documentcaión en Overview)
---

### PROYECTOS GUÍA

- https://github.com/SabyasachiRana/WebMap
- https://securedrop.org/


*********
## Documentación.

En un proyecto **DevSecOps**, la documentación es clave para garantizar la integración efectiva de seguridad en todas las etapas del ciclo de vida del software, desde el desarrollo hasta la operación. A continuación, detallo los documentos esenciales que deben entregarse, organizados por fase:

---

### **1. Fase de Planificación y Diseño**
#### **Documentos Principales**:
- **Project Charter**:  
  - Objetivos del proyecto, roles, alcance y métricas de éxito.  
  - Incluye requisitos de seguridad desde el inicio (*Shift Left*).  

- **Security Strategy & Policy**:  
  - Políticas de seguridad aplicables (ej.: GDPR, ISO 27001).  
  - Estrategia de gestión de riesgos y responsabilidades del equipo.  

- **Arquitectura de Seguridad**:  
  - Diagramas de arquitectura con componentes críticos (firewalls, APIs, bases de datos).  
  - Modelado de amenazas (*Threat Modeling*) para identificar vulnerabilidades potenciales.  

---

### **2. Fase de Desarrollo**
#### **Documentos Principales**:
- **User Stories con Requisitos de Seguridad**:  
  - Historias de usuario que incluyen controles de seguridad (ej.: "Como usuario, quiero autenticación MFA para evitar accesos no autorizados").  

- **Código Fuente con Comentarios de Seguridad**:  
  - Anotaciones en el código que expliquen decisiones de seguridad (ej.: uso de sanitización de entradas).  

- **Informes de Análisis Estático (SAST)**:  
  - Resultados de herramientas como **SonarQube** o **Checkmarx** que detectan vulnerabilidades en el código.  

- **SBOM (Software Bill of Materials)**:  
  - Inventario de dependencias externas (librerías, frameworks) con sus versiones y vulnerabilidades conocidas (ej.: generado con **Dependency-Track**).  

---

### **3. Fase de Integración de Seguridad**
#### **Documentos Principales**:
- **Threat Intelligence Reports**:  
  - Informes sobre amenazas relevantes para el sistema (ej.: ataques a APIs similares en la industria).  

- **DAST (Dynamic Application Security Testing) Results**:  
  - Resultados de pruebas de seguridad en entornos de staging (ej.: usando **OWASP ZAP** o **Burp Suite**).  

- **Plan de Remediación de Vulnerabilidades**:  
  - Priorización de vulneridades (CVSS) y cronograma de correcciones.  

---

### **4. Fase de Despliegue (CI/CD)**
#### **Documentos Principales**:
- **Pipeline as Code**:  
  - Configuración de pipelines CI/CD (ej.: Jenkinsfile, GitLab CI) con etapas de seguridad automatizadas (escaneo de secretos, firma de imágenes).  

- **Infraestructura como Código (IaC)**:  
  - Scripts de Terraform o CloudFormation con hardening de seguridad (ej.: grupos de seguridad en AWS).  

- **Registros de Imágenes de Contenedores**:  
  - Reportes de escaneo de imágenes Docker (ej.: con **Trivy** o **Clair**) en un registro como **Harbor**.  

---

### **5. Fase de Operación y Monitoreo**
#### **Documentos Principales**:
- **Runbooks de Respuesta a Incidentes**:  
  - Procedimientos detallados para mitigar brechas (ej.: contención de ransomware).  

- **Logs y Alertas de Seguridad**:  
  - Configuración de SIEM (**Splunk**, **ELK Stack**) para monitoreo continuo.  

- **Informes de Compliance Continuo**:  
  - Validación automatizada de estándares (ej.: PCI-DSS, HIPAA) usando herramientas como **Chef InSpec**.  

---

### **6. Fase de Retroalimentación y Mejora**
#### **Documentos Principales**:
- **Retrospectivas de Seguridad**:  
  - Lecciones aprendidas tras incidentes o pruebas de penetración.  

- **Actualización de Políticas**:  
  - Documentos revisados con nuevas regulaciones o cambios en el entorno.  

---

### **Documentos Transversales (Comunes a Todas las Fases)**
1. **Matriz de Responsabilidades (RACI)**:  
   - Define roles en seguridad: *Responsible, Accountable, Consulted, Informed*.  

2. **Registro de Riesgos**:  
   - Lista de riesgos identificados, impacto, probabilidad y acciones de mitigación.  

3. **Manual de Buenas Prácticas DevSecOps**:  
   - Guías para desarrolladores (ej.: evitar hardcoded secrets, uso de vaults).  

4. **Certificados y Auditorías**:  
   - Resultados de auditorías externas (ej.: pentesting por terceros).  

---

### **Ejemplo de Entregables por Herramienta**
| **Herramienta**       | **Documento Generado**                     | **Propósito**                                  |
|-------------------------|--------------------------------------------|-----------------------------------------------|
| **Git**               | Historial de commits firmados             | Integridad del código.                        |
| **Ansible**           | Playbooks con hardening                   | Automatización segura de configuraciones.     |
| **Kubernetes**        | Políticas de NetworkPolicy                | Aislamiento de microservicios.                |
| **Vault**             | Registro de rotación de claves            | Gestión segura de secretos.                   |

---

### **Importancia de la Documentación en DevSecOps**
- **Auditoría**: Permite demostrar cumplimiento normativo.  
- **Colaboración**: Facilita la transparencia entre equipos (Dev, Sec, Ops).  
- **Escalabilidad**: Documenta procesos repetibles para futuros proyectos.  


