# OWASP Top 10

El Top 10 de OWASP es un informe actualizado de forma regular que subraya las preocupaciones de seguridad en el caso de la seguridad de las aplicaciones web, centrándose en los 10 riesgos más vitales. El informe es confeccionado por un equipo de expertos en seguridad de todo el mundo. OWASP se refiere al Top 10 como un "documento de conscienciación" en el que se recomienda que todas las compañías incorporen el informe en sus procesos con el fin de minimizar y/o mitigar los riesgos de seguridad.

El OWASP Top 10 2021 ha sido totalmente renovado

Hay tres nuevas categorías, cuatro categorías con cambios de nombre y alcance, y alguna consolidación en el Top 10 de 2021

![image alt](https://github.com/jaiderospina/DevSecOps2025/blob/ceea590765f4e59aef1bd3a2540c03a7fe51d1d2/OWASP/Grupo4/OWANSP_TOP10.png)

- A01:2021 - Pérdida de Control de Acceso
- A02:2021 - Fallas Criptográficas
- A03:2021 - Inyección
- A04:2021 - Diseño Inseguro
- A05:2021 - Configuración de Seguridad Incorrecta
- A06:2021 - Componentes Vulnerables y Desactualizados
- A07:2021 - Fallas de Identificación y Autenticación 
- A08:2021 - Fallas en el Software y en la Integridad de los Datos
- A09:2021 - Fallas en el Registro y Monitoreo
- A10:2021 - Falsificación de Solicitudes del Lado del Servidor

¿Qué es el OWASP Top 10?
El Top 10 de OWASP es un informe actualizado de forma regular que subraya las preocupaciones de seguridad en el caso de la seguridad de las aplicaciones web, centrándose en los 10 riesgos más vitales. El informe es confeccionado por un equipo de expertos en seguridad de todo el mundo. OWASP se refiere al Top 10 como un "documento de conscienciación" en el que se recomienda que todas las compañías incorporen el informe en sus procesos con el fin de minimizar y/o mitigar los riesgos de seguridad.
 
A continuación se muestran los riesgos de seguridad recogidos en el informe OWASP Top 10 de 2017:

## 1. Pérdida de control de acceso
El Control de acceso hace referencia un sistema que controla el acceso a la información o a la funcionalidad. Los controles de acceso que no funcionan permiten a los atacantes saltarse la autorización y realizar tareas como si fueran usuarios privilegiados, como los administradores. Por ejemplo, una aplicación web podría permitir que un usuario cambiara la cuenta con la que ha iniciado sesión con solo cambiar parte de una url, sin ninguna otra verificación.

Los controles de acceso pueden asegurarse al asegurar que una aplicación web utilice tokens de autorización* y establezca controles estrictos sobre los mismos.

*Muchos servicios emiten tokens de autorización cuando los usuarios inician sesión. Cada solicitud privilegiada que haga un usuario requerirá que haya un token de autorización. Esta es una forma segura de garantizar que el usuario es quien dice ser, sin tener que introducir constantemente sus credenciales de acceso.

## 2. Fallos criptográficos
Si las aplicaciones web no protegen los datos confidenciales, como la información financiera y las contraseñas, mediante la encriptación, los atacantes pueden acceder a esos datos y venderlos o utilizarlos con fines maliciosos. También pueden robar información confidencial mediante un ataque en ruta.

El riesgo de exposición de los datos se puede minimizar encriptando todos los datos confidenciales, autenticando todas las transmisiones y desactivando el almacenamiento en caché* de cualquier información confidencial. Además, los desarrolladores de aplicaciones web deben asegurarse de no almacenar innecesariamente datos confidenciales.

*El almacenamiento en caché es la práctica de almacenar temporalmente los datos para reutilizarlos. Por ejemplo, los navegadores web suelen almacenar en caché las páginas web para que, si un usuario vuelve a visitarlas en un periodo de tiempo determinado, el navegador no tenga que recuperarlas de la web.

## 3. Inyección
Los ataques de inyección ocurren cuando se envían datos que no son de confianza a un intérprete de código a través de la entrada de un formulario o algún otro envío de datos a una aplicación web. Por ejemplo, un atacante podría introducir código de base de datos SQL en un formulario que espera un nombre de usuario en texto plano. Si la entrada del formulario no está asegurada de forma adecuada, se acabaría ejecutando el código SQL. Esto se conoce como un ataque de inyección de código SQL.

La categoría de inyección también incluye los ataques de Cross-site scripting (XSS), anteriormente su propia categoría en el informe de 2017. Las estrategias de mitigación para el Cross-site scripting incluyen eludir las solicitudes HTTP no fiables, así como el uso de marcos de desarrollo web modernos como ReactJS y Ruby on Rails, que proporcionan cierta protección integrada contra el Cross-site scripting.

En general, los ataques de inyección pueden evitarse al validar y/o sanitizar los datos enviados por el usuario (la validación hace referencia a rechazar datos sospechosos, mientras que la sanitización hace referencia a la limpieza de las partes de aspecto sospechoso de los datos). Además, un administrador de una base de datos puede configurar unos controles para minimizar la cantidad de información que un ataque de inyección puede exponer.

Más información sobre cómo evitar la inyección de código SQL.

