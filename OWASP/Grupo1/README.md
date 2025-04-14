# Grupo1



## Tema: OWASP Top 10 – Principales Riesgos de Seguridad en Aplicaciones Web

### Desarrollo del Tema

El **OWASP Top 10** es una lista de los 10 riesgos de seguridad más importantes para las aplicaciones web. Es un documento de referencia que ayuda a desarrolladores y organizaciones a mejorar la seguridad de sus aplicaciones.

A continuación, se presenta un resumen de los riesgos identificados en la versión más reciente (OWASP Top 10 - 2021):

#### 1. **A01:2021 - Pérdida de Control de Acceso**
Hace referencia un sistema que controla el acceso a la información o a la funcionalidad. Los controles de acceso que no funcionan permiten a los atacantes saltarse la autorización y realizar tareas como si fueran usuarios privilegiados, como los administradores. Por ejemplo, una aplicación web podría permitir que un usuario cambiara la cuenta con la que ha iniciado sesión con solo cambiar parte de una url, sin ninguna otra verificación.

#### 2. **A02:2021 - Fallas Criptográficas**
Se centra en las fallas relacionadas con la criptografía (o la falta de ésta). Esto a menudo conduce a la exposición de datos sensibles o al compromiso del sistema.

#### 3. **A03:2021 - Inyección**
Las fallas de inyección ocurren cuando los atacantes insertan datos no confiables u hostiles en lenguajes de comando o consulta, o cuando la aplicación no valida, filtra o desinfecta los datos proporcionados por el usuario, lo que lleva a la ejecución no intencionada de comandos maliciosos.

#### 4. **A04:2021 - Diseño Inseguro**
Se trata de una categoría amplia que representa diferentes debilidades, expresadas como controles de seguridad faltantes o ineficaces y fallas arquitectónicas. Estas fallas pueden ocurrir cuando una aplicación está diseñada para depender de procesos que son inherentemente inseguros o cuando no se implementan los controles de seguridad necesarios para defenderse contra ataques específicos.

#### 5. **A05:2021 - Configuración de Seguridad Incorrecta**
La falta de refuerzo de la seguridad en los marcos de aplicación web, plataformas, servidores o controles de seguridad puede dar lugar a acceso no autorizado, exposición de información confidencial u otras vulnerabilidades de seguridad.

#### 6. **A06:2021 - Componentes Vulnerables y Desactualizados**
El uso de componentes obsoletos, sin parches o vulnerables, como bibliotecas, marcos o complementos, puede exponer las aplicaciones a fallas de seguridad conocidas, lo que aumenta el riesgo de explotación. Estos riesgos pueden resultar de un software no compatible o desactualizado, incluido el sistema operativo (SO), el servidor web/ de aplicación , el sistema de administración de bases de datos (DBMS), las aplicaciones, las API y todos los componentes, entornos de ejecución y bibliotecas.

#### 7. **A07:2021 - Fallas de Identificación y Autenticación**
Las debilidades en la autenticación, la identidad y la gestión de sesiones pueden permitir a los atacantes comprometer cuentas de usuario, contraseñas, tokens de sesión o explotar un manejo inseguro de sesiones.

#### 8. **A08:2021 - Fallas en el Software y en la Integridad de los Datos**
Estas vulnerabilidades son resultado de códigos y de infraestructuras de aplicacines que no protegen contra violaciones de integridad de los datos y del software. Esto puede ocurrir cuando una aplicación depende de complementos, bibliotecas o módulos de fuentes, repositorios y CDN no confiables.

#### 9. **A09:2021 - Fallas en el Registro y Monitoreo**
Un registro y una supervisión inadecuados pueden dificultar la detección y la respuesta oportunas a incidentes de seguridad, lo que dificulta la identificación y mitigación de ataques o actividades no autorizadas. Esto puede significar que los eventos auditables, como inicios de sesión, inicios de sesión fallidos y transacciones de alto valor, no se identifican ni registran, y que las aplicaciones no detectan ataques activos en tiempo real.

#### 10. **A10:2021 - Falsificación de Solicitudes del Lado del Servidor**
Estas vulnerabilidades ocurren cuando una aplicación no valida o desinfecta una URL ingresada por un usuario antes de extraer datos de un recurso remoto. Los atacantes pueden usar estas fallas para obligar a las aplicaciones a acceder a destinos web maliciosos incluso si están protegidas por un firewall u otra defensa.

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


