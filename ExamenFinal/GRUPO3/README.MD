# Aplicación web para la administración de los servicios de hospedaje y cafetería de Casa del Café

## Resumen
Casa del Café es un negocio familiar que brinda el servicio de cafetería, sirviendo café de la región del Huila y el de hospedaje para los turistas que visitan la capital. Debido al crecimiento del negocio, se requirió la implementación de un software para facilitar el manejo de la información de estos servicios realizando el registro de las ventas de la cafetería o de las reservas en el hospedaje, lo que permite llevar un control de los ingresos, la llegada de los clientes y la asignación de las habitaciones. 
En este documento se describe el proceso que se llevó a cabo para el desarrollo de una aplicación web que busca permitir la administración de la información de los servicios de hospedaje y cafetería. El software consideró la elaboración de cuatro módulos para la gestión de los procesos: el módulo de hospedaje; el módulo de cafetería; el módulo de administración de usuarios y el Dashboard. Para la construcción de la aplicación web se utilizó la metodología incremental.

**Palabras clave:** hospedaje, cafetería, inventarios, check in, check out, Dashboard

## Introducción
Casa del Café es un negocio familiar que comenzó su labor en 2009, como una cafetería ofreciendo café de la región del Huila. En 2017, se convirtió en un hostal para alojar a los turistas y locales.

Casa del Café manejaba la información de la cafetería y el hospedaje de manera manual, lo que ocasionaba la pérdida de información, no llevar un buen registro de las ventas de la cafetería y desconocimiento de los productos que se tenían en stock. Además, para el servicio de hospedaje no se contaba con el registro de los clientes hospedados en el lugar, ni el control de las llegadas de los clientes y la asignación de las habitaciones.
El presente trabajo propuso el desarrollo de una aplicación web para administrar el inventario y las ventas de los productos de la cafetería y la gestión de reservas del hospedaje. Este software apoya la realización de los procesos y actividades tanto del hospedaje como de la cafetería, permitiendo la administración de la información de los servicios que brinda la Casa del Café.

La aplicación web consideró las siguientes funcionalidades: el módulo de hospedaje para la gestión de las reservas y el registro de los huéspedes; el módulo de cafetería que incluye el control de inventario y de las ventas; el módulo de administración para la gestión de los usuarios y el dashboard que permite visualizar información relevante de los dos servicios. El desarrollo de la aplicación web se realizó aplicando la metodología incremental, que facilitó manejar las tareas a realizar durante cada una de las etapas del trabajo. 

## Planteamiento del problema
## Descripción del problema
Casa del Café, es una empresa familiar fundada en el año 2009 creada a partir de una idea de innovación, para dar a conocer el café colombiano, especialmente, el del departamento del Huila. En el año 2017, como complemento, se habilitaron habitaciones para brindar hospedaje a los clientes que lo requirieran en su visita a la ciudad. Actualmente, cuenta con dos servicios los cuales son: el hospedaje que presta servicio de alojamiento y la cafetería se dedica a la venta de desayunos, productos fritos, bebidas calientes y frías; para los huéspedes y el público en general.
La información de la cafetería y el hospedaje se manejaba de forma manual, generando la pérdida de información asociada al servicio de hospedaje, al no tener rigurosidad en el registro de la llegada de los huéspedes, la realización de las reservas y la asignación de las habitaciones; así como, falta de control de las ventas de la cafetería al no tener un registro de las mismas y desconocimiento de los productos que se tienen en stock, entre otros.

Por lo tanto, en el presente trabajo de grado se propuso realizar una aplicación web cuya finalidad es administrar el inventario y las ventas de los productos de la cafetería y gestionar las reservas del hospedaje, buscando simplificar el manejo de la información y los procesos del hospedaje y la cafetería de la Casa del Café.

## Formulación del problema

Con el desarrollo de una aplicación web que facilita la realización de las reservas, el registro de los huéspedes y la asignación de las habitaciones, el registro y control del inventario de los productos de la cafetería, así como, la visualización gráfica de la información relevante del servicio de hospedaje y cafetería, ¿los administradores de la Casa del Café podrán simplificar el manejo de la información y los procesos de estos dos servicios?

## Justificación

El desarrollo de la aplicación web para la administración de los servicios de hospedaje y cafetería beneficia tanto a la empresa La Casa del Café como a sus empleados, en la medida en que soluciona el principal problema que tienen actualmente que es, el manejo manual de tanta información. Cada dato documentado de forma manual representa un riesgo para el establecimiento, lo que demanda una mayor atención al realizar el registro de la información de cada uno de los servicios. Al contar con una base de datos en donde se centralice la información para poder administrar de una mejor manera los datos, se logra un mejor y óptimo proceso de administración y gestión de estos. 

De igual forma, con el uso de esta herramienta los usuarios pueden procesar la información fácilmente. Esto incluye el registro de entrada y salida de los huéspedes, para el caso del hospedaje y el de las materias primas que conforman el inventario y las ventas, para la cafetería.

##  Objetivos

## Objetivo general

Desarrollar una aplicación web para la administración de los servicios de hospedaje y cafetería de la Casa del Café que permita una mejor gestión de la información sobre los servicios prestados, aplicando la metodología incremental y usando herramientas de desarrollo para este tipo de aplicaciones.

## Objetivos específicos

•	Definir los requerimientos funcionales y no funcionales para dimensionar el sistema a partir de las entrevistas con los usuarios de la aplicación.

•	Implementar el módulo de servicio de alojamiento para la gestión de la información del hospedaje con base en las historias de usuario.

•	Codificar el módulo de servicio de cafetería ayudando a mejorar la administración del inventario y las ventas utilizando el lenguaje de programación de PHP.

•	Implementar el módulo de Dashboard para visualizar la información relevante para los administradores de la Casa del Café usando gráficas e indicadores de resumen.

## Alcance y limitaciones 

## Alcance
En este proyecto se llevó a cabo el desarrollo una aplicación web para la administración de los servicios de hospedaje y cafetería de la Casa del Café, que permitió solucionar las problemáticas de manejo de la información antes mencionadas. Este software considera los siguientes módulos y sus respectivas funcionalidades:

•	Módulo de hospedaje: incluye el registro de los huéspedes y la visualización de la disponibilidad de las habitaciones. Se incluyen las funcionalidades de:

o	Registro de reservas: muestra las habitaciones que se encuentran reservadas y las fechas de las mismas. Asimismo, permite ingresar, modificar o cancelar una reserva.

○ Check-in: es el registro de los datos del usuario necesarios para asignarle una habitación.

○ check-out: permite visualizar los clientes que salen y las habitaciones que están disponibles para una nueva reserva.

○ Registro de ingresos: muestra una gráfica de ingresos por las reservas.

•	Módulo de cafetería: incluye la gestión de la compra, venta y manejo del stock de los productos de la cafetería

o	Registro de inventario: permite controlar los productos, el stock y los productos que llegan.

o	Registro de ventas: permite ver los productos que se encuentran en venta

•	Registro de compras: permite al administrador ver los productos y seleccionar el producto

•	Registro de ingresos: muestra una gráfica de ingresos semanal por las reservas

•	Módulo de administración: incluye la gestión de los roles de los usuarios de la aplicación y la parametrización de este.

•	Módulo de Dashboard: muestra las gráficas del estado actual de las ventas de la cafetería y las reservas del hospedaje para apoyar la toma de decisiones por parte de la administración de la Casa del Café.

La aplicación web se implementó en php que es un lenguaje de código abierto para desarrollar aplicaciones para la web y favorece la conexión de servidores y la interfaz de usuario. Adicionalmente se utilizó Xampp, distribución de apache que incluye varios softwares libres y visual studio, como herramienta para editar, depurar y compilar el código para después publicar la aplicación. Por último, MySQL como gestor de bases de datos por ser software libre y con licencia BSD.

##  Limitaciones
•	El software solo va a ser usado por el administrador. Solo funciona en Google Chrome y no funciona en dispositivos Android o IOS.

•	No se lleva un registro de contabilidad y facturación 

•	No se cargan los datos del inventario de la cafetería y las habitaciones del hospedaje (se harán ejemplos o pruebas, para que la empresa misma cargue la información que necesita).

##  Políticas de Seguridad Aplicables
Para garantizar la confidencialidad, integridad y disponibilidad de la información en la aplicación web de Casa del Café, se adoptan las siguientes políticas de seguridad basadas en marcos y normativas reconocidas:
## Cumplimiento del Reglamento General de Protección de Datos (GDPR)
Aunque la operación principal se realiza en Colombia, se toman como referencia los principios del GDPR para el tratamiento de datos personales:

•	Consentimiento informado para la recopilación de datos de huéspedes.

•	Derecho de acceso, rectificación y eliminación de datos.

•	Limitación de acceso a información personal a usuarios autorizados únicamente.







