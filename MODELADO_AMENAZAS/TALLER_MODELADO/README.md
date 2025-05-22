## **Ejercicio Práctico: Modelado de Amenazas en DevSecOps con STRIDE y DREAD**

En grupos de trabajo realizar el siguinete ejercicio y  crear una carpeta por grupo con su desarrollo de acuerdo a las indicaciones de clase. 

### Objetivo del ejercicio:

Aplicar los modelos **STRIDE** y **DREAD** para identificar y priorizar amenazas de seguridad en una canalización CI/CD (Integración Continua / Entrega Continua), dentro de un entorno DevSecOps, que automatiza el despliegue de una aplicación web basada en microservicios.

---

## Escenario

Una empresa de tecnología ha desarrollado una aplicación web de e-commerce construida con microservicios (usuarios, pagos, productos, inventario). El equipo DevSecOps ha automatizado el proceso de integración y despliegue usando:

* **Repositorio Git privado (GitHub/GitLab)**
* **Pipeline CI/CD (Jenkins/GitLab CI)**
* **Escaneo de seguridad con herramientas como SonarQube, Trivy, Snyk**
* **Contenedores Docker orquestados con Kubernetes**
* **Despliegue en la nube (AWS/Azure/GCP)**

El pipeline tiene los siguientes pasos:

1. **Commit en Git** ➝
2. **Compilación y pruebas** ➝
3. **Análisis de seguridad del código y dependencias** ➝
4. **Construcción de imagen Docker** ➝
5. **Escaneo de contenedores** ➝
6. **Despliegue en clúster Kubernetes**

---

## Parte 1: Identificación de amenazas con STRIDE

### Instrucciones:

Para cada uno de los elementos del pipeline, utiliza el modelo **STRIDE** para identificar posibles amenazas de seguridad. Describe **al menos una amenaza por cada categoría** de STRIDE para **una de las etapas del pipeline** (por ejemplo: despliegue en Kubernetes o uso del repositorio Git).

| Categoría STRIDE           | Descripción general       | Amenaza identificada (ejemplo para repositorio Git)                                     |
| -------------------------- | ------------------------- | --------------------------------------------------------------------------------------- |
| S - Spoofing               | Suplantación de identidad | Un atacante compromete credenciales de un desarrollador y hace push de código malicioso |
| T - Tampering              | Alteración de datos       | Un atacante modifica el archivo Dockerfile para incluir un backdoor                     |
| R - Repudiation            | Negación de acciones      | Un desarrollador borra commits y dice que nunca los hizo                                |
| I - Information Disclosure | Fuga de información       | Logs del pipeline contienen secretos expuestos en texto plano                           |
| D - Denial of Service      | Interrupción del servicio | Un script en el pipeline ejecuta un `fork bomb` que derrumba el nodo Jenkins            |
| E - Elevation of Privilege | Escalada de privilegios   | Una imagen Docker contiene acceso root sin restricciones                                |

**Tu tarea:** Elige una de las siguientes etapas y rellena la tabla STRIDE para identificar amenazas específicas:

* Repositorio Git
* Pipeline CI/CD
* Construcción de imágenes Docker
* Despliegue en Kubernetes

---

## Parte 2: Evaluación de amenazas con DREAD

### Instrucciones:

Para **tres amenazas** identificadas con STRIDE, evalúalas usando el modelo **DREAD**, asignando valores del **1 (bajo) al 10 (alto)** para cada criterio:

| Criterio DREAD       | Descripción                                    |
| -------------------- | ---------------------------------------------- |
| D - Damage Potential | ¿Qué tanto daño puede causar la amenaza?       |
| R - Reproducibility  | ¿Qué tan fácil es reproducir la amenaza?       |
| E - Exploitability   | ¿Qué tan fácil es explotar la amenaza?         |
| A - Affected Users   | ¿Cuántos usuarios se verían afectados?         |
| D - Discoverability  | ¿Qué tan fácil es descubrir la vulnerabilidad? |

Luego, calcula la puntuación total (suma de las 5 métricas) y prioriza las amenazas según su puntaje (mayor puntaje = mayor prioridad).

### Ejemplo:

| Amenaza                                             | D | R | E | A | D | Total |
| --------------------------------------------------- | - | - | - | - | - | ----- |
| Push malicioso al repositorio con credencial robada | 9 | 8 | 8 | 9 | 6 | 40    |
| Fuga de secretos en logs                            | 7 | 6 | 5 | 8 | 7 | 33    |
| Contenedor con acceso root sin restricciones        | 8 | 9 | 9 | 9 | 8 | 43    |

**Tu tarea:** Evalúa con DREAD al menos 3 amenazas que hayas identificado con STRIDE.

---

## Preguntas de reflexión

1. ¿Cuál fue la amenaza más crítica y por qué?
2. ¿Qué controles de seguridad específicos del enfoque DevSecOps podrías aplicar para mitigar estas amenazas?
3. ¿Qué importancia tiene integrar el modelado de amenazas dentro del pipeline de CI/CD?

---

## Criterios de evaluación del ejercicio

* Aplicación correcta del modelo STRIDE para identificar amenazas relevantes.
* Razonamiento adecuado en la puntuación DREAD.
* Priorización coherente de amenazas.
* Propuestas de mitigación alineadas con el enfoque DevSecOps.

---

