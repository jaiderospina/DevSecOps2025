<div align="center">
  <h1>Generación automática de un SBOM en proyectos Node.js y Python</h1>
</div>


## ¿Qué es un SBOM?

Un **SBOM (Software Bill of Materials)** es un inventario detallado de todos los componentes de software que conforman una aplicación. Este archivo estructurado enumera:

- Bibliotecas externas utilizadas.
- Dependencias directas e indirectas.
- Versiones específicas.
- Licencias de cada componente.
- Hashes para verificar integridad.
- Información de proveedor y origen.

Un SBOM puede generarse en formatos estándar como **CycloneDX**, **SPDX** o **SWID**.

## ¿Por qué es importante?

### 1. **Seguridad**
- Detecta vulnerabilidades conocidas (ej. Log4Shell).
- Mejora la respuesta a incidentes de seguridad.

### 2. **Cumplimiento de licencias**
- Ayuda a identificar licencias restrictivas o incompatibles.
- Asegura cumplimiento legal y normativo.

### 3. **Trazabilidad**
- Facilita auditorías y revisiones.
- Permite saber de dónde provienen los componentes.

### 4. **Integración en DevSecOps**
- Se puede automatizar en pipelines CI/CD.
- Apoya el desarrollo seguro desde la base.

## ¿Qué contiene un SBOM típico?

| Elemento       | Descripción                                                                 |
|----------------|-----------------------------------------------------------------------------|
| **Componentes**| Lista de bibliotecas, frameworks, binarios, contenedores, etc.              |
| **Versiones**  | Versiones específicas de cada componente.                                   |
| **Licencias**  | Tipo de licencia (MIT, GPL, Apache, etc.).                                  |
| **Origen**     | De dónde proviene cada componente (URL, repositorio, etc.).                 |
| **Hashes**     | Hash criptográfico SHA-256 o similar para verificar la integridad.          |
| **Relaciones** | Describe cómo los componentes se relacionan entre sí (dependencias, etc.). |

<div align="center">
  <h1>Herramientas comunes para generar un SBOM</h1>
</div>

<div align="center">
  <h2>1. Node.js</h2>
</div>

#### Opción A: Usando CycloneDX para Node.js

- **Instalación**:
  ```bash
  npm install -g @cyclonedx/bom
  ```

- **Generación del SBOM**:
  Ejecuta dentro del proyecto con `package-lock.json`:
  ```bash
  cyclonedx-bom -o bom.xml
  ```

- **Formato alternativo (JSON)**:
  ```bash
  cyclonedx-bom -o bom.json -j
  ```

#### Opción B: Usando Syft

- **Instalación (recomendado vía curl o brew)**:
  ```bash
  curl -sSfL https://raw.githubusercontent.com/anchore/syft/main/install.sh | sh -s -- -b /usr/local/bin
  ```

- **Generación del SBOM para proyectos Node.js**:
  ```bash
  syft dir:. --output cyclonedx-json
  ```

<div align="center">
  <h2>2. Python</h2>
</div>

#### Opción A: Usando CycloneDX Python

- **Instalación**:
  ```bash
  pip install cyclonedx-bom
  ```

- **Requisitos**:
  Tener un archivo `requirements.txt` o usar `pipenv`/`poetry`.

- **Generar SBOM desde requirements.txt**:
  ```bash
  cyclonedx-py -r requirements.txt -o sbom.xml
  ```

- **Con Poetry**:
  ```bash
  cyclonedx-py -p poetry -o sbom.xml
  ```

#### Opción B: Syft para Python

- **Uso directo desde la raíz del proyecto**:
  ```bash
  syft dir:. --output spdx-json
  ```

## Formatos comunes de SBOM

| Formato     | Características                                 |
|-------------|--------------------------------------------------|
| CycloneDX   | Enfocado en seguridad. Soporta XML y JSON.       |
| SPDX        | Estandarizado por Linux Foundation. Uso legal.   |
| SWID        | Más usado en entornos empresariales cerrados.    |


## Recomendaciones

- **Integrar en CI/CD**: Automatiza la generación de SBOMs en pipelines (GitHub Actions, GitLab CI, etc.).
- **Verifica vulnerabilidades**: Usa herramientas como `grype` o `trivy` junto con el SBOM.
- **Versiona el SBOM**: Sube el `sbom.json` o `sbom.xml` a tu repositorio para trazabilidad.

## Integrantes

- Diana Lizeth Mahecha Guevara  
- Carlos Andres David Ovalle  
- German Alexis Gonzalez Reay  
- Jairo Yesid Rodriguez Gonzalez  
- Wuilmer Rafael Briceño Camacho