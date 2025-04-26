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
| Injection                  | Usa consultas preparadas (Prepared Statements).                         |
| Broken Access Control      | Valida siempre roles y permisos del usuario.                           |
| Security Misconfiguration  | Elimina funciones por defecto, actualiza todo regularmente.             |
| Cryptographic Failures     | Usa algoritmos seguros (ej: AES, bcrypt), nunca reinventes la rueda.    |
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
