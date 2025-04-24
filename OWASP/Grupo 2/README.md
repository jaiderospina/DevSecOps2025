<div align="center">
  <h1>OWASP</h1>
</div>

### ¿Qué es OWASP?

OWASP (Open Worldwide Application Security Project) es una comunidad global sin fines de lucro enfocada en mejorar la seguridad del software. Proporciona recursos, herramientas, documentación y estándares abiertos para ayudar a organizaciones y desarrolladores a construir aplicaciones seguras.

### ¿Qué es el OWASP Top 10?

El OWASP Top 10 es un proyecto que identifica las diez vulnerabilidades de seguridad más críticas en aplicaciones web. Es ampliamente reconocido como un estándar para la concientización sobre seguridad en el desarrollo de software, su última versión es del año 2021 agregando tres nuevas categorias con cambios de nombres y alcances en algunas de ellas.

<div align="center">
  <h1>Top 10 (2021)</h1>
</div>

### A01:2021 – Pérdida de Control de Acceso

**📌 Descripción:**  
Se produce cuando los usuarios pueden realizar acciones fuera de sus permisos intencionados. Suele deberse a falta de validaciones del lado del servidor.

**🎯 Métodos de explotación:**
- Forzar URLs (path traversal).
- Cambiar parámetros de usuario (por ejemplo, IDs).
- Uso de herramientas como Burp Suite para modificar solicitudes HTTP.

**📌 Ejemplo:**  
Un atacante cambia su ID de usuario en una URL (`/user/12345`) a otro (`/user/67890`) y accede a la información de otra persona.

**🛡️ Prevención y mitigación:**
- Implementar controles de acceso del lado del servidor.
- Aplicar el principio de mínimos privilegios.
- Auditorías frecuentes de reglas de acceso.

### A02:2021 – Fallas Criptográficas

**📌 Descripción:**  
Exposición de datos sensibles debido a cifrado incorrecto o inexistente.

**🎯 Métodos de explotación:**
- Interceptar datos con sniffers (como Wireshark).
- Explotar almacenamiento sin cifrar.

**📌 Ejemplo:**  
Una app almacena contraseñas en texto plano, permitiendo que un atacante que accede a la DB vea todas las credenciales.

**🛡️ Prevención y mitigación:**
- Usar HTTPS con TLS moderno (TLS 1.2+).
- Cifrar datos en reposo y en tránsito.
- Hash de contraseñas con bcrypt, scrypt, o Argon2.

### A03:2021 – Inyección de Código



### A04:2021 – Diseño Inseguro



### A05:2021 – Configuración de Seguridad Incorrecta



### A06:2021 – Componentes Vulnerables y Desactualizados



### A07:2021 – Fallos de Autenticación e Identificación



### A08:2021 – Fallas de Integridad de Software y Datos



### A09:2021 – Fallas de Registro y Monitoreo de Seguridad



### A10:2021 – Falsificación de Solicitud del Lado del Servidor (SSRF)



## Referencias Bibliográficas

- OWASP Foundation. (2021). *OWASP Top 10: The Ten Most Critical Web Application Security Risks*. https://owasp.org/Top10/
- OWASP Foundation. (2021). *OWASP Top 10: Detailed Cheat Sheet*. https://cheatsheetseries.owasp.org/
- PortSwigger Web Security Academy. (s.f.). *Web Security Learning Resources*. https://portswigger.net/web-security
- OWASP Foundation. (2023). *OWASP Application Security Verification Standard (ASVS)*. https://owasp.org/www-project-application-security-verification-standard/
- OWASP Foundation. (s.f.). *OWASP Secure Coding Practices - Quick Reference Guide*. https://owasp.org/www-project-secure-coding-practices-quick-reference-guide/

## Integrantes

- Diana Lizeth Mahecha Guevara  
- Carlos Andres David Ovalle  
- German Alexis Gonzalez Reay  
- Jairo Yesid Rodriguez Gonzalez  
- Wuilmer Rafael Briceño Camacho