# Aplicación web para el creación, manejo y control de tareas diarias tanto personales como grupales. 

# Resumen
Task Manager es una aplicación gratuita diseñada para ayudarte a organizar tus tareas diarias de manera eficiente. Con ella, puedes crear diversas listas para gestionar pendientes, compras y más, además de tomar notas y planificar eventos. La función de recordatorios te asegura no olvidar nada importante, impulsando así tu productividad. Esta herramienta te permite detallar tus tareas añadiendo notas y dividiéndolas en pasos más pequeños para un mejor seguimiento. Puedes acceder a tu información desde cualquier dispositivo a través de navegadores como Chrome, Firefox, Opera o Microsoft Edge. En esencia, Task Manager es una aplicación práctica y sencilla que te brinda el control de tus actividades y te ayuda a ser más eficiente en tu día a día.  

 En este escrito se describe el proceso que se llevó a cabo para el desarrollo de una aplicación web la cual busca facilitar la administración de tareas diaria a nivel tanto empresarial como personal. En el aplicativo se consideró la creación de un frontend para el ingreso al aplicativo, adicional un módulo para la creación de las tareas y el módulo de seguimiento de las tareas creadas.  

 **Palabras Claves**: Tareas, aplicación, gratuito, gestión.  

# Objetivos
## Objetivo general:
Simplificar la organización y el seguimiento de las tareas diarias, tanto a nivel individual como dentro de equipos u organizaciones, para aumentar la productividad y asegurar el cumplimiento de los pendientes.  

## Objetivo Específicos:  
* Definir los requisitos básicos para la creación de un aplicativo web que permita la creación y gestión de tareas de seguimiento y pueda ser aplicable tanto en ámbito empresarial como personal. 

* Permitir la creación y gestión intuitiva de listas de tareas personalizadas.

* Facilitar el seguimiento y cumplimiento de plazos mediante recordatorios y fechas de vencimiento.  

* Desarrollar un módulo de visualización tipo dashboard para evidenciar tareas tanto de nivel personal como de grupos de trabajo. 

# Alcance: 

Para esta herramienta web se realizó el desarrollo de un aplicativo que maneja dos tipos principales de funcionalidades: gestión de tareas y autenticación/autorización de usuarios con el ánimo de facilitar tareas tanto diarias y personales como para proyectos a pequeña y media escala optimizando el seguimiento y escalamiento de las mismas.  

Front-end: Una interfaz gráfica en la cual se realizará el ingreso del usuario ingresado username y contraseña anteriormente asignada, de igual forma existe un apartado para la creación de un nuevo usuario donde se asignará: username y contraseña.  

Creación de usuario: un apartado en el cual se realiza la creación de un usuario nuevo, los datos necesarios son usuario y contraseña.  

Módulo de creación de tareas: Incluye creación y asignación de tareas según necesidad del usuario.  

# Limitaciones: 

* El aplicativo no está desarrollado para dispositivo, por lo tanto, no es soportado en dispositivos Android o IOS. 
* En la fase inicial, no se tiene desarrollado el módulo de escalamiento o reasignación de las tareas a otras áreas o personas.
* No se cuenta con los recursos suficientes para implementar el módulo de MFA.  

# Security Strategy & Policy: 

Con ánimo de garantizar los tres pilares de la Ciberseguridad (la confidencialidad, integridad y disponibilidad) de la información recolectada en la aplicación, se debe cumplir con las siguientes políticas de seguridad basadas en marcos y normativas reconocidas: 

* **LEY ESTATUTARIA 1581 DE 2012:**  
También conocida como la Ley de Protección de Datos Personales en Colombia, establece los principios y normas para la protección de los datos personales de las personas naturales y jurídicas. Garantiza el derecho a conocer, actualizar, rectificar y suprimir la información personal recogida en bases de datos.   

* **Reglamento General de Protección de Datos (GDPR):**  
El Reglamento General de Protección de Datos (GDPR) de la Unión Europea no se aplica directamente en Colombia. Sin embargo, las empresas colombianas que procesan datos personales de ciudadanos de la UE, o que exportan datos fuera de la UE, deben cumplir con las obligaciones del GDPR.  

* **ISO 27001 (Sistema de Gestión de Seguridad de la Información):**  
Aunque no es una regulación obligatoria, ISO 27001 es un estándar internacional para establecer, implementar, mantener y mejorar un sistema de gestión de seguridad de la información (SGSI). Es altamente recomendable para cualquier organización que maneje información sensible, ya que task manager manejará, tanto bases de datos de usuarios y contraseñas, así como información de equipo y tareas, los cuales se pueden considerar sensibles, se requiere cumplir con estos estándares para un buen desarrollo y manejo de la aplicación.  
    * **Gestión de Riesgos:** Identificación, evaluación y tratamiento de los riesgos de seguridad de la información. 
    * **Controles de Seguridad:** Implementación de controles técnicos y organizativos para mitigar los riesgos (ejemplos relevantes para esta app: controles de acceso, cifrado, seguridad en el desarrollo de software, gestión de incidentes de seguridad, gestión de activos, seguridad de las operaciones). 
    * **Política de Seguridad de la Información:** Establecer y mantener una política de seguridad clara. 
    * **Roles y Responsabilidades:** Definir claramente las responsabilidades en seguridad de la información. 
    * **Concientización y Capacitación:** Asegurar que el personal esté consciente de sus responsabilidades de seguridad. 

    * **Cumplimiento Legal y Contractual:** Asegurar que la aplicación cumple con todas las leyes y regulaciones aplicables. 

# Estrategia de gestión de riesgos y responsabilidades del equipo. 

La gestión de riesgos es un proceso continuo que debe integrarse en cada etapa del ciclo de vida del desarrollo del aplicativo. 

* **Análisis SWOT:** Realizar un análisis de Fortalezas, Oportunidades, Debilidades y Amenazas para comprender el entorno del aplicativo.  

* **Análisis de Casos de Uso y Requisitos:**  Evaluar los requisitos y casos de uso para identificar posibles puntos de falla o complejidades. 

* **Evaluación de Seguridad:** Realizar análisis de vulnerabilidades y pruebas de penetración en las etapas tempranas del desarrollo. 

### Entre los Riesgos identificados, tenemos:  

* **Riesgos Técnicos:**
    * **Escalabilidad:** Dificultad para manejar un gran número de usuarios o tareas. 
    * **Integración:** Problemas al integrar con otros calendarios o plataformas. 
    * **Sincronización:** Fallos en la sincronización de tareas entre diferentes dispositivos. 
    * **Rendimiento:** Lentitud de la aplicación al cargar o actualizar tareas. 
    * **Errores/Bugs Críticos:** Fallos que impiden el uso de funcionalidades clave. 

* **Riesgos de Seguridad y Privacidad:**

    * **Filtración de Datos:** Acceso no autorizado a las listas de tareas de los usuarios. 
    * **Vulnerabilidades de Autenticación:** Problemas con el sistema de inicio de sesión. 

* **Riesgos Operacionales:**
    * **Disponibilidad del Servicio:** Caídas del servidor que impiden el acceso a la aplicación. 
    * **Recuperación de Desastres:** Incapacidad para restaurar datos después de un fallo importante. 

# Planificación de la Respuesta a los Riesgos: 

* Para cada riesgo priorizado, se debe desarrollar un plan de respuesta.
* **Mitigación:** Acciones para reducir la probabilidad o el impacto del riesgo. 
* Implementar pruebas automatizadas de sincronización, usar una base de datos robusta, validar la integridad de los datos en cada sincronización. 
* **Aceptación:** Asumir el riesgo si el impacto es bajo o el costo de mitigación es demasiado alto.  
* **Transferencia:** Trasladar el riesgo a un tercero (ej. seguros, subcontratación).
* **Evitación:** Decidir no implementar una funcionalidad compleja si el riesgo de fallos es demasiado alto. 

# Definición de Roles y Responsabilidades Claras 
Cada miembro del equipo debe comprender su rol, sus tareas específicas y a quién reporta.

* **Product Owner:**
    * Define la visión y estrategia del producto. 
    * Prioriza el backlog de funcionalidades y mejoras. 
    * Representa la voz del cliente. 
    * Responsable de la aceptación y validación de las características desarrolladas. 
    * **Riesgos que Gestiona:** Baja adopción de usuarios, falta de diferenciación. 

* **Líder de Proyecto:**
    * Facilita el uso de la metodología seleccionada para el seguimiento de las actividades. 
    * Elimina impedimentos para el equipo. 
    * Asegura que el equipo siga las mejores prácticas. 
    * **Riesgos que Gestiona:** Falta de comunicación, estimaciones incorrectas, rotación de personal (ayuda a mitigar). 

* **Equipo de Desarrollo (Front-end, Back-end):**
    * Diseñan, desarrollan, prueban y mantienen la aplicación. 
    * Colaboran en la resolución de problemas técnicos. 
    * Participan activamente en la estimación de tareas. 
    * **Riesgos que Gestionan:** Escalabilidad, sincronización, rendimiento, errores/bugs críticos, riesgos técnicos. 

* **Ingeniero QA (Control de Calidad):**

    * Desarrolla y ejecuta planes de prueba (funcionales, de rendimiento, de seguridad). 
    * Identifica y reporta bugs. 
    * Asegura que el producto final cumpla con los estándares de calidad.
    * **Riesgos que Gestiona:** Errores/Bugs críticos, problemas de sincronización, rendimiento. 

*   **Especialista en Seguridad de la Información:**

    * Diseña e implementa políticas y medidas de seguridad. 
    * Realiza auditorías de seguridad y pruebas de penetración. 
    * Monitorea posibles amenazas y vulnerabilidades. 
    * **Riesgos que Gestiona:** Filtración de datos, vulnerabilidades de autenticación, ataques DDoS. 

