# Qué es un SBOM

SBOM es el acrónimo de Lista de Materiales de Software (Software Bill of Materials) , que es una lista de todos los paquetes npm de código abierto que forman parte de tu proyecto. Pero no se limita solo a paquetes de código abierto o de software, sino que puede incluir bibliotecas de sistemas operativos, inventario de microservicios y más.

Sus paquetes de software npm se representarían en dos archivos: el package.jsonque contiene sus dependencias directas y un archivo de bloqueo como package-lock.jsono yarn.lockque representaría el árbol completo de dependencias instaladas cuando crea sus proyectos de aplicaciones JavaScript o Node.js.


## ¿Por qué es importante?

Seguridad: Saber qué versiones de librerías usas y si tienen vulnerabilidades conocidas.

Cumplimiento: Verificar licencias de dependencias.

Transparencia: Mejora el mantenimiento y auditoría del software.

## ¿Qué contiene un SBoM?
Una Lista de Materiales de Software (SBOM) es un registro formal que detalla los componentes y dependencias de un producto de software, similar a la lista de ingredientes de una receta. En respuesta a la Orden Ejecutiva de Ciberseguridad de mayo de 2021 , la Administración Nacional de Telecomunicaciones e Información (NTIA) publicó directrices sobre los elementos mínimos requeridos en una SBOM. Estas directrices contribuyen a mejorar la transparencia, la seguridad y la integridad de las cadenas de suministro de software.

Los tres elementos fundamentales para la creación de un SBOM incluyen:

## 1. Campos de datos
Estos son los datos esenciales que debe incluir un SBOM. Hay siete campos de datos clave que representan diferentes aspectos de los componentes de software y sus relaciones. Estos incluyen:


 Nombre del proveedor: La entidad u organización que define y proporciona el componente de software.
 Nombre del componente : La designación o etiqueta asignada a la unidad de software por el proveedor.
 Versión del componente : el identificador específico de la versión del componente de software, que indica cambios o actualizaciones.
Otros identificadores únicos : referencias o identificadores adicionales, como URL de paquetes o claves de bases de datos, que ayudan a identificar de forma única el componente.
Relación de dependencia : una descripción de cómo los componentes están interconectados o son dependientes, mostrando cómo un componente está incluido o depende de otro.
Autor de los datos SBOM : El nombre de la entidad responsable de compilar y generar el SBOM.
Marca de tiempo : la fecha y hora específicas en que se recopilaron los datos SBOM, para indicar cuándo se actualizó la información por última vez.

## 2. Soporte de automatización
Los SBOM deben ser legibles por máquina y estar estructurados para permitir el análisis automatizado. Formatos como JSON, XML o SPDX (Software Package Data Exchange) se utilizan a menudo para facilitar la automatización, garantizando así una fácil integración de los SBOM en los flujos de trabajo de desarrollo de software y seguridad. La automatización también ayuda a identificar y resolver rápidamente vulnerabilidades de seguridad al permitir que las herramientas comparen los datos de los SBOM con las bases de datos de vulnerabilidades.

Los SBOM deben ser legibles por máquina y estar estructurados para permitir el análisis automatizado. Formatos como JSON, XML o SPDX (Software Package Data Exchange) se utilizan a menudo para facilitar la automatización, garantizando así una fácil integración de los SBOM en los flujos de trabajo de desarrollo de software y seguridad. La automatización también ayuda a identificar y resolver rápidamente vulnerabilidades de seguridad al permitir que las herramientas comparen los datos de los SBOM con las bases de datos de vulnerabilidades.

##  3. Prácticas y procesos
Este elemento abarca las prácticas y procedimientos organizativos para generar y gestionar los SBOM. Las consideraciones clave incluyen:


Cómo se mantienen los SBOM a lo largo del ciclo de vida del software.
Garantizar que los datos de SBOM estén actualizados y sean precisos.
Integración de la creación de SBOM en el proceso de desarrollo de software para garantizar actualizaciones continuas y eficientes.
