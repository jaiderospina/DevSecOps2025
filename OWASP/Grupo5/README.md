# 🛡️ Análisis de Vulnerabilidades en el OWASP Top 10  
### Métodos de Explotación y Prevención

---

## 🔍 ¿Qué es este proyecto?

Este trabajo tiene como objetivo **explicar de forma sencilla y clara** las 10 vulnerabilidades más críticas en aplicaciones web, según el listado del **OWASP Top 10**. Aprenderás:

- Qué son estas vulnerabilidades.
- Cómo los atacantes pueden explotarlas.
- Qué puedes hacer para prevenirlas.

> **OWASP (Open Web Application Security Project)** es una organización sin fines de lucro que ayuda a mejorar la seguridad del software a través de recursos gratuitos y abiertos.

---

## 📘 Contenido

1. [🔐 ¿Qué es OWASP?](#-qué-es-owasp)
2. [⚠️ Lista de Vulnerabilidades OWASP Top 10](#-lista-de-vulnerabilidades-owasp-top-10)
3. [🧪 Métodos de Explotación](#-métodos-de-explotación)
4. [🛠️ Prevención y Buenas Prácticas](#-prevención-y-buenas-prácticas)
5. [📎 Recursos útiles](#-recursos-útiles)

---

## 🔐 ¿Qué es OWASP?

El **OWASP Top 10** es una lista actualizada regularmente que muestra las vulnerabilidades más comunes y peligrosas en aplicaciones web.

📌 Es útil para:
- Desarrolladores 👩‍💻
- Arquitectos de software 🏗️
- Equipos de seguridad 🔒

📊 Imagen ilustrativa:  
![OWASP Logo](https://owasp.org/assets/images/logo.png)

---

## ⚠️ Lista de Vulnerabilidades OWASP Top 10 (2021)

| N°  | Vulnerabilidad                          | Descripción breve                                                |
|-----|-----------------------------------------|------------------------------------------------------------------|
| A01 | **Broken Access Control**               | Los usuarios pueden acceder a datos o funciones restringidas.    |
| A02 | **Cryptographic Failures**              | Uso incorrecto o débil de la criptografía.                       |
| A03 | **Injection**                           | Inyección de código malicioso (ej: SQL, comandos).               |
| A04 | **Insecure Design**                     | Diseño de software sin considerar la seguridad.                  |
| A05 | **Security Misconfiguration**           | Mala configuración del entorno o la app.                         |
| A06 | **Vulnerable and Outdated Components**  | Uso de librerías inseguras o desactualizadas.                    |
| A07 | **Identification and Authentication Failures** | Problemas con login, sesiones y autenticación.       |
| A08 | **Software and Data Integrity Failures**| Manipulación de datos/software no verificada.                    |
| A09 | **Security Logging and Monitoring Failures** | Falta de registros para detectar ataques.                   |
| A10 | **Server-Side Request Forgery (SSRF)**  | El servidor realiza solicitudes a URLs manipuladas por el atacante. |

**Broken Acces Control:**

![BAC](https://sucuri.net/wp-content/uploads/2023/12/image01-jpg.webp)
***Naturaleza:***

se refiere a la debilidad en los mecanismos que gestionan la autorización y el acceso a recursos o funcionalidades dentro de un sistema.

- Autorización insuficiente o incorrecta: Si los controles de acceso no están bien implementados, un atacante puede eludir los mecanismos de seguridad y obtener acceso a recursos restringidos, modificar datos o ejecutar acciones no permitidas.
- Basado en roles y privilegios: La mayoría de los sistemas implementan Control de Acceso Basado en Roles (RBAC) o controles similares, pero si estos controles no están configurados correctamente, los usuarios pueden ser capaces de realizar acciones fuera de su alcance.

***Causas:***

- Configuración incorrecta o incompleta de los controles de acceso
- Falta de validación en la lógica de autorización.
- Uso de controles de acceso basados únicamente en el cliente.
- Dependencia excesiva de la autenticación.
- Escalación de privilegios sin control.
- Falta de pruebas de seguridad o revisiones de código.
- Manejo deficiente de sesiones.

***Impacto potencial:***

El impacto de Broken Access Control puede ser grave y variado, dependiendo de la naturaleza del sistema y los recursos a los que los atacantes puedan acceder. Algunos de los impactos más importantes incluyen:

- Exposición de información sensible.
- Pérdida de la integridad de los datos.
- Daño a la reputación.
- Exposición a ataques adicionales.

**Cryptographic Failures:**

<p style="text-align: center;">
  <img src="https://cdn.careerhub.students.duke.edu/wp-content/uploads/sites/128/2023/02/509eabf832d5b560c19f08ba93f685b1-1656529950285-480x288-center-middle.jpg?v=153844" alt="Descripción de la imagen" />
</p>

***Naturaleza:***

Las Fallas Criptográficas se producen cuando un sistema no logra proteger adecuadamente los datos mediante mecanismos criptográficos. Esto puede suceder en diversos aspectos de la seguridad, como el cifrado de datos en reposo, en tránsito, o la autenticación mediante claves y certificados. Algunas características clave de esta vulnerabilidad son:

- Cifrado débil o inadecuado.
- Gestión incorrecta de claves
- Uso incorrecto de criptografía.
- Falta de cifrado en datos sensibles.

***Causas:***

- Uso de algoritmos criptográficos obsoletos o inseguros.
- Gestión incorrecta de claves criptográficas.
- No utilizar cifrado para datos sensibles.
- Cifrado mal implementado.
- Uso inapropiado de técnicas criptográficas.
- Inseguridad en la transmisión de datos.

***Impacto potencial:***

- Exposición de datos sensibles.
- Robo de identidades y fraudes.
- Integridad de los datos comprometida.
- Compromiso de autenticación y autorización.
- Violación de la privacidad.
- Cumplimiento normativo comprometido.

**Injection:**

<p style="text-align: center;">
  <img src="https://www.avast.com/hs-fs/hubfs/New_Avast_Academy/SQL%20injection/What%20is%20a%20SQL%20injection.png?width=660&name=What%20is%20a%20SQL%20injection.png" alt="Descripción de la imagen" />
</p>

***Naturaleza:***

La vulnerabilidad de injection ocurre cuando un sistema recibe datos sin validar o sanitizar adecuadamente, lo que permite que esos datos sean tratados como comandos o consultas que el sistema ejecuta sin comprobación.

- SQL Injection (SQLi): Inyección de comandos SQL maliciosos en una consulta a una base de datos.
- OS Command Injection: Ejecución de comandos del sistema operativo a través de parámetros maliciosos.
- XML Injection: Manipulación de solicitudes XML para alterar el comportamiento de la aplicación o hacerle ejecutar comandos no deseados.
- LDAP Injection: Manipulación de consultas a un directorio LDAP.
- Command Injection en aplicaciones web: Manipulación de comandos en aplicaciones que interactúan con el sistema operativo.

***Causas:***

Las causas de la vulnerabilidad de inyección son varias y generalmente están relacionadas con errores en la forma en que una aplicación maneja la entrada del usuario y en cómo interactúa con otras aplicaciones, bases de datos o sistemas.

- Falta de validación de entradas.
- Concatenación de datos de entrada en consultas o comandos.
- Uso de funcionalidades inseguras.
- Falta de preparación de declaraciones o sentencias parametrizadas.
- Falta de filtrado adecuado de caracteres peligrosos.

***Impacto potencial:***

- Acceso no autorizado a datos sensibles.
- Modificación o destrucción de datos.
- Ejecución de código malicioso o comandos del sistema.
- Escalamiento de privilegios.
- Compromiso de la autenticación y autorización.
- Violación de regulaciones y cumplimiento de normas.


**Insecure Design:**

<p style="text-align: center;">
  <img src="https://logique.s3.ap-southeast-1.amazonaws.com/2024/06/insecure-design-adalah.webp" alt="Descripción de la imagen" />
</p>

***Naturaleza:***

La naturaleza de la vulnerabilidad de diseño inseguro está relacionada con la falta de consideraciones de seguridad en las fases iniciales del desarrollo, lo que deja puertas abiertas para que surjan vulnerabilidades en etapas posteriores. Algunos ejemplos de un diseño inseguro pueden incluir:

- Falta de control de acceso adecuado-
- No considerar la criptografía adecuada.
- Superficies de ataque innecesarias.
- Descuido en la privacidad de los datos.
- Falta de validación de entrada.


***Causas:***

La principal causa de la vulnerabilidad de Insecure Design radica en la falta de integración de la seguridad en las etapas iniciales del ciclo de vida del desarrollo de software (SDLC). Algunas causas comunes incluyen:

- Falta de concientización de seguridad en el diseño.
- Presión por el lanzamiento rápido del producto.
- Falta de un proceso formal de revisión de seguridad.
- Diseño centrado en funcionalidad en lugar de en seguridad.
- Inadecuada implementación de controles de acceso y separación de responsabilidades.

***Impacto potencial:***

El impacto de una vulnerabilidad de diseño inseguro puede ser muy amplio y afectará tanto a la seguridad del sistema como a la confianza de los usuarios. Algunos de los impactos más graves incluyen:

- Acceso no autorizado a datos y recursos.
- Exposición de la infraestructura a ataques.
- Compromiso de la privacidad del usuario. 
- Riesgo de cumplimiento normativo.
- Reducción de la confiabilidad y la disponibilidad. 
- Costos más altos a largo plazo.

**Security Misconfiguration:**

<p style="text-align: center;">
  <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh1zO5iUAlHAaipqp__7O-DH5S7Pcg9Qwy7tsCFwLPEXgqDuA6egFyJ1Yv3MWCNvfCcOxWfLRNUCgQ_3obMbGe12M1Z4p5wAyybI_eGjhW30TqKroSj0gkcvXkw-o_eiuYEsXDz0yftM2k/s0/cybersecurity.jpg" alt="Descripción de la imagen" />
</p>

***Naturaleza:***

Es una de las vulnerabilidades más comunes en sistemas informáticos y está clasificada como un riesgo principal en el OWASP Top 10.

***Causas:***


 - Configuraciones por defecto no cambiadas (usuarios, contraseñas, puertos abiertos).
 - Funciones innecesarias habilitadas, como servicios, puertos o privilegios.
 - Mensajes de error detallados expuestos públicamente (stack traces).
 - Falta de parches o actualizaciones en componentes del sistema. 
 - Permisos mal asignados en archivos, carpetas o recursos.
 - Mala configuración de firewalls, CORS, headers HTTP, etc.
 - Paneles de administración expuestos sin autenticación fuerte.

***Impacto potencial:***

Un atacante puede aprovecharse de una mala configuración para:

 - Acceder a información confidencial o sensible.
 - Ejecutar código malicioso en el sistema.
 - Escalar privilegios y tomar control de la infraestructura.
 - Moverse lateralmente dentro de la red.
 - Inyectar malware, ransomware o causar denegación de servicio (DoS).
 - Comprometer la reputación de la organización.


**Vulnerable and Outdated Components:**

<p style="text-align: center;">
  <img src="https://img.freepik.com/vector-premium/ciberseguridad-concepto-ciberseguridad-proteccion-datos-elementos-graficos-diseno-plano-moderno-web_662353-134.jpg?w=1380" alt="Descripción de la imagen" />
</p>

***Naturaleza:***

Esta vulnerabilidad ocurre cuando una aplicación utiliza librerías, frameworks, módulos, plugins o sistemas operativos que están desactualizados o tienen vulnerabilidades conocidas y no han sido corregidas.
***Causas:***


 - Falta de gestión de dependencias (no saber qué versiones están en uso).
 - No aplicar parches o actualizaciones de seguridad a tiempo.
 - Uso de software sin mantenimiento o con soporte finalizado (EOL).
 - Dependencia excesiva de paquetes de terceros sin auditoría previa.
 - Ausencia de herramientas automáticas para detectar versiones inseguras.
 - Ignorar alertas de seguridad de proveedores o comunidades (como NVD, GitHub Security Advisories, etc.).



***Impacto potencial:***

El uso de componentes vulnerables puede permitir a un atacante:

 - Ejecutar código remoto en el sistema (RCE).
 - Robar datos sensibles mediante exploits conocidos.
 - Romper la autenticación o el cifrado de la app.
 - Escalar privilegios dentro del entorno.
 - Comprometer toda la cadena de suministro (supply chain attack).
 - Explotar vulnerabilidades automáticamente mediante bots o scripts disponibles públicamente.

**Identification and Authentication Failures:**

<p style="text-align: center;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4nxhJi0BPkaXyvt5YekMLkOMdrA3J2rehsA&s" alt="Descripción de la imagen" />
</p>

***Naturaleza:***

Esta vulnerabilidad se refiere a errores o debilidades en los mecanismos de identificación (saber quién eres) y autenticación (verificar que realmente eres tú), que permiten a atacantes suplantar identidades, eludir la autenticación o acceder sin permiso a sistemas protegidos.

***Causas:***


 - Contraseñas débiles o por defecto sin políticas de complejidad.
 - Falta de autenticación multifactor (MFA).
 - Gestión insegura de sesiones (tokens no expiran, no se invalidan).
 - Brute force o credential stuffing sin protección.
 - Identificadores predecibles (ej. usar el email como único factor).
 - Implementación casera de autenticación sin estándares (evitar reinventar el login).
 - Mal manejo de credenciales almacenadas (en texto plano o sin cifrado).
 - Tokens JWT mal configurados (sin expiración, sin verificación de firma).



***Impacto potencial:***

Si un atacante explota este tipo de fallo, puede:

 - Acceder a cuentas de otros usuarios (Account Takeover).
 - Escalar privilegios y tomar control del sistema.
 - Omitir controles de acceso y leer, modificar o borrar datos.
 - Lanzar ataques desde cuentas legítimas (invisibilidad del atacante).
 - Violar la privacidad y confidencialidad de usuarios o datos sensibles.

**Software and Data Integrity Failures:**

<p style="text-align: center;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQo_ZhzK9PoMTxUG7zCIltVbvIUVRzZ-BHMPA&s" alt="Descripción de la imagen" />
</p>

***Naturaleza:***

Esta vulnerabilidad se refiere a la falta de verificación de la integridad del software, datos o procesos críticos. Esto incluye confiar ciegamente en actualizaciones, plugins, bibliotecas o scripts sin comprobar su autenticidad o integridad, lo que puede llevar a una comprometida cadena de suministro.

***Causas:***


 - Uso de componentes sin verificación de firma digital.
 - Actualizaciones automáticas sin validación del origen o contenido.
 - Repositorios comprometidos (ej. npm, PyPI).
 - Falta de control sobre pipelines de CI/CD, donde cualquier desarrollador puede modificar procesos sensibles.
 - Carga dinámica de código (eval, plugins, scripts remotos) sin validación.
 - Despliegues inseguros que no validan integridad de archivos o imágenes de contenedor.
 - Inyección en configuraciones o archivos de infraestructura como código (IaC).



***Impacto potencial:***

Explotar estas fallas puede permitir a un atacante:

 - Insertar código malicioso durante actualizaciones o despliegues.
 - Contaminar el entorno de desarrollo o producción (ataques a la cadena de suministro).
 - Distribuir malware desde paquetes legítimos.
 - Alterar archivos o datos críticos (configuraciones, scripts, bases de datos).
 - Comprometer la integridad de builds, contenedores o imágenes.

**Security Logging and Monitoring Failures:**

<p style="text-align: center;">
  <img src="https://latam.kaspersky.com/content/es-mx/images/repository/isc/2021/internet-laws-1.jpg" alt="Descripción de la imagen" />
</p>

***Naturaleza:***

Este tipo de vulnerabilidad se refiere a la falta de registros de seguridad adecuados, monitoreo en tiempo real y alertas ante eventos sospechosos o maliciosos. Si un sistema no registra lo que sucede o no reacciona ante actividades anómalas, los ataques pueden pasar desapercibidos por mucho tiempo.

***Causas:***


 - No registrar eventos críticos (intentos de login fallidos, cambios de configuración, accesos no autorizados).
 - Logs incompletos o mal estructurados que dificultan el análisis.
 - Logs almacenados localmente sin protección, fácilmente alterables o borrables.
 - Falta de correlación entre eventos de diferentes fuentes (aplicación, sistema operativo, firewall).
 - Ausencia de alertas automáticas o integración con SIEM (como Splunk, ELK, etc.).
 - No se revisan los logs periódicamente o solo tras un incidente.
 - Exposición de logs sensibles (contraseñas, tokens, PII).



***Impacto potencial:***

Sin un buen sistema de logging y monitoreo, un atacante puede:

 - Permanecer oculto durante días, semanas o meses (ataques persistentes).
 - Burlar los sistemas de defensa sin dejar rastro útil para forenses.
 - Robar información confidencial sin ser detectado.
 - Causar daños mayores antes de que alguien lo note (ransomware, exfiltración de datos).
 - Evitar ser rastreado gracias a la falta de evidencia.


**Server-Side Request Forgery (SSRF):**

<p style="text-align: center;">
  <img src="https://aprendelibvrefiles.blob.core.windows.net/aprendelibvre-container/course/seguridad_en_internet/image/consejos-para-menores-en-web_xl.png" alt="Descripción de la imagen" />
</p>

***Naturaleza:***

Server-Side Request Forgery (SSRF) ocurre cuando una aplicación web permite que un atacante haga que el servidor realice solicitudes HTTP o de red a recursos internos o externos sin validación adecuada. El atacante manipula la URL o destino de una solicitud para redireccionar el tráfico del servidor hacia lugares que no debería alcanzar.

***Causas:***

 - Validación insuficiente de URLs proporcionadas por el usuario.
 - Aplicaciones que obtienen recursos externos (PDFs, imágenes, APIs, etc.) sin filtrar la entrada.
 - Microservicios o sistemas internos con endpoints accesibles por el servidor, pero no por el usuario.
 - Conexiones automáticas a URLs configurables (webhooks, integraciones, etc.).
 - Dependencia excesiva de IPs o DNS no verificados.
 - Servicios que aceptan parámetros de URL remotos



***Impacto potencial:***

Un SSRF puede permitir a un atacante:

 - Escanear la red interna (port scanning).
 - Acceder a servicios internos no expuestos al público (ej. bases de datos, servidores de metadata como AWS EC2).
 - Filtrar datos internos o secretos (tokens, claves, variables de entorno).
 - Realizar ataques de denegación de servicio.
 - Tomar control de servidores internos mediante servicios mal protegidos.
 - Acceder a metadata cloud


📌 Imagen de ejemplo:  
![OWASP Top 10 2021](https://esgeeks.com/wp-content/uploads/2023/01/OWASP-Top-10-actualizado-2021.jpg)

---

## 🧪 Métodos de Explotación

Para cada vulnerabilidad se presentan ejemplos de cómo puede ser explotada:

- **SQL Injection**: El atacante inserta código SQL malicioso en formularios o URLs.
- **Broken Access Control**: Acceso a páginas restringidas mediante modificación de URLs.
- **Insecure Design**: Falta de validaciones permite comportamientos no deseados.
- **Vulnerable and Outdated Components**: Dependencias, frameworks o bibliotecas obsoletos o con vulnerabilidades conocidas, pero que siguen utilizándose en una aplicación . Falta de parches. Software sin soporte.
- **Cryptographic Failures** : Se centran en la manipulación o eludir la seguridad de las aplicaciones web al explotar debilidades en la implementación criptográfica. Estos métodos incluyen ataques de fuerza bruta, ataques de texto plano conocido, ataques de hombre en el medio, y el uso de algoritmos criptográficos débiles o en desuso.
- **Security Misconfiguration** : Implica aprovechar fallas en la configuración de una aplicación para obtener acceso no autorizado, elevar privilegios o comprometer la integridad del sistema.
- **Identification and Authentication Failures** : Debilidades en la forma en que una aplicación web maneja la identificación y autenticación de usuarios. Esto puede permitir a atacantes suplantar la identidad de usuarios, acceder a recursos protegidos o comprometer la integridad de la aplicación. 
- **Software and Data Integrity Failures** : Se pueden llegar a explotar cuando un atacante manipula, modifica o elimina datos sin autorización, o cuando la aplicación no verifica la integridad de los datos o software. Esto puede ocurrir a través de varias técnicas, incluyendo la manipulación de datos, el uso de actualizaciones no verificadas, o la inyección de código malicioso. 
- **Security Logging and Monitoring Failures** : Estos fallos pueden impedir que los operadores detecten rápidamente intrusiones o ataques, lo que puede permitir que los atacantes permanezcan en el sistema durante un tiempo prolongado, causando mayor daño.
- **Server-Side Request Forgery (SSRF)** : Implica manipular una aplicación web o API para que realice solicitudes HTTP a recursos internos o externos no autorizados, utilizando la funcionalidad del servidor en lugar del cliente. Esto puede ocurrir cuando la aplicación no valida o depura adecuadamente las URL o datos de entrada proporcionados por el usuario.
  
> 🔧 Herramientas comunes:
> - [Burp Suite](https://portswigger.net/burp)
> - [OWASP ZAP](https://owasp.org/www-project-zap/)
> - [SQLMap](https://github.com/sqlmapproject/sqlmap)

---

## 🛠️ Prevención y Buenas Prácticas

| Vulnerabilidad             | Recomendaciones clave                                                   |
|----------------------------|--------------------------------------------------------------------------|
| Broken Access Control      | Valida siempre roles y permisos del usuario.                           |
| Cryptographic Failures     | Usa algoritmos seguros (ej: AES, bcrypt), nunca reinventes la rueda.    |
| Injection                  | Usa consultas preparadas (Prepared Statements).                         |
| Security Misconfiguration  | Elimina funciones por defecto, actualiza todo regularmente.             |
| Vulnerable and Outdated Components | Automatización del Ciclo de Actualización                       |
| Identification and Authentication Failures	| Implementar Autenticación Multifactor (MFA)             |
| Software and Data Integrity Failures	| Implementar Firmas Digitales y Hashing                        |
| Server-Side Request Forgery (SSRF)	| Registros y Auditoría de Actividad                              |
| Security Logging and Monitoring Failures	| Implementación de Monitoreo Continuo                     |
| Outdated Components        | Usa herramientas como Dependabot para actualizar dependencias.          |


🎯 Buenas prácticas generales:
- Usa autenticación fuerte (2FA).
- Valida entrada de usuario siempre.
- Configura correctamente los servidores.
- Haz pentesting regularmente.

---

## 📎 Recursos útiles

- [OWASP Top 10 (sitio oficial)](https://owasp.org/www-project-top-ten/)
- [Guía de Prevención OWASP Cheat Sheet Series](https://cheatsheetseries.owasp.org/)
- [OWASP ZAP para pruebas de seguridad](https://owasp.org/www-project-zap/)
- [PortSwigger Web Security Academy](https://portswigger.net/web-security)

---

## 🧑‍🎓 Autores Grupo 5

- Calvera Chaparro Yesith Alonso
- Gutierrez Florez Alfredo Jose
- Cruz Rojas Andres Felipe
- Mena Vargas Yeikin Andres
- Rodriguez Arguello Angel Eduardo
