# Qué es un SBOM

SBOM es el acrónimo de Lista de Materiales de Software (Software Bill of Materials) , que es una lista de todos los paquetes npm de código abierto que forman parte de tu proyecto. Pero no se limita solo a paquetes de código abierto o de software, sino que puede incluir bibliotecas de sistemas operativos, inventario de microservicios y más.

Sus paquetes de software npm se representarían en dos archivos: el package.jsonque contiene sus dependencias directas y un archivo de bloqueo como package-lock.jsono yarn.lockque representaría el árbol completo de dependencias instaladas cuando crea sus proyectos de aplicaciones JavaScript o Node.js.


## ¿Por qué es importante?

- Seguridad: Saber qué versiones de librerías usas y si tienen vulnerabilidades conocidas.

- Cumplimiento: Verificar licencias de dependencias.

- Transparencia: Mejora el mantenimiento y auditoría del software.

## ¿Qué contiene un SBoM?
Una Lista de Materiales de Software (SBOM) es un registro formal que detalla los componentes y dependencias de un producto de software, similar a la lista de ingredientes de una receta. En respuesta a la Orden Ejecutiva de Ciberseguridad de mayo de 2021 , la Administración Nacional de Telecomunicaciones e Información (NTIA) publicó directrices sobre los elementos mínimos requeridos en una SBOM. Estas directrices contribuyen a mejorar la transparencia, la seguridad y la integridad de las cadenas de suministro de software.

Los tres elementos fundamentales para la creación de un SBOM incluyen:

## 1. Campos de datos
Estos son los datos esenciales que debe incluir un SBOM. Hay siete campos de datos clave que representan diferentes aspectos de los componentes de software y sus relaciones. Estos incluyen:


- Nombre del proveedor: La entidad u organización que define y proporciona el componente de software.
- Nombre del componente : La designación o etiqueta asignada a la unidad de software por el proveedor.
- Versión del componente : el identificador específico de la versión del componente de software, que indica cambios o actualizaciones.
- Otros identificadores únicos : referencias o identificadores adicionales, como URL de paquetes o claves de bases de datos, que ayudan 
  a identificar de forma única el componente.
- Relación de dependencia : una descripción de cómo los componentes están interconectados o son dependientes, mostrando cómo un 
   componente está incluido o depende de otro.
- Autor de los datos SBOM : El nombre de la entidad responsable de compilar y generar el SBOM.
- Marca de tiempo : la fecha y hora específicas en que se recopilaron los datos SBOM, para indicar cuándo se actualizó la información por última vez.

## 2. Soporte de automatización
Los SBOM deben ser legibles por máquina y estar estructurados para permitir el análisis automatizado. Formatos como JSON, XML o SPDX (Software Package Data Exchange) se utilizan a menudo para facilitar la automatización, garantizando así una fácil integración de los SBOM en los flujos de trabajo de desarrollo de software y seguridad. La automatización también ayuda a identificar y resolver rápidamente vulnerabilidades de seguridad al permitir que las herramientas comparen los datos de los SBOM con las bases de datos de vulnerabilidades.

Los SBOM deben ser legibles por máquina y estar estructurados para permitir el análisis automatizado. Formatos como JSON, XML o SPDX (Software Package Data Exchange) se utilizan a menudo para facilitar la automatización, garantizando así una fácil integración de los SBOM en los flujos de trabajo de desarrollo de software y seguridad. La automatización también ayuda a identificar y resolver rápidamente vulnerabilidades de seguridad al permitir que las herramientas comparen los datos de los SBOM con las bases de datos de vulnerabilidades.

##  3. Prácticas y procesos
Este elemento abarca las prácticas y procedimientos organizativos para generar y gestionar los SBOM. Las consideraciones clave incluyen:


- Cómo se mantienen los SBOM a lo largo del ciclo de vida del software.
- Garantizar que los datos de SBOM estén actualizados y sean precisos.
- Integración de la creación de SBOM en el proceso de desarrollo de software para garantizar actualizaciones continuas y eficientes.

Estos tres elementos ( campos de datos , soporte de automatización y prácticas y procesos) son fundamentales para construir un SBOM confiable y seguro que se alinee con las recomendaciones de la NTIA y respalde los objetivos de la orden ejecutiva de ciberseguridad.

Herramientas de código abierto para crear SBOM
Existen varias herramientas de código abierto que se adaptan a diversos ecosistemas y formatos, como CycloneDX , SPDX y Syft . Exploremos algunas herramientas clave que puede empezar a usar de inmediato:

## 1. CycloneDX

CycloneDX es un estándar SBOM ligero, ampliamente utilizado para análisis de seguridad. Ofrece diversas herramientas de código abierto para generar SBOM en formatos JSON y XML.

Instalación: Puede instalar CycloneDX mediante npm o Homebrew.
npm install -g @cyclonedx/bom

O con Homebrew:
brew install cyclonedx/cyclonedx/bom

Generar un SBOM : navegue al directorio de su proyecto y ejecute:

bomba ciclónica
Este comando genera un SBOM basado en las dependencias de su proyecto.

CycloneDX también proporciona complementos específicos del ecosistema para Maven , npm y pip .

## 2. Tamizar
Syft, creado por Anchore, es una herramienta CLI de código abierto para generar SBOM a partir de imágenes de contenedores, directorios y paquetes de software.

Instalación:
curl -sSfL https://raw.githubusercontent.com/anchore/syft/main/install.sh | sh

Generar SBOM para un directorio:
syft dir:/ruta/a/su/proyecto

Generar SBOM para imágenes de Docker:
syft <nombre_de_imagen>:<etiqueta>

Salida SBOM en formato CycloneDX:
syft dir:/ruta/a/su/proyecto -o cyclonedx-json

## 3. SPDX
El formato de intercambio de datos de paquetes de software (SPDX) es otro estándar SBOM ampliamente aceptado, especialmente para el cumplimiento en proyectos de código abierto.

Cómo generar un SBOM SPDX:
Instalar SPDX-Tools:
pip instala herramientas spdx

Generar un SBOM:
python -m spdx.parsers.loggers muestra.spdx > salida.spdx

Alternativamente, puede probar el generador SPDX SBOM , que admite Java, Node.js, Python y más.

## 4. Seguimiento de dependencias de OWASP
Dependency-Track es una poderosa plataforma para gestionar vulnerabilidades mediante el análisis continuo de SBOM.

Cómo usar Dependency-Track : puede instalar Dependency-Track a través de Docker o instaladores nativos y cargar SBOM generados por herramientas como CycloneDX o Syft para analizar vulnerabilidades.

## 5. Formatos SBOM comunes
CycloneDX : formatos JSON y XML (populares en el análisis de seguridad).

SPDX : formatos RDF, JSON, YAML y Tag-Value (preferidos por cumplimiento).

Syft : formato JSON personalizado de Syft y CycloneDX.

## 6. Validación y uso de SBOM
Una vez generado el SBOM, es fundamental validarlo y analizarlo. Puede utilizar herramientas como:

Validador CycloneDX : para garantizar el cumplimiento de los estándares CycloneDX.

Herramientas en línea SPDX : para validar y visualizar SBOM SPDX.

## 7. Automatización de la creación de SBOM
Puede integrar la generación de SBOM en sus pipelines de CI/CD usando herramientas como GitHub Actions , GitLab CI o Jenkins para crear automáticamente un SBOM para cada compilación.
