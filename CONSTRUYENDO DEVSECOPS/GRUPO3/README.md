SBOM (Software Bill of Materials)

---

Generar un SBOM (Software Bill of Materials) automáticamente desde un proyecto como Node.js o Python es una práctica fundamental para la seguridad del software, ya que permite listar de forma estructurada todas las dependencias y componentes usados. A continuación, te explico cómo hacerlo en ambos entornos:

---

¿Qué es un SBOM?
Un SBOM es un inventario detallado de todos los componentes de software (dependencias, bibliotecas, versiones, etc.) incluidos en una aplicación. Es clave para gestionar vulnerabilidades y cumplir con normas sobre ciberseguridad. Ayuda a:
- Identificar vulnerabilidades conocidas.
- Facilitar auditorías de seguridad.
- Cumplir con regulaciones.
---
Generar SBOM en Node.js

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

 Formatos comunes de SBOM

 - CycloneDX (JSON/XML)
 - SPDX (Software Package Data Exchange)
 - SWID (Software Identification Tags)

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

 Estructura esperada:

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
 

