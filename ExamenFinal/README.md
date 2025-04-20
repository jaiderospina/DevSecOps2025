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
