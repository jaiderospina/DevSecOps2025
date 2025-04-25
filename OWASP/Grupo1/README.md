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

![Image](https://github.com/user-attachments/assets/9be0c6e5-3fb8-4f80-8fae-3b46ea73608b)


#### 1. **A01:2021 - Pérdida de Control de Acceso**

Hace referencia un sistema que controla el acceso a la información o a la funcionalidad. Los controles de acceso que no funcionan permiten a los atacantes saltarse la autorización y realizar tareas como si fueran usuarios privilegiados, como los administradores. Por ejemplo, una aplicación web podría permitir que un usuario cambiara la cuenta con la que ha iniciado sesión con solo cambiar parte de una url, sin ninguna otra verificación.

![Image](https://github.com/user-attachments/assets/1410c612-cbd8-4fda-ae44-b4064d3c8c8c)

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

Resumen
La Inyección desciende a la tercera posición. El 94% de las aplicaciones fueron probadas para algún tipo de inyección con una tasa de incidencia máxima del 19%, una tasa de incidencia promedio del 3% y 274.000 ocurrencias. Las CWE incluidas son CWE-79: Secuencia de Comandos en Sitios Cruzados (XSS), CWE-89: Inyección SQL, y la CWE-73:Control Externo de Nombre de archivos o ruta.

Descripción
Una aplicación es vulnerable a estos tipos de ataque cuando:

Los datos proporcionados por el usuario no son validados, filtrados ni sanitizados por la aplicación.

Se invocan consultas dinámicas o no parametrizadas, sin codificar los parámetros de forma acorde al contexto.

Se utilizan datos dañinos dentro de los parámetros de búsqueda en consultas Object-Relational Mapping (ORM), para extraer registros adicionales sensibles.

Se utilizan datos dañinos directamente o se concatenan, de modo que el SQL o comando resultante contiene datos y estructuras con consultas dinámicas, comandos o procedimientos almacenados.

##### **Ejemplo**

- En un formulario de login, un atacante ingresa `' OR '1'='1` en el campo de nombre de usuario. Si la aplicación concatena directamente esta entrada en una consulta SQL, podría autenticar al atacante sin una contraseña válida.

##### **Remediacion**

- La principal: Usar APIs seguras que eviten el uso del intérprete directamente, como **Prepared Statements** (consultas parametrizadas) para SQL.
- Validar y "sanitizar" (limpiar) toda entrada del usuario en el lado del servidor.
- Utilizar codificación de salida (Output Encoding) adecuada para evitar XSS (Cross-Site Scripting), que es otro tipo de inyección.

#### 4. **A04:2021 - Diseño Inseguro**

Resumen
Una nueva categoría en la versión 2021. se centra en los riesgos relacionados con el diseño y las fallas arquitectónicas, exhortando a un mayor uso de: modelado de amenazas, patrones de diseño seguros y arquitecturas de referencia. Como comunidad, debemos ir más allá de la codificación y adoptar actividades cruciales para obtener Seguridad por Diseño. Debemos "mover a la izquierda" del proceso de desarrollo las actividades de seguridad. Las CWE notables incluidas son CWE-209: Generación de mensaje de error que contiene información confidencial, CWE-256: Almacenamiento desprotegido de credenciales, CWE-501: Violación de las fronteras de confianza y CWE-522: Credenciales protegidas insuficientemente.

Descripción
El diseño inseguro es una categoría amplia que representa diferentes debilidades, expresadas como "diseño de control faltante o ineficaz". El diseño inseguro no es la fuente de las otras 10 categorías. Existe una diferencia entre un diseño inseguro y una implementación insegura. Distinguimos entre fallas de diseño y defectos de implementación por un motivo, difieren en la causa raíz y remediaciones. Incluso un diseño seguro puede tener defectos de implementación que conduzcan a vulnerabilidades que pueden explotarse. Un diseño inseguro no se puede arreglar con una implementación perfecta, ya que, por definición, los controles de seguridad necesarios nunca se crearon para defenderse de ataques específicos. Uno de los factores que contribuyen al diseño inseguro es la falta de perfiles de riesgo empresarial inherentes al software o sistema que se está desarrollando y, por lo tanto, la falta de determinación del nivel de diseño de seguridad que se requiere.

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
