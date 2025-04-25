# Trabajo del Grupo 3



## Tema: OWASP Top 10 – Principales Riesgos de Seguridad en Aplicaciones Web
![Diagrama DevSecOps](https://images.vnetwork.vn/resize?width=1920&compression=5&quality=75&url=https%3A%2F%2Fstatic.vncdn.vn%2Fvnetwork.vn%2Fpub%2Fwebsites%2Fuploads%2F3%2Fowasp-va-cach-ngan-chan-top-10-lo-hong-bao-mat-owasp-moi-nhat.jpg)
### - Desarrollo del Tema

El **OWASP Top 10** es una lista reconocida a nivel mundial que identifica los 10 principales riesgos de seguridad en aplicaciones web. Es mantenida por la comunidad de OWASP (Open Worldwide Application Security Project) y sirve como referencia para desarrolladores, analistas y equipos de seguridad.

Nació como un proyecto colaborativo para compartir buenas prácticas en desarrollo seguro.

---
### - Historia de OWASP

Fundada en 2001 con el objetivo de mejorar la seguridad del software.

### **Línea del tiempo de OWASP:**

**2001 – Fundación de OWASP:**
Creado por Mark Curphey , con el objetivo de ofrecer recursos gratuitos y abiertos relacionados con la seguridad en aplicaciones web.

**2003 – Primer Top 10 de OWASP:**
Publicación inicial del OWASP Top 10 , una lista de las 10 principales vulnerabilidades de seguridad en aplicaciones web.

**2004-2007 – Expansión global:**
Creación de capítulos locales en distintas ciudades y países.
Se realizaron los primeros OWASP AppSec Conferences.
Se lanzan herramientas como WebGoat , una aplicación vulnerable intencionadamente para fines de enseñanza.
Se convirtió en un estándar de facto en la industria para comprender y mitigar los riesgos críticos.

**2010-2013 – Consolidación como referencia en la industria:**
OWASP Top 10 se actualiza regularmente (2010 y 2013).
OWASP gana aún más tracción entre desarrolladores, empresas y gobiernos.

**2015-2021 – Más proyectos y educación:**
Se amplía el catálogo de proyectos OWASP:
OWASP ZAP (herramienta de análisis dinámico de seguridad).
ASVS (Estándar de verificación de seguridad de aplicaciones).
Hojas de trucos , Guía de pruebas , entre otros.
Se actualiza el Top 10 en 2017 y luego en 2021 , reflejando las nuevas tendencias en amenazas como APIs inseguras o fallos en la arquitectura.

---
### - A continuación, se presenta un resumen de los riesgos identificados en la versión más reciente (OWASP Top 10 - 2021):
---
### 1. **Broken Access Control:**
Fallas que permiten a los usuarios actuar fuera de sus permisos, como acceder a datos o funciones restringidas.

#### **Descripción :** 
Ocurre cuando los usuarios pueden actuar fuera de sus permisos previstos.
#### **Causas :**
Falta de validación en el servidor, controles de acceso mal configurados.
#### **Impacto :**
Acceso no autorizado a datos o funciones administrativas.

### **Métodos de explotación :**
Modificación de la URL (por ejemplo, cambiar el ID en una ruta).
Uso de herramientas como Burp Suite para manipular aplicaciones.

### **Mitigación :** 
- Aplicar control de acceso en el servidor.
- Seguir el principio de menor privilegio.
- Validación y autorización robusta en cada solicitud.
---
#### 2. **Cryptographic Failures:**
Problemas relacionados con la protección de datos, como el uso de algoritmos débiles o mala gestión de claves.

#### **Descripción :**
Uso incorrecto o débil de criptografía.
#### **Causas :**
Algoritmos inseguros, falta de cifrado de datos sensibles.
#### **Impacto :**
Pérdida de confidencialidad e integridad.

### **Métodos de explotación :**
Ataques de fuerza bruta sobre hashes débiles.
Robo de datos debido a falta de cifrado en tránsito (por ejemplo, uso de HTTP en vez de HTTPS).

### **Mitigación :**
- Usar HTTPS.
- Evitar algoritmos como MD5 o SHA1.
- Cifrar todos los datos sensibles en tránsito y en reposo.
---
#### 3. **Injection:**
Ataques como SQL Injection que permiten ejecutar comandos maliciosos a través de entradas no validadas.
---
#### 4. **Insecure Design:**
Diseños de sistemas que no consideran la seguridad desde el inicio del desarrollo.
---
#### 5. **Security Misconfiguration:** 
#Configuraciones inseguras en servidores, frameworks o software que abren puertas a atacantes.

La configuración incorrecta de seguridad se refiere a vulnerabilidades derivadas de configuraciones incorrectas en aplicaciones web, servidores, bases de datos u otros componentes de una infraestructura de TI. Estas configuraciones incorrectas pueden ocurrir en cualquier nivel de la pila de aplicaciones, incluyendo configuraciones predeterminadas, funciones innecesarias o controles de seguridad deficientes, como contraseñas predeterminadas o instancias de bases de datos abiertas. Cuando los sistemas no están configurados de forma segura, se vuelven vulnerables a ataques, lo que permite accesos no autorizados, filtraciones de datos y otros incidentes de seguridad. Una configuración correcta es crucial para mantener la integridad, la confidencialidad y la disponibilidad de una aplicación.
![image](https://github.com/user-attachments/assets/0ad91434-0578-4fed-a371-ac745c5d5f68)

---
#### 6. **Vulnerable and Outdated Components:**
Uso de librerías, dependencias o sistemas obsoletos con vulnerabilidades conocidas.
---
#### 7. **Identification and Authentication Failures:**
Errores en la autenticación de usuarios que pueden permitir suplantación de identidad.
---
#### 8. **Software and Data Integrity Failures:**
Falta de validación de integridad del software o datos, como actualizaciones no verificadas.
---
#### 9. **Security Logging and Monitoring Failures:**
(Fallas de registro y monitoreo de seguridad), 
Las fallas de registro y monitoreo de seguridad son vulnerabilidades que pueden ocurrir cuando un sistema o aplicación no registra o monitorea correctamente los eventos de seguridad. Esto puede permitir que atacantes obtengan acceso no autorizado a sistemas y datos sin ser detectados. 

![Monitoreo](Screenshot_3.png)

##### **Mitigación**

- Registrar todos los eventos de aplicacion
- Proteger los eventos logs contra posibles atacantes
- Establecer alertas para todo tipo de evento dentro de app.
---
#### 10. **Server-Side Request Forgery (SSRF):**
(Falsificación de solicitud del lado del servidor), 
En un ataque de Falsificación de Solicitudes del Lado del Servidor (SSRF), el atacante puede proporcionar o manipular una URL para que el código ejecutado en el servidor lea y envíe datos a una ubicación elegida por el atacante. Esta vulnerabilidad puede resultar en el robo o pérdida de datos e información sensible, ya que el atacante puede conectarse a servicios internos de la organización y a sistemas externos no deseados.

![Monitoreo](https://blog.hackmetrix.com/wp-content/uploads/2021/06/hackmetrix_que_es_ssrf_server_side_request_forgery.png)

##### **Mitigación**
- Establecer una URL fija
- Incluir en una lista blanca el nombre, las direcciones IP o los nombres DNS
- Implementar reglas de Firewall que eviten el tráfico no deseado entre servidores


---

#### ¿Por qué es importante?

- Proteger aplicaciones web ante los riesgos más comunes y peligrosos.
- Cumplir con normativas y estándares de seguridad.
- Concientizar a los desarrolladores y fomentar buenas prácticas de codificación segura.

---

[Documentación oficial de owasp](https://owasp.org/www-project-devsecops-guideline/)

---
> "La seguridad no es un producto, es un proceso." - Bruce Schneier
---

[Ver video sobre owasp](https://www.youtube.com/watch?v=vf9Waxh3I04)

----



---

### Integrantes del Grupo

- Sara Sofía  
- Juan Camilo  
- Yonatan Castellanos  
- Luis Alejandro  
- Marlon Artunduaga
