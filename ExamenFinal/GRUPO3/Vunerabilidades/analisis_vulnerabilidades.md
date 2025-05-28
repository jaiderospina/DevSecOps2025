# 🔒 Vulnerabilidades detectadas en `m4rl0n25/casacafe:latest`

## 🧾 Información general

- **Digest:** `sha256:dff7760fc5de0ea22a05644c2f1e015e7c02e5aa709839c3f49af468c5470dec`
- **Plataforma:** `linux/amd64`
- **Tamaño:** 177 MB
- **Paquetes escaneados:** 259
- **Resumen de vulnerabilidades:**
  - 🟥 **Críticas:** 0
  - 🟧 **Altas:** 3
  - 🟨 **Medias:** 3
  - 🟩 **Bajas:** 70
  - ❔ **No especificadas:** 1

## 🛠️ Vulnerabilidades Altas en `libxml2 (2.9.14+dfsg-1.3~deb12u1)`

### 1. [CVE-2022-49043](https://scout.docker.com/v/CVE-2022-49043)
- **Tipo:** Use-after-free
- **Descripción:** Ocurre en `xmlXIncludeAddNode` en `xinclude.c`.
- **Versión fija:** No corregido aún.
- **EPSS:** 0.024% (percentil 5)
- **Nota:** Corregido en libxml2 v2.11.0.

---

### 2. [CVE-2025-24928](https://scout.docker.com/v/CVE-2025-24928)
- **Tipo:** Desbordamiento de búfer basado en pila
- **Descripción:** Afecta `xmlSnprintfElements` en `valid.c`, explotable mediante DTD no confiables.
- **Versión fija:** No corregido aún.
- **EPSS:** 0.007% (percentil 0)

---

### 3. [CVE-2024-56171](https://scout.docker.com/v/CVE-2024-56171)
- **Tipo:** Use-after-free
- **Descripción:** En `xmlschemas.c`, explotable con esquemas XML maliciosos.
- **Versión fija:** No corregido aún.
- **EPSS:** 0.007% (percentil 0)

## 🟩 Vulnerabilidades Bajas en `libxml2`

### 1. [CVE-2025-32415](https://scout.docker.com/v/CVE-2025-32415)
- **Tipo:** Lectura fuera de límites (under-read)
- **EPSS:** 0.020% (percentil 4)
- **Versión fija:** No corregido.

### 2. [CVE-2025-27113](https://scout.docker.com/v/CVE-2025-27113)
- **Tipo:** Desreferencia de puntero nulo en `xmlPatMatch`
- **EPSS:** 0.050% (percentil 15)
- **Versión fija:** No corregido.

### 3. [CVE-2024-34459](https://scout.docker.com/v/CVE-2024-34459)
- **Tipo:** No especificado
- **EPSS:** 0.139% (percentil 35)
- **Versión fija:** No corregido.

---

## 📝 Recomendaciones : 

- 📦 Considerar actualizar `libxml2` a una versión más reciente (≥ 2.12.10 o 2.14.x).
- 🔐 Establecer políticas de escaneo continuo de imágenes.
- 📤 Minimizar la superficie de ataque eliminando paquetes innecesarios del contenedor.

---

> Este análisis se basa en un escaneo de seguridad de la imagen `m4rl0n25/casacafe:latest`. Se recomienda seguir buenas prácticas de seguridad en el ciclo de vida de contenedores.

