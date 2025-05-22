<div align="center">
  <h1>Evaluación de Vulnerabilidades con Docker Scout</h1>
</div>

## ¿Qué es Docker Scout?

Docker Scout es una herramienta que analiza imágenes de contenedor para detectar:

- Vulnerabilidades conocidas (CVEs)
- Buenas prácticas de configuración
- Dependencias inseguras
- Capas y metadatos

Scout permite a los desarrolladores y equipos DevSecOps fortalecer la seguridad en el ciclo de vida de imágenes Docker.

## ¿Qué analiza Docker Scout?

Docker Scout inspecciona los siguientes elementos de una imagen:

| Elemento                | Evaluado |
|-------------------------|----------|
| Sistema base (Alpine, Debian, etc.) | ✅ |
| Librerías y paquetes instalados     | ✅ |
| Capas Docker (`RUN`, `COPY`, etc.) | ✅ |
| Variables de entorno               | ⚠️ Visibles, pero no escaneadas por CVEs |
| Puertos expuestos                 | ✅ |
| Archivos del sistema             | ✅ |


## Requisitos previos

- Tener instalado Docker Desktop con Docker Scout habilitado
- Haber iniciado sesión en Docker Hub:

  ```bash
  docker login
  ```

<div align="center">
  <h1>Activacón y uso de Docker Scout sobre el contenedor creado en dockerhub "maquinaescribir"</h1>
</div>

Vamos a usar el siguiente repositorio para el analisis: [wrafaelbc](https://hub.docker.com/r/wrafaelbc/reto)

### Paso 1. Activación de Docker Scout

Iniciamos sesión en Docker Hub y buscamos el repositorio con la imagen, una vez allí seleccionamos la pestaña **Activate**

![reto1](images/reto1.png)

Dentro de la pestaña activamos Docker Scout image analysis y guardamos cambios

![reto2](images/reto2.png)

### Paso 2. Escaneo rápido

Una vez activada la funcion de Docker Scout este comenzara el analisis de forma inmediata.

![reto3](images/reto3.png)

Muestra un resumen de vulnerabilidades encontradas y recomendaciones, en nuestro ejemplo no encontro ninguna vulnerabilidad.

![reto4](images/reto4.png)


### Observación

Docker Scout evalúa imágenes en función de políticas de seguridad, como:

- Uso de versiones vulnerables de paquetes.

- Configuraciones inseguras.

- Buenas prácticas de construcción de imágenes.

![reto5](images/reto5.png)

3/7 indica que tu imagen solo cumple 3 de estas 7 políticas, lo cual sugiere que hay 4 áreas que podrían mejorarse para reforzar la seguridad o el cumplimiento.

Al ingresar a una de ellas vemos las causas y recomendaciones que este nos da.

![reto6](images/reto6.png)

## Limitaciones

- No escanea contenedores **en ejecución**
- No detecta **malware personalizado**
- No analiza volúmenes montados ni configuración dinámica de red

---

## Conclusión

| Funcionalidad                       | Disponible |
|------------------------------------|------------|
| Escaneo de vulnerabilidades (CVEs) | ✅         |
| Sugerencias de remediación         | ✅         |
| Comparación entre imágenes         | ✅         |
| Escaneo de variables de entorno    | ⚠️         |
| Análisis de contenedores en ejecución | ❌     |

## Integrantes

- Diana Lizeth Mahecha Guevara  
- Carlos Andres David Ovalle  
- German Alexis Gonzalez Reay  
- Jairo Yesid Rodriguez Gonzalez  
- Wuilmer Rafael Briceño Camacho
