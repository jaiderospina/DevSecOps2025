# SBOM (Software Bill of Materials)

   ![image](https://github.com/user-attachments/assets/fbb9eab6-5f36-4470-b823-b38f8fae7af7)


---

Generar un SBOM (Software Bill of Materials) automáticamente desde un proyecto como Node.js o Python es una práctica fundamental para la seguridad del software, ya que permite listar de forma estructurada todas las dependencias y componentes usados. A continuación, te explico cómo hacerlo en ambos entornos:

---

## ¿Qué es un SBOM?
La SBOM (del inglés Software Bill of Materials) es un inventario detallado de los componentes de software que componen una aplicación o sistema. En otras palabras, es una lista que incluye todos los componentes, librerías, dependencias y otros elementos de software utilizados en una aplicación. Este concepto ha ganado importancia especialmente en los últimos años debido a la necesidad de mejorar la seguridad, el control y la trazabilidad del software en entornos de desarrollo y producción.Ayuda a:
- Identificar vulnerabilidades conocidas.
- Facilitar auditorías de seguridad.
- Cumplir con regulaciones.

En otras palabras, el SBOM es una lista detallada de "ingredientes" del software, que documenta qué software se usa, quién lo proporciona, en qué versión está, y cómo se relaciona con otros componentes.

---
# 📘 Guía Profesional sobre SBOM (Software Bill of Materials)

> **Definición**: Una **Software Bill of Materials (SBOM)** es un documento estructurado que identifica todos los componentes, bibliotecas, dependencias y metadatos que conforman un producto de software. Su propósito principal es brindar **visibilidad, trazabilidad y control** sobre la composición del software, tanto propio como de terceros.

---

## 🎯 ¿Por qué es importante implementar una SBOM?

La adopción de SBOMs se ha convertido en una **práctica fundamental** en entornos de desarrollo profesional y seguro. A continuación, se detallan sus beneficios clave:

### 1. Seguridad

Permite identificar y gestionar **vulnerabilidades conocidas** (como las registradas en bases como CVE/NVD) dentro de las dependencias. Esto acelera la detección, corrección y mitigación de riesgos en la cadena de suministro del software.

### 2. Cumplimiento normativo

Es vital para cumplir con regulaciones como:

- **NIST SP 800-218** (Secure Software Development Framework)
- **ISO/IEC 5230** (OpenChain)
- **Executive Order 14028** (EE. UU.)

La SBOM proporciona evidencia documental del cumplimiento en auditorías internas y externas.

### 3. Gestión de licencias

Ayuda a **auditar las licencias** de software de código abierto, evitando el uso accidental de componentes con restricciones legales (por ejemplo, copyleft estricto).

### 4. Gestión de riesgos

Facilita la **evaluación del riesgo técnico y legal** asociado con cada componente. Esto es clave en procesos de integración continua (CI), fusiones tecnológicas o despliegues en ambientes críticos.

### 5. Transparencia y trazabilidad

Proporciona un historial claro de los componentes utilizados en cada versión del software. Esto:

- Facilita auditorías
- Mejora la confianza de clientes y stakeholders
- Permite reproducibilidad de builds

### 6. Auditoría y control de calidad

Facilita procesos de verificación y aseguramiento de la integridad del software.}

---

## 📑 Contenido recomendado de una SBOM

Una SBOM profesional y útil debe incluir los siguientes campos mínimos por componente:

- **Nombre del componente**: Identificador del paquete o módulo.
- **Versión**: Número de versión específica utilizada.
- **Licencia**: Tipo de licencia (MIT, GPLv3, Apache 2.0, etc.).
- **Proveedor o autor**: Organización o individuo responsable.
- **Relaciones o dependencias**: Componentes de los cuales depende.
- **Identificadores únicos**: Como hashes SHA-256, CPE o Package URL (PURL).
- **Origen o repositorio**: Fuente de donde fue obtenido el componente (PyPI, npm, Maven, GitHub, etc.).

---

## 📦 Formatos estándar de SBOM

Existen diferentes formatos ampliamente aceptados por la industria. Los más relevantes son:

### SPDX (Software Package Data Exchange)

- Estándar abierto mantenido por la Linux Foundation.
- Utilizado por proyectos como OpenChain y OpenSSF.
- Compatible con JSON, RDF, YAML, Tag-Value.

### CycloneDX

- Desarrollado por OWASP.
- Orientado a la seguridad y fácil de integrar en pipelines CI/CD.
- Compatible con XML, JSON y Protobuf.

### SWID (Software Identification Tag)

- Estándar ISO/IEC 19770-2.
- Útil para inventarios de software y gestión de activos empresariales.

---

## 🛡️ SBOM y la Ciberseguridad

Las amenazas modernas, como los **ataques a la cadena de suministro** (ej. SolarWinds, Log4Shell), han expuesto la necesidad urgente de **visibilidad completa sobre el software integrado** en un producto.

La SBOM actúa como una **herramienta preventiva y de respuesta rápida** ante vulnerabilidades. Al identificar si una versión vulnerable está presente en el entorno, se puede:

- Activar planes de mitigación
- Parchear componentes afectados
- Cumplir con tiempos de respuesta exigidos por marcos regulatorios

---

## 🚀 SBOM en el Desarrollo Moderno

La SBOM se alinea perfectamente con las prácticas de:

- **DevSecOps**: Integración de seguridad en todo el ciclo de vida del desarrollo.
- **CI/CD Pipelines**: Automatización de escaneo y generación de SBOM en cada build.
- **Auditoría de código abierto**: Evaluación técnica y legal de componentes OSS (open source software).

---

## 📈 Casos de uso comunes

- Empresas SaaS que ofrecen software a clientes del sector financiero.
- Equipos de seguridad que deben responder ante alertas de vulnerabilidad (como CVEs).
- Empresas que integran múltiples microservicios y necesitan trazabilidad de cada imagen Docker.
- Organizaciones que distribuyen SDKs o bibliotecas públicas.

---

## 🛠️ Herramientas para generar SBOM

Algunas herramientas ampliamente utilizadas para generar o analizar SBOMs incluyen:

| Herramienta | Formato Soportado | Integración CI/CD | Repositorio |
|------------|-------------------|--------------------|-------------|
| [Syft](https://github.com/anchore/syft) | SPDX, CycloneDX | ✅ | GitHub |
| [Bomber](https://github.com/devops-kung-fu/bomber) | CycloneDX | ✅ | GitHub |
| [Trivy](https://github.com/aquasecurity/trivy) | CycloneDX | ✅ | GitHub |
| [SPDX Tools](https://spdx.dev/tools/) | SPDX | 🟡 Parcial | Oficial |
| [OWASP Dependency-Track](https://dependencytrack.org/) | CycloneDX | ✅ | Proyecto OWASP |

---

## 📄 Referencias y recursos externos

- [Linux Foundation - SPDX](https://spdx.dev/)
- [OWASP CycloneDX Project](https://cyclonedx.org/)
- [NIS]()

---
## Generar SBOM en Node.js

Herramienta recomendada: CycloneDX + Node.js.

Pasos:
1. Instalar la herramienta:

![image](https://github.com/user-attachments/assets/5f4d6610-22c2-492b-a838-90d8055a52ed)

2. Generar el SBOM:

Ubícate en el directorio raíz del proyecto y ejecuta:

![image](https://github.com/user-attachments/assets/10212a6c-d8ef-4c3b-a08e-fb1b0d2a393c)

Esto escaneará tu package-lock.json o yarn.lock y generará un archivo SBOM en formato JSON.

---

3. Generar el SBOM:

![image](https://github.com/user-attachments/assets/2f996475-cc1b-48d3-8a2e-e206e3f33898)

Esto generará un archivo SBOM en formato CycloneDX usando las dependencias listadas en requirements.txt.

---

 ## Formatos comunes de SBOM

Existen varios formatos y estándares reconocidos internacionalmente para estructurar un SBOM, entre ellos:
 - CycloneDX (JSON/XML): Promovido por OWASP, con enfoque en seguridad.
 - SPDX (Software Package Data Exchange): Desarrollado por la Linux Foundation.
 - SWID (Software Identification Tags) : Utilizado por grandes empresas y organismos gubernamentales.

---
**Buenas prácticas**
* Asegúrate de tener un package-lock.json actualizado antes de generar la SBOM.
* Automatiza la generación en tu CI/CD (por ejemplo, con GitHub Actions).
* Valida el archivo generado con herramientas como el validador de CycloneDX si es necesario.

---

ejemplo práctico de cómo generar un SBOM automáticamente en un proyecto Node.js.

1. Crear un proyecto básico

 ![image](https://github.com/user-attachments/assets/cade1e8a-2d52-4889-82f4-4826e8f2e19d)

2. Instalar la herramienta CycloneDX

![image](https://github.com/user-attachments/assets/1d1c09a4-84db-489e-a8e2-4077ed69b26a)


3. Generar el SBOM

![image](https://github.com/user-attachments/assets/53a00dfa-1246-407d-88bd-f648001423a4)

   Esto generará un archivo bom-node.json con todos los componentes del proyecto.

   ---

  integrar la generación automática de un SBOM en un pipeline CI/CD, tanto en GitHub Actions

**Paso 1: Asegúrate de que el proyecto tenga un package-lock.json**

GitHub Actions necesita este archivo para saber exactamente qué dependencias tienes. Si no lo tienes, genera uno con:
![image](https://github.com/user-attachments/assets/1a78a381-eee7-4d23-b16b-c8c746564a66)

**Paso 2: Agrega este workflow de GitHub Actions**

Crea un archivo en tu repositorio en:
.github/workflows/sbom.yml

![image](https://github.com/user-attachments/assets/4ed2238a-af17-4fd8-bb5b-dbcc618f398a)


**Resultado**
1. Instala tus dependencias.
2. Genera el archivo sbom.xml con CycloneDX.
3. Guarda el archivo como artefacto para su descarga.

Puedes encontrar el archivo SBOM en la pestaña Actions de GitHub > elegir el workflow > Artifacts.

  
---
## Estructura esperada:

 El  proyecto ya debe tener su código y un archivo requirements.txt (Python) o package-lock.json (Node.js).

 EJEM: para Node.js (.github/workflows/generate-sbom.yml)
 
 ![image](https://github.com/user-attachments/assets/41328dc9-3df4-44a6-9a23-f3f9d1498a06)

 ## Relevancia actual

 En 2021, el gobierno de Estados Unidos emitió una orden ejecutiva que establece el uso de SBOM como requisito obligatorio en contratos de software con entidades federales, marcando un hito en su adopción.

Las organizaciones modernas —desde startups hasta gobiernos— están implementando SBOM como parte de su estrategia de seguridad y gestión de riesgos, especialmente frente a la creciente ola de amenazas en la cadena de suministro de software.

## Ventajas de un SBOM

- Identificación de vulnerabilidades:
Permite identificar rápidamente vulnerabilidades en componentes de software, lo que facilita su remediación y mejora la seguridad general del producto. 

- Gestión de licencias:
Facilita el seguimiento y la gestión de las licencias de los componentes de software, evitando posibles problemas legales y mejorando el cumplimiento.

- Respuesta a incidentes:
Permite una respuesta más rápida y efectiva a incidentes de seguridad, al facilitar la identificación de los componentes afectados y la implementación de medidas de mitigación

- Ahorro de tiempo y costos:
Automatiza la recopilación y gestión de información sobre los componentes de software, reduciendo el tiempo y los costos asociados con la seguridad y el cumplimiento.

- Optimización de los procesos de desarrollo:
Permite una mejor planificación y ejecución de las pruebas de seguridad, al identificar de forma temprana posibles vulnerabilidades y riesgos

- Reducción de riesgos:
Ayuda a reducir el riesgo de ataques a la cadena de suministro, al identificar y mitigar los riesgos asociados con componentes de software vulnerables o maliciosos. 

 ---

 Grupo3:
--
 - Sara Sofia Moreno
 - Juan Camilo Cristiano
 - Luis Alejandro Romero
 - Yonatan Castellanos
 - Marlon Artunduaga

---
 

