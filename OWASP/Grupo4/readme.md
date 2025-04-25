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

## 4. Diseño no seguro
El diseño no seguro incluye una serie de vulnerabilidades que se pueden integrar en la arquitectura de una aplicación. Se centra en el diseño de una aplicación, no en su implementación. OWASP enumera el uso de preguntas de seguridad (p. ej. "¿En qué calle creciste?") para la recuperación de contraseñas como un ejemplo de un flujo de trabajo que no es seguro por diseño. Por muy bien que los desarrolladores implementen un flujo de trabajo de este tipo, la aplicación seguirá siendo vulnerable, porque más de una persona puede saber la respuesta a esas preguntas de seguridad.

El uso del modelado de amenaza antes de la implementación de una aplicación puede ayudar a mitigar este tipo de vulnerabilidades.

## 5. Mala configuración de la seguridad
La desconfiguración de la seguridad es la vulnerabilidad más común de la lista, y suele ser el resultado de usar configuraciones por defecto o de mostrar errores excesivamente detallados. Por ejemplo, una aplicación podría mostrar al usuario errores demasiado descriptivos que mostraran vulnerabilidades en la aplicación. Esto se puede mitigar mediante la eliminación cualquier función no utilizada en el código y al asegurarse de que los mensajes de error sean más generales.

La categoría Errores de configuración de seguridad incluye el ataque XML External Entities (XEE), anteriormente una categoría propia en el informe de 2017. Se trata de un ataque contra una aplicación web que analiza la entrada XML*. Esta entrada puede hacer referencia a una entidad externa, que intenta explotar una vulnerabilidad en el analizador. Una "entidad externa" en este contexto hace referencia a una unidad de almacenamiento, como un disco duro. Se puede engañar a un analizador XML para que envíe datos a una entidad externa no autorizada, que puede pasar datos confidenciales directamente a un atacante. La mejor forma de prevenir los ataques XEE es hacer que las aplicaciones web acepten un tipo de datos menos complejo, como JSON, o al menos que revisen los analizadores XML y desactiven el uso de entidades externas en una aplicación XML.

*El XML, o lenguaje de marcado extensible, es un lenguaje de marcado destinado a ser inteligible tanto por humanos como por máquinas. Debido a su complejidad y vulnerabilidades de seguridad, se está dejando de utilizar en muchas aplicaciones web.

## 6. Componentes vulnerables y obsoletos
Muchos desarrolladores web modernos utilizan componentes como bibliotecas y marcos en sus aplicaciones web, estos componentes son piezas de software que ayudan a los desarrolladores a evitar el trabajo redundante y a ofrecer la funcionalidad necesaria un ejemplo común son los marcos frontales como React y las bibliotecas más pequeñas que se utilizan para añadir iconos compartidos o pruebas a/b.
Algunos atacantes buscan vulnerabilidades en estos componentes que luego pueden utilizar para orquestar ataques, Algunos de los componentes más famosos se utilizan en cientos de miles de sitios web; un atacante que encuentre un agujero de seguridad en uno de estos componentes podría dejar cientos de miles de sitios vulnerables.

Los desarrolladores de contenidos a menudo ofrecen revisiones de seguridad y actualizaciones para incluir vulnerabilidades conocidas, pero los desarrolladores de aplicaciones web no siempre tienen las versiones más recientes o parcheadas de los componentes que se ejecutan en sus aplicaciones. Con el fin de minimizar los riesgos de ejecutar componentes con vulnerabilidades conocidas, los desarrolladores deberían eliminar los componentes no utilizados de sus proyectos, así como asegurar que están recibiendo componentes actualizados de una fuente de confianza.

## 7. Fallos de identificación y autenticación
Las vulnerabilidades en los sistemas de autenticación (login) pueden dar a los atacantes acceso a las cuentas de los usuarios e incluso la capacidad de poner en riesgo todo un sistema mediante el uso de una cuenta de administrador. 

Algunas estrategias para mitigar las vulnerabilidades de autenticación son pedir la autenticación en dos fases (2FA), así como limitar o retrasar los intentos repetidos de inicio de sesión mediante el uso de la limitación de velocidad, controladores de dominio

## 8. Fallos de integridad de software y datos
Hoy en día, muchas aplicaciones dependen de complementos de terceros y otras fuentes externas para su funcionamiento, y no siempre se aseguran de que las actualizaciones y los datos de esas fuentes no hayan sido manipulados y se originen en una ubicación esperada. Por ejemplo, una aplicación que acepta automáticamente actualizaciones de una fuente externa podría ser vulnerable a que un atacante cargara sus propias actualizaciones maliciosas, que luego se distribuirían a todas las instalaciones de esa aplicación. Esta categoría también incluye las vulnerabilidades de deserialización no seguras: estos ataques son el resultado de la deserialización de datos de fuentes no fiables, y pueden tener graves consecuencias, como ataques DDoS y ataques de ejecución remota de código.

Para ayudar a garantizar que no se ha violado la integridad de los datos y las actualizaciones, los desarrolladores de aplicaciones deben utilizar firmas digitales para verificar las actualizaciones, comprobar sus cadenas de suministro de software y asegurarse de que las canalizaciones de integración continua/implementación continua (CI/CD) tengan un control de acceso sólido y estén configuradas correctamente.

## 9. Fallos de registro y supervisión de seguridad
Muchas aplicaciones web no toman suficientes medidas para detectar las fugas de datos, se suele tardar unos 200 días de media en detectar una fuga después de que esta se haya producido, Esto da a los atacantes mucho tiempo para causar daños antes de que haya una respuesta.
OWASP recomienda que los desarrolladores web implementen planes de registro y supervisión, así como de respuesta a incidentes, para asegurarse de que están al tanto de los ataques a sus aplicaciones.

## 10. Falsificación de solicitudes del lado del servidor
La falsificación de solicitud del lado del servidor (SSRF) es un ataque en el que alguien envía una solicitud de URL a un servidor que hace que el servidor obtenga un recurso inesperado, incluso si ese recurso está protegido de otra manera. Un atacante podría, por ejemplo, enviar una solicitud para www.example.com/super-secret-data/, aunque en teoría los usuarios de la web no pueden navegar a esa ubicación y obtener acceso a datos supersecretos de la respuesta del servidor.

Hay una serie de posibles mitigaciones para los ataques SSRF, y una de las más importantes es validar todas las URL procedentes de los clientes, Las URL no válidas no deberían dar lugar a una respuesta directa y sin procesar del servidor.
