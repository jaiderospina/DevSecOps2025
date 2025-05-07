# <center>Software Bill of Materials (SBOM) </center>

### Tabla de Contenido

* [¿Qué es un SBOM?](#qué-es-un-sbom)
* [Características principales de un SBOM](#características-principales-de-un-sbom)
* [Ventajas de implementar un SBOM en proyectos](#ventajas-de-implementar-un-sbom-en-proyectos)
* [Generación de un SBOM en proyectos JavaScript](#generación-de-un-sbom-en-proyectos-javascript)
    * [Cyclone DX](#cyclone-dx)
    * [SPDX](#spdx)
    * [npm audit](#npm-audit)
    * [Dependency Track](#dependency-track)
    * [OWASP Dependency Check](#owaps-dependency-check)
* [SBOM para proyectos JavaScript](#sbom-para-proyectos-javascript)

## Qué es un SBOM


Un Software Bill of Materials (SBOM) es un inventario formal y detallado de todos los componentes de software que conforman una aplicación. Similar a una lista de ingredientes en un producto alimenticio, un SBOM proporciona una lista completa de las dependencias, bibliotecas, componentes y módulos utilizados en un proyecto de software, junto con información sobre sus versiones, licencias y posibles vulnerabilidades.

## Características principales de un SBOM

1.  **Inventario completo**: Lista exhaustiva de todos los componentes de software, incluyendo dependencias directas e indirectas.
    
2.  **Información de versiones**: Detalla las versiones específicas de cada componente utilizado.
    
3.  **Metadatos de licencias**: Documenta las licencias asociadas con cada componente.
    
4.  **Información de proveedores**: Identifica los creadores o mantenedores de cada componente.
    
5.  **Identificadores únicos**: Utiliza identificadores estándar como CPE (Common Platform Enumeration) o PURL (Package URL).
    
6.  **Formato estandarizado**: Puede seguir formatos como SPDX (Software Package Data Exchange), CycloneDX o SWID (Software Identification Tags).
    
7.  **Información de vulnerabilidades**: Puede incluir o vincularse a datos sobre vulnerabilidades conocidas.


## Ventajas de implementar un SBOM en proyectos
### 1. Seguridad mejorada

-   **Identificación rápida de vulnerabilidades**: Permite identificar componentes afectados cuando se descubren nuevas vulnerabilidades.
    
-   **Evaluación de riesgos**: Facilita la evaluación del impacto potencial de las vulnerabilidades.
    
-   **Respuesta a incidentes**: Acelera la respuesta ante amenazas de seguridad.
    

### 2. Cumplimiento normativo

-   **Requisitos gubernamentales**: Cumple con mandatos como la Orden Ejecutiva 14028 en EE.UU.
    
-   **Estándares de la industria**: Ayuda a cumplir con estándares como ISO/IEC 27001.
    
-   **Auditorías**: Simplifica los procesos de auditoría de seguridad.
    

### 3. Gestión de licencias

-   **Cumplimiento de licencias**: Ayuda a asegurar el cumplimiento de los términos de licencia de cada componente.
    
-   **Prevención de conflictos**: Identifica posibles conflictos entre licencias de diferentes componentes.
    
-   **Gestión de riesgos legales**: Reduce el riesgo de problemas legales relacionados con licencias.
    

### 4. Mantenimiento y actualización

-   **Gestión de dependencias**: Facilita la identificación de componentes obsoletos o que requieren actualización.
    
-   **Planificación de actualizaciones**: Permite planificar actualizaciones de manera más efectiva.
    
-   **Reducción de deuda técnica**: Ayuda a mantener el software actualizado y seguro.
    

### 5. Transparencia en la cadena de suministro

-   **Visibilidad**: Proporciona transparencia sobre los componentes utilizados.
    
-   **Confianza**: Genera confianza entre proveedores, clientes y usuarios finales.
    
-   **Trazabilidad**: Permite rastrear el origen de cada componente.
- 
## Generación de un SBOM en proyectos JavaScript
Existen varias herramientas para generar SBOMs en proyectos JavaScript:

### 1. Cyclone DX

CycloneDX es un formato de SBOM ligero diseñado específicamente para aplicaciones de seguridad:

```bash
# Instalación
npm install -g @cyclonedx/bom

# Generación del SBOM
cyclonedx-bom -o sbom.xml

```


### 2. SPDX

SPDX es un estándar para comunicar información de licencias y componentes:

```bash
# Usando herramientas como spdx-sbom-generator
npm install -g @spdx/sbom-generator
spdx-sbom-generator -p /ruta/al/proyecto

```

Copybash

### 3. npm-audit

Aunque no genera un SBOM completo, proporciona información valiosa sobre dependencias:

```bash
npm audit --json > npm-audit.json

```


### 4. Dependency-Track

Una plataforma que puede consumir SBOMs y proporcionar análisis continuo:

```bash
# Generar SBOM con CycloneDX y subir a Dependency-Track
cyclonedx-bom -o sbom.xml
curl -X PUT "https://dependency-track.example.com/api/v1/bom" -H "Content-Type: application/xml" -d @sbom.xml

```
### 5. OWASP Dependency check

Herramienta que puede generar informes sobre vulnerabilidades en dependencias:

```bash
npm install -g dependency-check
dependency-check /ruta/al/proyecto --out ./reports
```
## SBOM para proyectos JavaScript
1.  Instala la herramienta CycloneDX:
    

```bash
npm install -g @cyclonedx/bom

```


2.  Navega al directorio raíz de tu proyecto y ejecuta:
    

```bash
cyclonedx-bom -o tourisplan-sbom.xml

```

3.  Para un formato más legible, puedes generar también una versión JSON:
    

```bash
cyclonedx-bom -o tourisplan-sbom.json -j

```

##Pasos generales para generar un SBOM automático desde Python:

1. Elige una herramienta de generación SBOM:

Syft: Una herramienta de línea de comandos y biblioteca de Go que puede generar SBOMs para una variedad de lenguajes y formatos. 
CycloneDX Python SBOM Generation Tool: Herramienta específica para Python que soporta diferentes formatos de dependencia. 
sbom4python: Una herramienta gratuita de código abierto que genera SBOMs en diversos formatos, incluyendo SPDX y CycloneDX. 
distro2sbom: Genera SBOM para aplicaciones o instalaciones completas del sistema en diversos formatos. 

2. Instala la herramienta elegida:

Utiliza pip para instalar la herramienta: pip install syft o pip install cyclone-dx o pip install sbom4python. 

3. Ejecuta la herramienta:

La herramienta utilizará los archivos de dependencia de tu proyecto para generar el SBOM. Por ejemplo, para Syft: syft -f json . > my_project_sbom.json (esto genera un SBOM en formato JSON). 
Para CycloneDX: cyclonedx-python-sbom . -o my_project_sbom.xml (esto genera un SBOM en formato XML). 

Ejemplo usando Syft:
Código

pip install syft
syft -f json . > my_project_sbom.json
Este comando instalará Syft y luego generará un archivo my_project_sbom.json que contendrá el SBOM de tu proyecto en formato JSON. 
