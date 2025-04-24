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

### ¿Qué ha cambiado en el Top 10 para 2021?
Hay tres categorías nuevas, cuatro categorías con cambios de nombre y alcance, y cierta consolidación en el Top 10 para 2021. Hemos cambiado los nombres cuando fue necesario para 
centrarnos en la causa raíz en lugar del síntoma.

![Cambios_OWASP](./images/Cambios_OWASP.png)


### A01:2021 – Pérdida de Control de Acceso

**Descripción:**  
Se produce cuando los usuarios pueden realizar acciones fuera de sus permisos intencionados. Suele deberse a falta de validaciones del lado del servidor.

**Métodos de explotación:**
- Forzar URLs (path traversal).
- Cambiar parámetros de usuario (por ejemplo, IDs).
- Uso de herramientas como Burp Suite para modificar solicitudes HTTP.

**Ejemplo:**  
Un atacante cambia su ID de usuario en una URL (`/user/12345`) a otro (`/user/67890`) y accede a la información de otra persona.

**Prevención y mitigación:**
- Implementar controles de acceso del lado del servidor.
- Aplicar el principio de mínimos privilegios.
- Auditorías frecuentes de reglas de acceso.

### A02:2021 – Fallas Criptográficas

**Descripción:**  
Exposición de datos sensibles debido a cifrado incorrecto o inexistente.

**Métodos de explotación:**
- Interceptar datos con sniffers (como Wireshark).
- Explotar almacenamiento sin cifrar.

**Ejemplo:**  
Una app almacena contraseñas en texto plano, permitiendo que un atacante que accede a la DB vea todas las credenciales.

**Prevención y mitigación:**
- Usar HTTPS con TLS moderno (TLS 1.2+).
- Cifrar datos en reposo y en tránsito.
- Hash de contraseñas con bcrypt, scrypt, o Argon2.

### A03:2021 – Inyección de Código

**Descripción:**  
Una aplicación es vulnerable a ataques cuando:

-   Los datos proporcionados por el usuario no son validados, filtrados ni desinfectados por la aplicación.
- Las consultas dinámicas o llamadas no parametrizadas sin escape consciente del contexto se utilizan directamente en el intérprete.
- Los datos hostiles se utilizan dentro de los parámetros de búsqueda de mapeo relacional de objetos (ORM) para extraer registros confidenciales adicionales.
- Los datos hostiles se utilizan directamente o se concatenan. El SQL o comando contiene la estructura y los datos maliciosos en consultas dinámicas, comandos o procedimientos almacenados.

Algunas de las inyecciones más comunes son SQL, NoSQL, comandos del sistema operativo, mapeo relacional de objetos (ORM), LDAP y lenguaje de expresión (EL) u biblioteca de navegación de gráficos de objetos (OGNL). El concepto es idéntico en todos los intérpretes. La revisión del código fuente es el mejor método para detectar si las aplicaciones son vulnerables a inyecciones. Se recomienda encarecidamente realizar pruebas automatizadas de todos los parámetros, encabezados, URL, cookies, JSON, SOAP y datos XML. Las organizaciones pueden incluir herramientas de pruebas de seguridad de aplicaciones estáticas (SAST), dinámicas (DAST) e interactivas (IAST) en el flujo de trabajo de CI/CD para identificar las vulnerabilidades de inyección introducidas antes de la implementación en producción.

**Métodos de explotación:**

1. **SQL Injection (Inyección SQL)**
Es el tipo más conocido. Ocurre cuando un atacante inserta sentencias SQL maliciosas en campos de entrada de datos, buscando que se ejecuten en la base de datos.
**Impacto:** Pérdida de confidencialidad, corrupción o destrucción de datos, acceso no autorizado.

2. **Command Injection (Inyección de comandos del sistema operativo)**

Permite al atacante ejecutar comandos arbitrarios del sistema operativo.
**Impacto:** Toma de control del sistema, eliminación de archivos, ejecución de malware.

3. **LDAP Injection**

Manipula las consultas al servidor LDAP para filtrar o alterar datos.
**Impacto:** Acceso no autorizado a datos de directorios, suplantación de identidad.

4. **XPath Injection**
Altera las consultas XPath para acceder o modificar datos en documentos XML.
**Impacto:** Lectura no autorizada de datos XML.

5. **NoSQL Injection**
Dirigido a bases de datos NoSQL como MongoDB.
**Impacto:** Acceso no autorizado a documentos, alteración de registros.

**Ejemplo:**  

- **Escenario n.° 1:** Una aplicación utiliza datos no confiables en la construcción de la siguiente llamada SQL vulnerable:

    String query = "SELECT \* FROM accounts WHERE custID='" + request.getParameter("id") + "'";

- **Escenario n.° 2:** De manera similar, la confianza ciega de una aplicación en los marcos puede generar consultas que aún sean vulnerables (por ejemplo, Hibernate Query Language (HQL)):

    Query HQLQuery = session.createQuery("FROM accounts WHERE custID='" + request.getParameter("id") + "'");

En ambos casos, el atacante modifica el valor del parámetro 'id' en su navegador para enviar: 'UNION SLEEP(10);--. Por ejemplo:

    http://example.com/app/accountView?id=' UNION SELECT SLEEP(10);--

Esto cambia el significado de ambas consultas para devolver todos los registros de la tabla de cuentas. Ataques más peligrosos podrían modificar o eliminar datos o incluso invocar procedimientos almacenados.

**Prevención y mitigación:**

Para evitar la inyección es necesario mantener los datos separados de los comandos y las consultas:

- La opción preferida es usar una API segura que evite el uso del intérprete por completo, proporcione una interfaz parametrizada o migre a herramientas de mapeo relacional de objetos (ORM).
**Nota:** Incluso parametrizados, los procedimientos almacenados pueden introducir una inyección SQL si PL/SQL o T-SQL concatenan consultas y datos o ejecutan datos hostiles con EXECUTE IMMEDIATE o exec().

- Utilice la validación de entrada positiva del lado del servidor. Esto no constituye una defensa completa, ya que muchas aplicaciones requieren caracteres especiales, como áreas de texto o API para aplicaciones móviles.

- Para cualquier consulta dinámica residual, escape los caracteres especiales utilizando la sintaxis de escape específica de ese intérprete.
**Nota:** Las estructuras SQL, como nombres de tablas y columnas, no se pueden escapar, por lo que los nombres de estructura proporcionados por el usuario son peligrosos. Este es un problema común en el software de generación de informes.

- Utilice LIMIT y otros controles SQL dentro de las consultas para evitar la divulgación masiva de registros en caso de inyección SQL.

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