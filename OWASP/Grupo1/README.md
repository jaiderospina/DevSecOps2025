# Grupo1

# OWASP Top 10 - Protegiendo Nuestras Aplicaciones Web

### Las 10 Amenazas Más Críticas para la Seguridad de Aplicaciones Web

![owasp logo](https://www.tanaakk.com/wp-content/uploads/2021/09/owasp-logo.png)

### ¿Qué es OWASP?

**OWASP** Open Web Application Security Project (Proyecto Abierto de Seguridad de Aplicaciones Web).

- Es una fundación global sin fines de lucro dedicada a mejorar la seguridad del software.
- Formada por decenas de miles de miembros: corporaciones, organizaciones educativas y particulares de todo el mundo. Expertos en seguridad, desarrolladores, arquitectos, etc.

  **Misión:** Hacer la seguridad de las aplicaciones visible, para que individuos y organizaciones puedan tomar decisiones informadas sobre los verdaderos riesgos de seguridad.

- Crean y mantienen herramientas, documentos, foros y capítulos locales. Todo su material es **gratuito y de código abierto**.

## ¿Qué es el Proyecto OWASP Top 10?

- Es un documento estándar para desarrolladores y seguridad de aplicaciones web.
- Basado en análisis de datos de vulnerabilidades encontradas en miles de aplicaciones y encuestas a expertos en seguridad.
- Sirve como una guía fundamental para saber por dónde empezar a asegurar una aplicación web. Es un _mínimo_ estándar, no una lista exhaustiva.

A continuación, se presenta un resumen de los riesgos identificados en la versión más reciente (OWASP Top 10 - 2021):

## OWASP Top 10 - Lista 2021

- **A01:** Broken Access Control (Pérdida de Control de Acceso)
- **A02:** Cryptographic Failures (Fallos Criptográficos)
- **A03:** Injection (Inyección)
- **A04:** Insecure Design (Diseño Inseguro)
- **A05:** Security Misconfiguration (Configuración de Seguridad Incorrecta)
- **A06:** Vulnerable and Outdated Components (Componentes Vulnerables y Desactualizados)
- **A07:** Identification and Authentication Failures (Fallos de Identificación y Autenticación)
- **A08:** Software and Data Integrity Failures (Fallos de Integridad de Software y Datos)
- **A09:** Security Logging and Monitoring Failures (Fallos de Registro y Monitoreo de Seguridad)
- **A10:** Server-Side Request Forgery (SSRF) (Falsificación de Solicitudes del Lado del Servidor)

#### 1. **A01:2021 - Pérdida de Control de Acceso**

Hace referencia un sistema que controla el acceso a la información o a la funcionalidad. Los controles de acceso que no funcionan permiten a los atacantes saltarse la autorización y realizar tareas como si fueran usuarios privilegiados, como los administradores. Por ejemplo, una aplicación web podría permitir que un usuario cambiara la cuenta con la que ha iniciado sesión con solo cambiar parte de una url, sin ninguna otra verificación.

##### **Ejemplo:**

- Un usuario modifica la URL de `verPerfil.jsp?id=123` a `verPerfil.jsp?id=456` y logra ver el perfil de otro usuario sin que la aplicación verifique si tiene permiso para hacerlo. O un usuario normal accede a una página de administración (`/admin`) simplemente conociendo la URL.

##### **Remediacion**

- Implementar mecanismos de control de acceso **en el lado del servidor**, nunca confiando en el cliente.
- Denegar el acceso por defecto.
- Verificar los permisos en cada solicitud que accede a datos o funciones sensibles.

#### 2. **A02:2021 - Fallas Criptográficas**

Se centra en las fallas relacionadas con la criptografía (o la falta de ésta). Esto a menudo conduce a la exposición de datos sensibles o al compromiso del sistema.

##### **Ejemplo**

- Almacenar contraseñas en texto plano o con algoritmos de hash obsoletos (como MD5 sin salt). Transmitir datos sensibles (tarjetas de crédito, datos personales) sobre HTTP en lugar de HTTPS. Usar protocolos TLS antiguos (TLS 1.0, 1.1) o cifrados débiles.

##### **Remediacion**

- Cifrar todos los datos sensibles en tránsito (HTTPS con configuración moderna) y en reposo (cifrado a nivel de base de datos o archivo).
- Usar algoritmos criptográficos fuertes y actualizados (Hashing con salt como Argon2, bcrypt; cifrado AES).
- Gestionar las claves criptográficas de forma segura.

#### 3. **A03:2021 - Inyección**

Las fallas de inyección ocurren cuando los atacantes insertan datos no confiables u hostiles en lenguajes de comando o consulta, o cuando la aplicación no valida, filtra

##### **Ejemplo**

- En un formulario de login, un atacante ingresa `' OR '1'='1` en el campo de nombre de usuario. Si la aplicación concatena directamente esta entrada en una consulta SQL, podría autenticar al atacante sin una contraseña válida.

##### **Remediacion**

- La principal: Usar APIs seguras que eviten el uso del intérprete directamente, como **Prepared Statements** (consultas parametrizadas) para SQL.
- Validar y "sanitizar" (limpiar) toda entrada del usuario en el lado del servidor.
- Utilizar codificación de salida (Output Encoding) adecuada para evitar XSS (Cross-Site Scripting), que es otro tipo de inyección.

#### 4. **A04:2021 - Diseño Inseguro**

Se trata de una categoría amplia que representa diferentes debilidades, expresadas como controles de seguridad faltantes o ineficaces y fallas arquitectónicas. Estas fallas pueden ocurrir cuando una aplicación está diseñada para depender de procesos que son inherentemente inseguros o cuando no se implementan los controles de seguridad necesarios para defenderse contra ataques específicos.

##### **Ejemplo**

- Un sistema de recuperación de contraseña que envía la contraseña antigua por correo en lugar de un token de reseteo seguro. Una lógica de negocio que permite transferir fondos sin suficientes validaciones de saldo o identidad. No limitar los intentos de login, permitiendo ataques de fuerza bruta fácilmente.

##### **remediacion**

- Integrar la seguridad desde las fases iniciales del desarrollo (Secure Software Development Lifecycle - SSDLC).
- Realizar **Modelado de Amenazas (Threat Modeling)** para identificar fallos de diseño.
- Usar patrones de diseño seguros y bibliotecas de componentes seguras.
- Separar lógicas y aplicar el principio de mínimo privilegio en la arquitectura.

#### 5. **A05:2021 - Configuración de Seguridad Incorrecta**

La falta de refuerzo de la seguridad en los marcos de aplicación web, plataformas, servidores o controles de seguridad puede dar lugar a acceso no autorizado, exposición de información confidencial u otras vulnerabilidades de seguridad.

##### **Ejemplo**

- Dejar habilitadas cuentas de administrador con contraseñas por defecto (`admin/password`). Listado de directorios habilitado en el servidor web. Mensajes de error excesivamente detallados que revelan información interna (stack traces). Permisos de almacenamiento en la nube (como buckets S3) demasiado abiertos.

##### **Remediacion**

- Establecer un proceso de **hardening** (aseguramiento) para todos los componentes.
- Eliminar o deshabilitar características y servicios innecesarios.
- Cambiar todas las credenciales por defecto.
- Configurar adecuadamente el manejo de errores y los permisos.
- Automatizar la verificación de configuraciones seguras.

#### 6. **A06:2021 - Componentes Vulnerables y Desactualizados**

El uso de componentes obsoletos, sin parches o vulnerables, como bibliotecas, marcos o complementos, puede exponer las aplicaciones a fallas de seguridad conocidas, lo que aumenta el riesgo de explotación. Estos riesgos pueden resultar de un software no compatible o desactualizado, incluido el sistema operativo (SO), el servidor web/ de aplicación , el sistema de administración de bases de datos (DBMS), las aplicaciones, las API y todos los componentes, entornos de ejecución y bibliotecas.

##### **Ejemplo**

- Usar una versión antigua de una librería JavaScript (como jQuery) con una vulnerabilidad XSS conocida. Utilizar un framework de backend (como Struts, Spring, .NET) sin los últimos parches de seguridad. Correr la aplicación sobre un servidor web (Apache, Nginx) o sistema operativo no actualizado.

##### **Remediacion**

- Mantener un **inventario** de todos los componentes y sus versiones.
- Monitorizar fuentes de vulnerabilidades (CVEs, bases de datos de vulnerabilidades).
- **Actualizar y parchear** regularmente todos los componentes.
- Utilizar herramientas de Análisis de Composición de Software (SCA) para detectar componentes vulnerables.
- Eliminar componentes no utilizados.

#### 7. **A07:2021 - Fallas de Identificación y Autenticación**

Las debilidades en la autenticación, la identidad y la gestión de sesiones pueden permitir a los atacantes comprometer cuentas de usuario, contraseñas, tokens de sesión o explotar un manejo inseguro de sesiones.

#### **Ejemplo**

- Permitir contraseñas débiles o comunes. No implementar protección contra ataques de fuerza bruta (múltiples intentos de login). Enviar IDs de sesión en la URL (visibles en logs, historial). No invalidar correctamente las sesiones al cerrar sesión o tras un periodo de inactividad. No usar Autenticación Multi-Factor (MFA).

##### **Remediacion**

- Implementar políticas de contraseñas fuertes y MFA.
- Limitar o retrasar los intentos de login fallidos.
- Generar IDs de sesión largos, aleatorios y seguros; protegerlos adecuadamente (no en URL, usar `HttpOnly`, `Secure`).
- Invalidar sesiones correctamente.

#### 8. **A08:2021 - Fallas en el Software y en la Integridad de los Datos**

Estas vulnerabilidades son resultado de códigos y de infraestructuras de aplicacines que no protegen contra violaciones de integridad de los datos y del software. Esto puede ocurrir cuando una aplicación depende de complementos, bibliotecas o módulos de fuentes, repositorios y CDN no confiables.

##### **Ejemplo**

- Una aplicación que actualiza sus dependencias automáticamente desde repositorios públicos sin verificar las firmas digitales de los paquetes. Una aplicación que recibe objetos serializados de un cliente y los deserializa sin validar, lo que podría permitir Ejecución Remota de Código (RCE).

##### **Remediacion**

- Usar firmas digitales o mecanismos similares para verificar la integridad del software o datos que se reciben.
- Asegurar la cadena de suministro de software (pipeline CI/CD).
- **Evitar la deserialización de datos provenientes de fuentes no confiables**. Si es necesario, implementarla con precaución, usando tipos de datos estrictos y validaciones.

#### 9. **A09:2021 - Fallas en el Registro y Monitoreo**

Un registro y una supervisión inadecuados pueden dificultar la detección y la respuesta oportunas a incidentes de seguridad, lo que dificulta la identificación y mitigación de ataques o actividades no autorizadas. Esto puede significar que los eventos auditables, como inicios de sesión, inicios de sesión fallidos y transacciones de alto valor, no se identifican ni registran, y que las aplicaciones no detectan ataques activos en tiempo real.

##### **Ejemplo**

- No registrar eventos importantes como logins (exitosos y fallidos), fallos de control de acceso, cambios de contraseña, transacciones de alto valor. Generar logs pero no monitorizarlos ni tener alertas configuradas para actividades sospechosas. Logs que no incluyen información útil (IP origen, usuario, timestamp, qué ocurrió).

##### _Remediacion_

- Registrar todos los eventos relevantes para la seguridad con suficiente contexto.
- Asegurar que los logs tengan un formato consistente y fácil de analizar.
- Proteger los logs contra modificaciones o borrado.
- Implementar herramientas de monitoreo y alerta (como SIEM - Security Information and Event Management).
- Establecer planes de respuesta a incidentes y probarlos.

#### 10. **A10:2021 - Falsificación de Solicitudes del Lado del Servidor**

Estas vulnerabilidades ocurren cuando una aplicación no valida o desinfecta una URL ingresada por un usuario antes de extraer datos de un recurso remoto. Los atacantes pueden usar estas fallas para obligar a las aplicaciones a acceder a destinos web maliciosos incluso si están protegidas por un firewall u otra defensa.

##### **Ejemplo**

- Una función que permite importar una imagen desde una URL. El atacante introduce una URL interna como `http://localhost/admin` o `http://169.254.169.254/latest/meta-data/` (en entornos cloud para obtener metadatos de la instancia). El servidor realiza la petición y puede exponer información interna.

##### _Remediacion_

- **Validar y sanitizar** estrictamente todas las URLs proporcionadas por el usuario.
- Implementar **listas blancas (allow-lists)** de protocolos (HTTP/S), dominios e IPs a los que la aplicación puede conectarse. Denegar todo lo demás.
- Deshabilitar redirecciones HTTP si no son necesarias para la funcionalidad.
- Si es posible, aislar la funcionalidad que realiza estas peticiones en una red separada con menos privilegios.

#### ¿Por qué es importante?

- Ayuda a los desarrolladores a identificar y mitigar los riesgos de seguridad más críticos para las aplicaciones.
- Ayuda a crear conciencia sobre las vulnerabilidades de seguridad.
- Contribuye a crear una cultura de seguridad global.
- Impacta en estándares de la industria y regulaciones de cumplimiento

---

[Documentación oficial de owasp](https://owasp.org/Top10/es/)

### Integrantes del Grupo

- Johany Castro
- Jhon Alexander Pinto
- Heriberto Tirado Pinzón
- Juan Pablo Ramírez
- Edwin Mauricio Herrera
