# Generación Automática de SBOM (Software Bill of Materials) en Proyectos Node.js o Python

Este documento explica cómo generar automáticamente un **SBOM (Software Bill of Materials)** en proyectos desarrollados en **Node.js** o **Python**, utilizando herramientas estándar y de fácil integración.

---

## 📌 ¿Qué es un SBOM?

Un **SBOM** es una lista formal de los componentes de software (dependencias, bibliotecas, versiones) que conforman una aplicación. Es esencial para:

✅ Seguridad de la cadena de suministro<br>
✅ Cumplimiento normativo<br>
✅ Auditorías y gestión de vulnerabilidades

SBOM (Software Bill of Materials, por sus siglas en inglés) es un inventario detallado de los componentes de software que conforman una aplicación o sistema. En otras palabras, es una lista estructurada que describe todos los elementos de código, bibliotecas y dependencias que componen un software, indicando las versiones y otras informaciones relevantes.

***Características clave de un SBOM:***

- **Transparencia:** Un SBOM proporciona visibilidad sobre los componentes de software que se están utilizando, lo cual es crucial para la seguridad, el cumplimiento y la gestión de riesgos.

- **Seguridad:** Permite identificar vulnerabilidades en bibliotecas o dependencias de terceros, ya que si una vulnerabilidad es descubierta en una librería que estás usando, puedes rápidamente localizar todas las aplicaciones o sistemas afectados.

- **Cumplimiento:** Algunas regulaciones y estándares requieren la creación de un SBOM para garantizar que las organizaciones puedan demostrar el uso de software de código abierto o licencias adecuadas.

- **Gestión de dependencias:** Con un SBOM, puedes tener un control detallado sobre las versiones de las dependencias de software y asegurarte de que no haya versiones antiguas o inseguras en uso.

- **Interoperabilidad:** El SBOM puede ser generado en formatos estándar (como SPDX, CycloneDX, o SWID) que permiten la interoperabilidad entre diferentes herramientas y sistemas.

***¿Por qué es importante un SBOM?***

- **Seguridad:** Con el aumento de vulnerabilidades conocidas (como las de Log4j, Heartbleed, etc.), tener un SBOM te permite identificar rápidamente qué componentes en tu software pueden estar afectados.

- **Gestión de riesgos:** Al conocer los componentes exactos que componen tu software, puedes gestionar mejor los riesgos asociados con ellos, como la obsolescencia, las actualizaciones o los cambios de licencias.

- **Cumplimiento legal:** Es importante para organizaciones que necesitan demostrar el cumplimiento de las licencias de software de código abierto y otros requisitos regulatorios.

***Ejemplo de un SBOM:***

Un SBOM podría contener información como:

✅ Nombre de la librería o componente.<br>
✅ Versión.<br>
✅ Licencia.<br>
✅ Autor(es).<br>
✅ Vulnerabilidades conocidas.<br>
✅ Descripción del componente.

***Formatos comunes de SBOM:***

**PDX (Software Package Data Exchange):** Un formato abierto utilizado para compartir información sobre licencias y componentes de software.

**CycloneDX:** Un estándar abierto para crear SBOMs enfocados en la seguridad y el cumplimiento.

**SWID (Software Identification Tags):** Un estándar para crear etiquetas de identificación de software, que también puede ser utilizado para generar SBOMs.

<p align="center">
  <img src="https://scribesecurity.com/wp-content/uploads/2022/01/sbom-components-scribe-security-768x451.jpeg.webp" alt="SBOM" />
</p>
---

## 🚀 Generar SBOM en **Node.js**

### 1️⃣ Instala la herramienta `cyclonedx-bom`

```
npm install -g @cyclonedx/bom
```

👉 Esta herramienta genera un SBOM compatible con el estándar **CycloneDX**.

---

### 2️⃣ Genera el SBOM desde tu proyecto

Navega al directorio raíz del proyecto y ejecuta:

```
cyclonedx-bom -o sbom.json
```

✅ Esto creará un archivo `sbom.json` con el listado de dependencias.

---

### 3️⃣ Otras opciones

Puedes exportarlo en formato XML en lugar de JSON:

```
cyclonedx-bom -o sbom.xml -t xml
```

---

## 🐍 Generar SBOM en **Python**

### 1️⃣ Instala `cyclonedx-bom` (para Python)

Usa **pipx** o **pip**:

```
pip install cyclonedx-bom
```

O bien con pipx:

```
pipx install cyclonedx-bom
```

---

### 2️⃣ Genera el SBOM desde `requirements.txt`

Si tienes un archivo `requirements.txt`, ejecuta:

```
cyclonedx-py -r requirements.txt -o sbom.json
```

✅ Esto analiza las dependencias listadas e imprime el SBOM en formato JSON.

---

### 3️⃣ Desde un entorno virtual

Si trabajas con **virtualenv** o similar:

```
cyclonedx-py -i venv/lib/python3.*/site-packages -o sbom.json
```

---

## 📝 Agregar SBOM al repositorio

Agrega el archivo generado `sbom.json` o `sbom.xml` al control de versiones:

```
git add sbom.json
git commit -m "Add generated SBOM"
git push
```

---

## 📄 Ejemplo de archivo `sbom.json`

```json
{
  "bomFormat": "CycloneDX",
  "specVersion": "1.4",
  "version": 1,
  "components": [
    {
      "type": "library",
      "name": "express",
      "version": "4.18.2",
      "purl": "pkg:npm/express@4.18.2"
    }
  ]
}
```

---

## ✅ Recomendaciones

🔐 Genera y actualiza tu SBOM con cada release.

📦 Usa el SBOM en herramientas de análisis de vulnerabilidades.

📝 Puedes publicarlo como parte de la documentación de tu proyecto.

---

## 📚 Referencias

* [CycloneDX Node.js CLI](https://github.com/CycloneDX/cyclonedx-node-module)
* [CycloneDX Python](https://github.com/CycloneDX/cyclonedx-python)

---


## 🧑‍🎓 Autores Grupo 5

- Calvera Chaparro Yesith Alonso
- Gutierrez Florez Alfredo Jose
- Cruz Rojas Andres Felipe
- Mena Vargas Yeikin Andres
- Rodriguez Arguello Angel Eduardo
