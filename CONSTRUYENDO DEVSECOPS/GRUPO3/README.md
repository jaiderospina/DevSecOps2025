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

---
**¿Por qué es importante una SBOM**

1. Seguridad: La SBOM ayuda a identificar vulnerabilidades conocidas en las dependencias del software. Si un componente tiene una vulnerabilidad conocida (como una falla de seguridad), la SBOM facilita la identificación y actualización de esos componentes
2. Cumplimiento: Muchas regulaciones y estándares, como los de la industria financiera o de la salud, requieren un registro detallado de los componentes de software utilizados. La SBOM puede ayudar a cumplir con estas normativas.
3. Trazabilidad y gestión de licencias: Permite gestionar las licencias de los componentes de código abierto y evitar el uso indebido de software con restricciones legales.
4. Gestión de riesgos: Ayuda a las organizaciones a comprender mejor los riesgos asociados con las vulnerabilidades y dependencias de terceros.
5. Transparencia: Facilita la auditoría y proporciona transparencia en el ciclo de vida del software.

---
**¿Qué debe contener una SBOM?**
* Nombre del componente: El nombre de la librería o módulo utilizado.
* Versión: La versión específica de cada componente.
* Licencia: La licencia bajo la cual se distribuye el componente (por ejemplo, MIT, GPL, etc.).
* Dependencias: Información sobre otros componentes que dependen de este.
* Identificadores: Pueden incluir identificadores únicos (como un hash SHA) para verificar la autenticidad de los componentes.
* Ubicación o fuente: Cómo y dónde se obtuvo el componente (por ejemplo, repositorios públicos como GitHub o npm).

---
**Formatos comunes de SBOM**
Existen varios formatos estándar para representar una SBOM, entre los más utilizados están:
1. SPDX (Software Package Data Exchange): Un estándar abierto para describir la composición de software, incluyendo licencias, componentes y otras relaciones.
2. CycloneDX: Un formato ligero y de fácil implementación para representar una SBOM.
3. SWID (Software Identification Tag): Estándar ISO para identificar software y sus componentes, utilizado principalmente en contextos de gestión de activos de software.

---
**SBOM y la Ciberseguridad**
Uno de los usos más relevantes de la SBOM es su contribución a la ciberseguridad. Las amenazas como los ataques de "supply chain" (cadena de suministro) han demostrado la necesidad de tener visibilidad sobre los componentes de software que se utilizan, especialmente cuando se integran bibliotecas o paquetes de terceros. La SBOM proporciona un mecanismo para identificar rápidamente si algún componente tiene una vulnerabilidad conocida.

---
**SBOM y el Futuro**
En el futuro, el uso de SBOM se espera que sea más común y obligatorio, debido a su potencial para mejorar la seguridad y la transparencia del software. Por ejemplo, la Executive Order on Improving the Nation’s Cybersecurity emitida por el gobierno de Estados Unidos en 2021, insta a las organizaciones a adoptar SBOMs como parte de sus prácticas de ciberseguridad.

En resumen, la SBOM es una herramienta esencial para garantizar la seguridad, la conformidad y la transparencia en el software moderno, especialmente cuando se trabaja con software de código abierto y dependencias de terceros.

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

 - CycloneDX (JSON/XML)
 - SPDX (Software Package Data Exchange)
 - SWID (Software Identification Tags)

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

name: Generar SBOM

on:
  push:
    branches: [ main ]
  pull_request:
    branches: [ main ]

jobs:
  sbom:
    runs-on: ubuntu-latest

    steps:
      - name: Clonar el repositorio
        uses: actions/checkout@v3

      - name: Instalar Node.js
        uses: actions/setup-node@v3
        with:
          node-version: '18'  # Ajusta según tu versión de Node

      - name: Instalar dependencias
        run: npm ci

      - name: Instalar herramienta CycloneDX
        run: npm install -g @cyclonedx/bom

      - name: Generar SBOM
        run: cyclonedx-bom -o sbom.xml

      - name: Guardar SBOM como artefacto
        uses: actions/upload-artifact@v3
        with:
          name: sbom
          path: sbom.xml

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

 ---

 Grupo3:
--
 - Sara Sofia Moreno
 - Juan Camilo Cristiano
 - Luis Alejandro Romero
 - Yonatan Castellanos
 - Marlon Artunduaga

---
 

