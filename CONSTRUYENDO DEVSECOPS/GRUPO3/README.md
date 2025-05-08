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
📦 ¿Por qué es importante una SBOM?
Una Software Bill of Materials (SBOM) es un inventario detallado de todos los componentes que conforman una aplicación de software, incluyendo bibliotecas, frameworks y dependencias de terceros. Su implementación es clave por las siguientes razones:

Seguridad
Una SBOM permite identificar componentes con vulnerabilidades conocidas, facilitando su rastreo y actualización oportuna. Esto es fundamental para prevenir explotaciones a través de dependencias comprometidas.

Cumplimiento Normativo
Diversas regulaciones y estándares internacionales —como los de las industrias financiera, de salud o gubernamentales— exigen trazabilidad y documentación precisa del software utilizado. Una SBOM ayuda a cumplir con estos requisitos legales.

Gestión de Licencias y Trazabilidad
Permite auditar y gestionar correctamente las licencias de los componentes, previniendo el uso no autorizado o la integración de software con restricciones legales que puedan comprometer la distribución o comercialización.

Gestión de Riesgos
Facilita el análisis de riesgos asociados al uso de componentes de terceros, permitiendo tomar decisiones informadas en cuanto a mantenimiento, reemplazo o actualización de bibliotecas.

Transparencia y Auditoría
Proporciona visibilidad total sobre los elementos del software, lo cual es esencial durante auditorías internas o externas y para generar confianza en clientes, socios y reguladores.

🧾 ¿Qué debe contener una SBOM?
Una SBOM eficaz debe incluir la siguiente información estructurada:

Nombre del componente: Identificación del módulo, librería o paquete.

Versión: Versión específica del componente utilizado.

Licencia: Tipo de licencia bajo la que se distribuye el componente (MIT, GPL, Apache 2.0, etc.).

Dependencias: Lista de dependencias asociadas o requeridas por ese componente.

Identificadores únicos: Hashes (ej. SHA-256) u otros identificadores para validar la integridad y autenticidad del componente.

Fuente o ubicación: Ruta o repositorio desde donde se obtuvo el componente (ej. GitHub, PyPI, npm).

📐 Formatos estándar de SBOM
Existen diversos formatos reconocidos para representar una SBOM. Los más utilizados incluyen:

SPDX (Software Package Data Exchange)
Estándar abierto para compartir información sobre componentes, licencias y relaciones dentro del software.

CycloneDX
Formato ligero y orientado a la seguridad, ampliamente adoptado en entornos DevSecOps por su facilidad de integración.

SWID (Software Identification Tag)
Estándar ISO utilizado para identificar productos de software dentro de sistemas de gestión de activos.

🔐 SBOM y la Ciberseguridad
El papel de la SBOM en la ciberseguridad moderna es crítico, especialmente ante amenazas como los ataques a la cadena de suministro. Mantener una SBOM actualizada permite responder de forma proactiva ante vulnerabilidades emergentes, reduciendo el tiempo de exposición y facilitando parches o mitigaciones inmediatas.

🔮 SBOM y el Futuro
El uso de SBOMs se proyecta como una práctica estándar y obligatoria en la industria del software. Un ejemplo claro es la Executive Order 14028 de Estados Unidos sobre mejora de la ciberseguridad nacional (2021), que establece la necesidad de SBOMs para proveedores de software del gobierno federal.

✅ Conclusión
La SBOM no es solo una buena práctica, sino una necesidad en el desarrollo de software moderno. Su uso fortalece la seguridad, facilita el cumplimiento legal y promueve la transparencia operativa. En un entorno cada vez más expuesto a vulnerabilidades externas, contar con una SBOM precisa y actualizada se convierte en una pieza clave del ecosistema de ciberseguridad y gestión del software.

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

 ---

 Grupo3:
--
 - Sara Sofia Moreno
 - Juan Camilo Cristiano
 - Luis Alejandro Romero
 - Yonatan Castellanos
 - Marlon Artunduaga

---
 

