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
  <img src="data:image/jpeg;base64,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" alt="Descripción de la imagen" />
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
