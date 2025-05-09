# Generación Automática de SBOM (Software Bill of Materials) en Proyectos Node.js o Python

Este documento explica cómo generar automáticamente un **SBOM (Software Bill of Materials)** en proyectos desarrollados en **Node.js** o **Python**, utilizando herramientas estándar y de fácil integración.

---

## 📌 ¿Qué es un SBOM?

Un **SBOM** es una lista formal de los componentes de software (dependencias, bibliotecas, versiones) que conforman una aplicación. Es esencial para:

✅ Seguridad de la cadena de suministro
✅ Cumplimiento normativo
✅ Auditorías y gestión de vulnerabilidades

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

🔐 Genera y actualiza tu SBOM con cada release
📦 Usa el SBOM en herramientas de análisis de vulnerabilidades
📝 Puedes publicarlo como parte de la documentación de tu proyecto

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
